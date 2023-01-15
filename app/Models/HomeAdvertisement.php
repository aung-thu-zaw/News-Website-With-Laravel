<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAdvertisement extends Model
{
    use HasFactory;

    public static function deleteTopAdvertisementPhoto($homeAdvertisement)
    {
        if (!empty($homeAdvertisement->top_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->top_advertisement_photo"))) {
            unlink(public_path("storage/advertisements/$homeAdvertisement->top_advertisement_photo"));
        }
    }

    public static function deleteMiddleAdvertisementPhoto($homeAdvertisement)
    {
        if (!empty($homeAdvertisement->middle_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->middle_advertisement_photo"))) {
            unlink(public_path("storage/advertisements/$homeAdvertisement->middle_advertisement_photo"));
        }
    }

    public static function deleteBottomAdvertisementPhoto($homeAdvertisement)
    {
        if (!empty($homeAdvertisement->bottom_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->bottom_advertisement_photo"))) {
            unlink(public_path("storage/advertisements/$homeAdvertisement->bottom_advertisement_photo"));
        }
    }
}
