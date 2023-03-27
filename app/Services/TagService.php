<?php

namespace App\Services;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagService
{
    public function createTag(Request $request, $post)
    {
        if ($request->input("tags")) {
            $request->validate([
                "tags"=>["required","string","max:255"],
            ]);

            $tagsNewArray=[];
            $tagsArray=explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $tagsNewArray[]=trim($tag);
            }

            $tagsNewArray=array_values(array_unique($tagsNewArray));


            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();

                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->language_id=$post->language_id;
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $post->tags()->attach($tagModel);
                }

                if ($countExisitngTags) {
                    foreach ($exisitngTags as $exisitngTag) {
                        $post->tags()->attach($exisitngTag);
                    }
                }
            }
        }
    }

    public function updateNewsPostTag(Request $request, $newsPost)
    {
        if ($request->input("tags")) {
            $request->validate([
                "tags"=>["required","string","max:255"],
            ]);

            $tagsNewArray=[];
            $tagsArray=explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $tagsNewArray[]=trim($tag);
            }

            $tagsNewArray=array_values(array_unique($tagsNewArray));

            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();



                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->language_id=$newsPost->language_id;
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $newsPost->tags()->attach($tagModel);
                }

                foreach ($newsPost->tags as $videoExistTag) {
                    if ($videoExistTag) {
                        $newsPost->tags()->detach($exisitngTags);
                    }
                }


                if ($countExisitngTags) {
                    foreach ($exisitngTags as $exisitngTag) {
                        $newsPost->tags()->attach($exisitngTag);
                    }
                }
            }
        }
    }

    public function updateVideoNewsTag(Request $request, $videoNewsPost)
    {
        if ($request->input("tags")) {
            $request->validate([
                "tags"=>["required"],
            ]);

            $tagsNewArray=[];
            $tagsArray=explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $tagsNewArray[]=trim($tag);
            }

            $tagsNewArray=array_values(array_unique($tagsNewArray));

            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();

                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->language_id=$videoNewsPost->language_id;
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $videoNewsPost->tags()->attach($tagModel);
                }

                foreach ($videoNewsPost->tags as $videoExistTag) {
                    if ($videoExistTag) {
                        $videoNewsPost->tags()->detach($exisitngTags);
                    }
                }

                if ($countExisitngTags) {
                    foreach ($exisitngTags as $exisitngTag) {
                        $videoNewsPost->tags()->attach($exisitngTag);
                    }
                }
            }
        }
    }
}
