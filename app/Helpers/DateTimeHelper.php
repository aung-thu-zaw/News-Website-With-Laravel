<?php

class DateTimeHelper
{
    public static function formatDate($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("j-F-Y");
    }

    public static function formatDateTime($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("h:i A, l F d ,Y");
    }
}
