<?php

class PhploopsModel extends BaseModel
{
    function getRandomColor()
    {
        $colors = ['black', 'yellow', 'green', 'blue', 'red', 'pink'];

        return $colors[mt_rand(0, sizeof($colors) - 1)];
    }

    function getRandomSum()
    {
        return mt_rand(0, 999);
    }

    function isPrime($num)
    {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function getDigitsSum($number)
    {
        $sum = 0;
        for ($ch = 0; $ch < strlen($number); $ch++) {
            $sum += intval($number[$ch]);
        }
        return $sum;
    }

    function addMod($str, $option)
    {
        if ($option == "palindrome"){
            return $this->isPalindrome($str);
        }
        if ($option == "reverse"){
            return $this->reverse($str);
        }
        if ($option == "split"){
            return $this->split($str);
        }
        if ($option == "hash"){
            return $this->getHash($str);
        }
        if ($option == "shuffle"){
            return $this->shuffleString($str);
        }
    }

    function isPalindrome($str)
    {
        $str = trim($str);
        if (strrev($str) === $str)
            return "<b>{$str}</b> is a palindrome!";

        return "<b>{$str}</b> is not a palindrome!";
    }

    function reverse($str)
    {
        return strrev($str);
    }

    function split($str)
    {
        return implode(' ', array_filter(str_split($str), function ($ch) {
            return ctype_alpha($ch);
        }));
    }

    function getHash($str)
    {
        return crypt($str);
    }

    function shuffleString($str)
    {
        $chars = str_split($str);
        shuffle($chars);

        return implode('', $chars);
    }


}
