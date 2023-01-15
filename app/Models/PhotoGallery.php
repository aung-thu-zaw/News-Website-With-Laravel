<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    public static function deletePhoto($photoGallery)
    {
        if (!empty($photoGallery->photo) && file_exists(public_path("storage/photo-gallery/$photoGallery->photo"))) {
            unlink(public_path("storage/photo-gallery/$photoGallery->photo"));
        }
    }
}
