<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;
    use Searchable;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class)->with("category:id,slug");
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

    public static function deleteThumbnail($newsPost)
    {
        if (!empty($newsPost->thumbnail) && file_exists(public_path("storage/thumbnails/$newsPost->thumbnail"))) {
            unlink(public_path("storage/thumbnails/$newsPost->thumbnail"));
        }
    }
}
