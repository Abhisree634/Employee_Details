<?php

namespace App\Helpers;

class ToasterHelper
{
    public static function success($key, $message)
    {
        session()->flash($key, $message);
    }
}
