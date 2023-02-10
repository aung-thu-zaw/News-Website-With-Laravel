<?php

namespace App\Http\Controllers\Admin\Dashboard\AuthorPosts;

use App\Http\Controllers\Controller;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminAuthorVideoNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Author Video News Posts");

        $videoNewsPosts=VideoNewsPost::where("user_id", "!=", 1)
                   ->filterRequest(request(["search"]))
                   ->orderBy("id", "desc")
                   ->paginate(10)
                   ->withQueryString();

        $videoNewsPosts->load("subCategory", "author", "language");

        return view("admin.dashboard.author-posts.video-news-posts.index", compact("videoNewsPosts"));
    }

    public function destroy($id)
    {
        $videoNewsPost=VideoNewsPost::where("id", $id)->first();

        $videoNewsPost->delete();

        return to_route("admin.author-video-news-posts.index", "page=".request("page"))->with("success", "Video Post is deleted successfully");
    }
}
