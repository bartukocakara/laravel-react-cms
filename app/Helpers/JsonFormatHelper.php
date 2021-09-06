<?php

namespace App\Helpers;

class JsonFormatHelper
{
    protected function isJson($string)
    {
        $status = false;
        $message = '';

        try{
            json_decode($string);
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    $status = true;
                    break;
                case JSON_ERROR_DEPTH:
                    $status = false;
                    $message = 'Maximum stack depth exceeded';
                    break;
                case JSON_ERROR_STATE_MISMATCH:
                    $status = false;
                    $message = 'Underflow or the modes mismatch';
                    break;
                case JSON_ERROR_CTRL_CHAR:
                    $status = false;
                    $message = 'Unexpected control character found';
                    break;
                case JSON_ERROR_SYNTAX:
                    $status = false;
                    $message = 'Syntax error, malformed JSON';
                    break;
                case JSON_ERROR_UTF8:
                    $status = false;
                    $message = 'Malformed UTF-8 characters, possibly incorrectly encoded';
                    break;
                default:
                    $status = false;
                    $message = 'Unknown error';
                    break;
            }

        }catch ( \Exception $exception){
            $status = false;
            $message = $exception->getMessage();
        }

        if (!$status){
            //create log
            $logData['action'] = 'API Json Request';
            $logData['error'] = $message;
            $logData['status'] = $status;
            $logData['request'] = $string;

            if (auth()->check()){
                $logData['app_id'] = auth()->user()->app_id ?? '';
                $logData['merchant_id'] = auth()->user()->merchant_id ?? '';
            }
            $this->commonApiLog($logData);

        }

        return [$status, $message];
    }
}
