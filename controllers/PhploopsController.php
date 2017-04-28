<?php

class PhploopsController extends BaseController
{
    //Problem 1. Square Root Sum
    function problem1()
    {
        if ($this->isPost){
            $start = $_POST['start'];
            $end = $_POST['end'];
            $startint = (int)$start;
            $endint = (int)$end;
            $totalsum = (int)0;
            $result = array();

            if ($startint %2 != 0 || $endint %2 != 0){
                $startint-=1;
                $endint+=1;
            }
            if ($startint < 0 || $endint < 0){
                $startint = abs($startint);
                $endint = abs($endint);
            }
            if ($startint > $endint){
                $cur = $startint;
                $startint = $endint;
                $endint = $cur;
            }
            for ($i = $startint ;$i <= $endint;$i += 2){
                $sqrt = round(sqrt($i),2);
                $totalsum += $sqrt;
                $result[$i] = $sqrt;
            }
            $this->result = $result;
            $this->totalsum = $totalsum;
        }
    }
    //Problem 2. Rich People’s Problems
    function problem2()
    {
        if ($this->isPost){
            $cars = trim($_POST['cars']);
            $cars = array_map('trim',array_filter(explode(',',$cars)));
            $this->cars = $cars;
        }
    }
    //Problem 3. Show Annual Expenses
    function problem3()
    {
        if ($this->isPost){
            $years = intval(trim($_POST['years']));
            $currentYear = intval(date('Y'));
            $result = array();

            for ($i = 0; $i < $years; $i++) {
                $totalYearExpense = 0;
                for ($j = 0; $j < 12; $j++) {
                    $result[$currentYear][$i][$j] = $this->model->getRandomSum();
                    $totalYearExpense += $result[$currentYear][$i][$j];
                }
                $total[$currentYear] = $totalYearExpense;
                $this->total = $total;
                $currentYear--;
            }
            $this->result = $result;
        }
    }
    //Problem 4. *Find Primes in Range
    function problem4()
    {
        if ($this->isPost){
            $start = abs(intval($_POST['start']));
            $end = abs(intval($_POST['end']));
            $result = array();
            if ($start > $end){
                $cur = $start;
                $start = $end;
                $end = $cur;
            }

            for ($num = $start; $num <= $end; $num++) {
                if ($num > 1 && $this->model->isPrime($num)) {
                    $result[$num] = "<b>{$num}</b>, ";
                } else {
                    $result[$num] = "{$num}, ";
                }
            }
            $this->result = $result;
            $this->start = $start;
            $this->end = $end;
        }
    }
    //Problem 5. Sum of Digits
    function problem5()
    {
        if ($this->isPost){
            $numbers = trim($_POST['numbers']);
            $numbers = array_map('trim',array_filter(explode(',',$numbers)));
            $result = array();

            foreach ($numbers as $number) {
                if (!is_numeric($number)) {
                    $result[$number] = "I cannot sum that";
                } else {
                    $digitsSum = $this->model->getDigitsSum($number);
                    $result[$number] = $digitsSum;
                }
            }
            $this->numbers = trim($_POST['numbers']);
            $this->result = $result;
        }
    }
    //Problem 6. Modify String
    function problem6()
    {
        if ($this->isPost){
            $result = array();
            $options = ['palindrome', 'reverse', 'split', 'hash', 'shuffle'];
            $inputstr = trim($_POST['inputstr']);
            $option = trim($_POST['option']);

            foreach ($options as $statoption){
                if ($statoption == $option){
                    $result = $this->model->addMod($inputstr, $option);
                }
            }

            $this->result = $result;
        }
    }



}
