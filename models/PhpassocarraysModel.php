<?php

class PhpassocarraysModel extends BaseModel
{
    function textmapping($text)
    {
        preg_match_all("/[a-zA-Z]+/", $text, $words);
        $words = array_map("strtolower", $words[0]);
        $countwords = array();
        foreach ($words as $word) {
            if (!array_key_exists($word, $countwords)) {
                $countwords[$word] = 0;
            }
            $countwords[$word]++;
        }
        return $countwords;
    }

    function countReal($numbers)
    {
        $result = array();
        foreach ($numbers as $number) {
            if (!array_key_exists($number, $result)) {
                $result[$number] = 0;
            }

            $result[$number]++;
        }
        return $result;
    }

    function cuttext($text)
    {
        $result = "";
        for ($ch = 0; $ch < strlen($text); $ch++) {
            if (!empty($text[$ch])) {
                $result .= $text[$ch];
            }
        }
        return $result;
    }
    
    function side($array)
    {
        $result = explode(", ",$array);
        return $result;
    }

}
