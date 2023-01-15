<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidebarAdvertisement extends Model
{
    use HasFactory;

    public static function deleteTopAdvertisementPhoto($sidebarAdvertisement)
    {
        if (!empty($sidebarAdvertisement->top_advertisement_photo) && file_exists(public_path("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo"))) {
            unlink(public_path("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo"));
        }
    }

    public static function deleteBottomAdvertisementPhoto($sidebarAdvertisement)
    {
        if (!empty($sidebarAdvertisement->bottom_advertisement_photo) && file_exists(public_path("storage/advertisements/$sidebarAdvertisement->bottom_advertisement_photo"))) {
            unlink(public_path("storage/advertisements/$sidebarAdvertisement->bottom_advertisement_photo"));
        }
    }
}
