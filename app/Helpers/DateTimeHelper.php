<?php

class DateTimeHelper
{
    public static function formatDate($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("Y-F-j");
    }

    public static function formatDateTime($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("h:i A, l F d ,Y");
    }

    public static function formatYearAndMonth($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("Y, F");
    }

    public static function formatYear($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("Y");
    }

    public static function formatMonth($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("m");
    }

    public static function formatDay($data, $dataTimeStamp)
    {
        return $data->$dataTimeStamp->format("d");
    }
}
