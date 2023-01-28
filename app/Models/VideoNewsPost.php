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

    #[SearchUsingFullText(['body'])]
    public function toSearchableArray()
    {
        return [
            "title" => $this->title,
            "body" => $this->body,
        ];
    }

    public function scopeFilterRequest($query, $filterKeyword)
    {
        $query->when($filterKeyword["query"]??null, function ($query, $keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where("title", "LIKE", "%".$keyword."%")
                ->orWhere("body", "LIKE", "%".$keyword."%");
            });
        });
    }
}
