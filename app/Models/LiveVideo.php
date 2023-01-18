<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveVideo extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            "title" => $this->title,
        ];
    }
}
