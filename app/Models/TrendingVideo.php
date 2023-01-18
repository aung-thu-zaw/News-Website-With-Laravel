<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingVideo extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            "owner" => $this->owner,
            "caption" => $this->caption,
        ];
    }
}
