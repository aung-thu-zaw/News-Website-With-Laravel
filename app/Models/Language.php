<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            "name" => $this->name,
            "short_name" => $this->short_name,
        ];
    }
}
