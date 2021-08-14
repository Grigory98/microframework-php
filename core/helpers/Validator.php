<?php

namespace Core\Helpers;

class Validator
{
    public function isEmail($str) {
        // checking string for correct Email
        if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
            return true;
        } 
    }

    public function isDomain($str) {
        // checking string for correct domain
        if(filter_var(gethostbyname($str), FILTER_VALIDATE_IP)) {
            return true;
        }
    }

    public function inRange($num, $from, $to) {
        // checking number if nubmer in Range
        if($num >= $from && $num <= $to) {
            return true;
        }

    }

    public function inLength($str, $from, $to) {
        // checking string if length in Range
        $num = iconv_strlen($str);
        return $this->inRange($num, $from, $to);
    }
}