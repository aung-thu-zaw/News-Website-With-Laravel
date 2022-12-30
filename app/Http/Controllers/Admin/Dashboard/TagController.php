<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }
}
