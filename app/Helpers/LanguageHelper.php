<?php

use App\Models\Language;

class LanguageHelper
{
    public static function readJson()
    {
        $defaultLanguage=Language::where("is_default", "yes")->first();

        if (!session("language")) {
            $currentLanguage=$defaultLanguage->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $jsonData=json_decode(file_get_contents(resource_path("lang/".$currentLanguage.".json")));

        foreach ($jsonData as $key => $value) {
            define($key, $value);
        }
    }
}
