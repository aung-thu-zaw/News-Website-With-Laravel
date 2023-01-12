<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }


    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, "tagable");
    }
}
