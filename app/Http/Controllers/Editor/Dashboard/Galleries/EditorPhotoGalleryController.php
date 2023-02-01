<?php

namespace App\Http\Controllers\Editor\Dashboard\Galleries;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoGalleryRequest;
use App\Models\PhotoGallery;
use App\Services\PhotoGalleryService;
use Butschster\Head\Facades\Meta;

class EditorPhotoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Photo Gallery");

        $photos=PhotoGallery::search(request("search"))
                ->paginate(10)
                ->withQueryString();

        return view("editor.dashboard.galleries.photo-gallery.index", compact("photos"));
    }

    public function create()
    {
        Meta::prependTitle("Photo Create");

        return view("editor.dashboard.galleries.photo-gallery.create");
    }

    public function store(PhotoGalleryRequest $request, PhotoGalleryService $photoGalleryService)
    {
        $photo=$photoGalleryService->uploadPhoto($request);

        $photoGalleryService->createPhoto($request->validated()+["photo"=>$photo]);

        return to_route("editor.photo-gallery.index")->with("success", "Photo is created successfully");
    }

    public function edit(PhotoGallery $photoGallery)
    {
        Meta::prependTitle("Photo Edit");

        $page=request('page');

        return view("editor.dashboard.galleries.photo-gallery.edit", compact("photoGallery", "page"));
    }

    public function update(PhotoGalleryRequest $request, PhotoGallery $photoGallery, PhotoGalleryService $photoGalleryService)
    {
        $photo = $photoGalleryService->updatePhoto($request, $photoGallery);

        $photoGallery->update($request->validated() + ['photo' => $photo]);

        return to_route("editor.photo-gallery.index", "page=".request("page"))->with("success", "Photo is updated successfully");
    }

    public function destroy(PhotoGallery $photoGallery)
    {
        PhotoGallery::deletePhoto($photoGallery);

        $photoGallery->delete();

        return to_route("editor.photo-gallery.index", "page=".request("page"))->with("success", "Photo is deleted successfully");
    }
}
