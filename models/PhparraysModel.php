<?php

class PhparraysModel extends BaseModel
{
    function countCommon($arrA, $arrB)
    {
        $length = min(count($arrA), count($arrB));
        $current = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($arrA[$i] == $arrB[$i]) {
                $current++;
            } else {
                break;
            }
        }
        return $current;
    }

    function bold($arrA, $arrB)
    {
        $result = array();
        $length = min(count($arrA), count($arrB));
        for ($i = 0; $i < $length; $i++) {
            if ($arrA[$i] == $arrB[$i]) {
                $arrA[$i] = "<b>{$arrA[$i]}</b>";
                $arrB[$i] = "<b>{$arrB[$i]}</b>";
                $result[3][$i] = $arrA[$i];
            } else {
                break;
            }
        }
        $result[0] = $arrA;
        $result[1] = $arrB;
        return $result;
    }
    
    function sum($array, $k)
    {
        $sum = array_fill(0, count($array), 0);
        for ($i = 0;$i < $k;$i++){
            $this->rotateArr($array);
            $this->sumArrays($sum,$array);
        }
        return $sum;
    }

    function rotates($array,$k)
    {
        $results = array();
        for ($i = 0;$i < $k;$i++){
            $results[$i] = $this->rotateArr($array);
        }
        return $results;
    }

    function rotateArr(&$arr)
    {
        $element = array_pop($arr);
        array_unshift($arr, $element);
        return $arr;
    }

    function sumArrays(&$arrSum, $arr)
    {
        for ($i = 0; $i < count($arrSum); $i++) {
            $arrSum[$i] = intval($arrSum[$i]) + intval($arr[$i]);
        }
    }

    function maxSequence($array)
    {
        $longest = 0;
        $startIndex = -1;
        for ($i = 0; $i < count($array); $i++) {
            $currentCount = 1;
            for ($k = $i + 1 ; $k < count($array); $k++) {
                if ($array[$k] == $array[$i]) {
                    $currentCount++;
                } else {
                    break;
                }
            }
            if ($currentCount > $longest) {
                $longest = $currentCount;
                $startIndex = $i;
            }
        }
        if ($startIndex > 0){
            $results = implode(' ',array_fill(0,$longest, $array[$startIndex]));
            return $results;
        }
    }

    function maxSeqIncreasing($array)
    {
        $longest = 0;
        $startIndex = -1;
        for ($i = 0; $i < count($array); $i++) {
            $currentCount = 1;
            $current = $array[$i];
            for ($k = $i + 1; $k < count($array); $k++) {
                if ($array[$k] > $current) {
                    $current = $array[$k];
                    $currentCount++;
                } else {
                    break;
                }
            }
            if ($currentCount > $longest) {
                $longest = $currentCount;
                $startIndex = $i;
            }
        }
        $results = implode(' ',array_slice($array,$startIndex,$longest));
        return $results;
    }

    function frequentNumber($array)
    {
        $numbers = [];
        foreach ($array as $num) {
            if (!array_key_exists($num, $numbers)) {
                $numbers[$num] = 0;
            }
            $numbers[$num]++;
        }
        return $numbers;
    }

    function mostFrequent($numbers)
    {
        $best = -1;
        $num = null;

        foreach ($numbers as $number => $count) {
            if ($count > $best) {
                $best = $count;
                $num = $number;
            }
        }
        $result[0] = $num;
        $result[1] = $best;
        return  $result;
    }

    function boldMFN($arrA, $num)
    {
        $length = count($arrA);
        for ($i = 0; $i < $length; $i++) {
            if ($arrA[$i] == $num) {
                $arrA[$i] = "<b>{$arrA[$i]}</b>";
            }
        }
        return $arrA;
    }

    function indexLetter($letters)
    {
        $result = array();
        for ($i = 0; $i < strlen($letters); $i++) {
            if (ctype_alpha($letters[$i])) {
                $pos = $this->letterPosition($letters[$i]);
                $result[$i] = "{$letters[$i]} => {$pos}";
            }
            elseif (is_numeric($letters[$i]))
            {
                $result[$i] = "{$letters[$i]} => is number";
            }
            else{
                $result[$i] = "{$letters[$i]} => is no letter";
            }
        }
        return $result;
    }

    function letterPosition($letter)
    {
        return ord($letter) - 97;
    }


    function equalSum($arrays)
    {
        $result = 0;
        for ($i = 0; $i < count($arrays); $i++) {
            $leftSum = array_sum(array_slice($arrays, 0, $i));
            $rightSum = array_sum(array_slice($arrays, $i + 1, count($arrays) - ($i + 1)));
            if ($leftSum == $rightSum) {
                $result= $i;
            }
        }
        return $result;
    }

    function commentsEqualSum($arrays, $result )
    {
        $commnets = "";
        $leftsum = array_sum(array_slice($arrays,0,$result));
        $rightsum = array_sum(array_slice($arrays,$result + 1,count($arrays)));
        $commnets .= "At a[{$result}] => leftsum = {$leftsum}, right sum = {$rightsum} <br> ";
        for ($i = 0;$i < count($arrays);$i++){
            if ($i < $result){
                $commnets .="a[{$i}]";
                if ($i<$result-1){
                    $commnets .= " + ";
                }
            }
            elseif ($i == $result){
                $commnets .= " = ";
            }
            if ($i > $result){
                $commnets .="a[{$i}]";
                if ($i < count($arrays) -1){
                    $commnets .= " + ";
                }
            }
        }
        return $commnets;
    }

    function commentsEqualSumN($arrays, $result )
    {
        $commnets = "";
        $i = 0;
        do{
            $leftsum = array_sum(array_slice($arrays,0,$i));
            $rightsum = array_sum(array_slice($arrays,$i+1,count($arrays) - ($i + 1)));
            $commnets .= "At a[{$i}] => leftsum = {$leftsum}, right sum = {$rightsum} <br> ";
            $i++;
        }while($i<count($arrays));
        if ($result == 0){
            $commnets .= "No such index exists";
        }
        return $commnets;
    }

    function sumArrayElements($array)
    {
        $sum = 0;
        foreach ($array as $item) {
            $sum += floatval(strrev(trim($item, '0')));
        }
        return $sum;
    }

    function revArrayElements($array)
    {
        $elrev = array();
        foreach ($array as $k => $arr){
            $elrev[$k] = strrev($arr);
        }
        return $revArray = implode("+",$elrev);
    }
    
    
}
