<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeAdvertisementRequest;
use App\Models\HomeAdvertisement;
use App\Services\HomeAdvertisementService;
use Butschster\Head\Facades\Meta;

class AdminHomeAdvertisementController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Home Advertisement");

        $homeAdvertisement = HomeAdvertisement::first();

        return view('admin.dashboard.advertisements.home-advertisement.edit', compact("homeAdvertisement"));
    }

    public function update(HomeAdvertisementRequest $request, HomeAdvertisementService $homeAdvertisementService)
    {
        $homeAdvertisement=HomeAdvertisement::where("id", 1)->first();

        $topAdvertisementPhoto=$homeAdvertisementService->uploadTopAdvertisementPhoto($request, $homeAdvertisement);

        $middleAdvertisementPhoto=$homeAdvertisementService->uploadMiddleAdvertisementPhoto($request, $homeAdvertisement);

        $bottomAdvertisementPhoto=$homeAdvertisementService->uploadBottomAdvertisementPhoto($request, $homeAdvertisement);

        $homeAdvertisement->update($request->validated()+[
            "top_advertisement_photo"=>$topAdvertisementPhoto,
            "middle_advertisement_photo"=>$middleAdvertisementPhoto,
            "bottom_advertisement_photo"=>$bottomAdvertisementPhoto,
        ]);

        return redirect()->back()->with("success", "Home advertisements is updated successfully");
    }
}
