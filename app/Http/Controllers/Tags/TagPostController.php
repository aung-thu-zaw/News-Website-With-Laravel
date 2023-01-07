<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagPostController extends Controller
{
    public function show(Tag $tag)
    {
        return view();
    }
}
