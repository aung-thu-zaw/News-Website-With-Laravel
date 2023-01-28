<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    use Searchable;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function newsPosts()
    {
        return $this->hasMany(NewsPost::class)->with("subCategory:id,name,slug", "author:id,name");
    }


    public function videoNewsPosts()
    {
        return $this->hasMany(VideoNewsPost::class)->with("subCategory:id,name,slug", "author:id,name");
    }


    public function toSearchableArray()
    {
        return [
            "name" => $this->name,
        ];
    }
}
