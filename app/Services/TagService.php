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
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $post->tags()->attach($tagModel);
                }

                if ($countExisitngTags) {
                    $post->tags()->attach($exisitngTags);
                }
            }
        }
    }



    public function updateTag(Request $request,$newsPost)
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


            // foreach ($tagsNewArray as $tag) {
            //     $countExisitngTags=Tag::where("name", $tag)->count();


            //     if (!$countExisitngTags) {
            //         $tagModel=new Tag();
            //         $tagModel->name=$tag;
            //         $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
            //         $tagModel->save();
            //         $newsPost->tags()->attach($tagModel);
            //     }
            // }
            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();



                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $newsPost->tags()->attach($tagModel);
                }

                foreach ($newsPost->tags as $videoExistTag) {
                    if ($videoExistTag) {
                        // $videoExistTag->tags()->attach($tag);
                        $newsPost->tags()->detach($exisitngTags);
                        // echo "hit";
                        // echo "<pre/>";
                        // echo $videoExistTag;
                    }
                }

                // die();

                if ($countExisitngTags) {
                    $newsPost->tags()->attach($exisitngTags);
                }
            }
        }
    }
}
