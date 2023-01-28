<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use Searchable;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }


    public function toSearchableArray()
    {
        return [
            "name" => $this->name,
        ];
    }
}
