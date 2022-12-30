<?php

class StringHelper
{
    public static function title($data)
    {
        return Illuminate\Support\Str::limit($data, 50);
    }
    public static function description($data)
    {
        return Illuminate\Support\Str::limit($data, 200);
    }
}
