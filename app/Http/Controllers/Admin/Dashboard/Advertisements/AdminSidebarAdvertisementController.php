<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use App\Http\Requests\SidebarAdvertisementRequest;
use App\Models\SidebarAdvertisement;
use App\Services\SidebarAdvertisementService;
use Butschster\Head\Facades\Meta;

class AdminSidebarAdvertisementController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Sidebar Advertisement");

        $sidebarAdvertisement = SidebarAdvertisement::first();

        return view('admin.dashboard.advertisements.sidebar-advertisement.edit', compact("sidebarAdvertisement"));
    }

    public function update(SidebarAdvertisementRequest $request, SidebarAdvertisementService $sidebarAdvertisementService)
    {
        $sidebarAdvertisement=SidebarAdvertisement::where("id", 1)->first();

        $topAdvertisementPhoto=$sidebarAdvertisementService->uploadTopAdvertisementPhoto($request, $sidebarAdvertisement);

        $bottomAdvertisementPhoto=$sidebarAdvertisementService->uploadBottomAdvertisementPhoto($request, $sidebarAdvertisement);

        $sidebarAdvertisement->update($request->validated()+[
            "top_advertisement_photo"=>$topAdvertisementPhoto,
            "bottom_advertisement_photo"=>$bottomAdvertisementPhoto,
        ]);
        return redirect()->back()->with("success", "Sidebar advertisements is updated successfully");
    }
}
