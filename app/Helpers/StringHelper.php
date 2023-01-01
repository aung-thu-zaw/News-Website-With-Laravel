<?php

class StringHelper
{
    public static function title($data)
    {
        return Illuminate\Support\Str::limit($data, 50);
    }
    public static function description($data, $limit=200)
    {
        return Illuminate\Support\Str::limit($data, $limit);
    }
}
