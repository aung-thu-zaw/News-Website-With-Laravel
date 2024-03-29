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
        return $this->belongsTo(SubCategory::class)->with("category:id,name,slug");
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, "tagable");
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
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

    public function scopeFilterRequest($query, $filterKeyword)
    {
        $query->when($filterKeyword["search"]??null, function ($query, $keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where("title", "LIKE", "%".$keyword."%")
                ->orWhere("body", "LIKE", "%".$keyword."%");
            });
        });
        $query->when($filterKeyword["query"]??null, function ($query, $keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where("title", "LIKE", "%".$keyword."%")
                ->orWhere("body", "LIKE", "%".$keyword."%");
            });
        });

        $query->when($filterKeyword["subcategory"]??null, function ($query, $keyword) {
            $query->whereHas("subCategory", function ($query) use ($keyword) {
                $query->where("slug", "LIKE", "%".$keyword."%");
            });
        });
    }
}
