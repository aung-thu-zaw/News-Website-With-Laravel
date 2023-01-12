<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoNewsPost extends Model
{
    use HasFactory;
    use Searchable;


    #[SearchUsingFullText(['body'])]
    public function toSearchableArray()
    {
        return [
            "title" => $this->title,
            "body" => $this->body,
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
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
