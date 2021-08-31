<?php

namespace App\Helpers;

class CheckHelper
{
    /**
     * Verinin boş olup olmadığını kontrol eder
     *
     * @param $data
     * @return bool
     */
    public static function isNotEmpty($data): bool
    {
        if (!is_null($data) || !empty($data) || $data != null || $data != "") {
            return true;
        }
        return false;
    }
}
