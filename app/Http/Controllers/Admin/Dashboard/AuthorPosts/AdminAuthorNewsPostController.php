<?php

namespace App\Http\Controllers\Admin\Dashboard\AuthorPosts;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminAuthorNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Author News Posts");

        $newsPosts=NewsPost::where("user_id", "!=", 1)
                   ->filterRequest(request(["search"]))
                   ->orderBy("id", "desc")
                   ->paginate(10)
                   ->withQueryString();

        $newsPosts->load("subCategory", "author");

        return view("admin.dashboard.author-posts.news-posts.index", compact("newsPosts"));
    }

    public function destroy($id)
    {
        $newsPost=NewsPost::where("id", $id)->first();

        NewsPost::deleteThumbnail($newsPost);

        $newsPost->delete();

        return to_route("admin.author-news-posts.index", "page=".request("page"))->with("success", "Post is deleted successfully");
    }
}
