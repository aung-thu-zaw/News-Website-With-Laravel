<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function newsPosts()
    {
        return $this->morphedByMany(NewsPost::class, "tagable")->with("subCategory", "author");
    }

    public function videoNewsPosts()
    {
        return $this->morphedByMany(VideoNewsPost::class, "tagable");
    }
}
