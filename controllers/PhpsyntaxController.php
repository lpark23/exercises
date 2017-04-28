<?php

class PhpsyntaxController extends BaseController
{
    //Problem 1. Personal Info
    function problem1()
    {
        if ($this->isPost){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            if ($this->model->valProblem1($fname, $lname, $age)){
                $fullname = strtolower($fname)." ".strtolower($lname);
                $this->fullname = ucwords($fullname) ;
                $this->age = $age;
            }
        }
    }

    //Problem 2. Sum Two Numbers
    function problem2()
    {
        if ($this->isPost){
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

            if ($this->model->valProblem2($firstNumber, $secondNumber)){
                $sum = $firstNumber + $secondNumber;
                $decSum = number_format($sum,2);

                $result = '$firstNumber'." + ".'$secondNumber'." = "."$firstNumber"." + "."$secondNumber"." = "."$decSum";
                $this->result = $result;
            }
        }
    }

    //Problem 3. Dump variable
    function problem3()
    {
        if ($this->isPost){
            $var = $_POST['var'];
            $this->var = $var;

            $isInt = $this->model->varIsInt($var);
            $inttype = $this->model->msgIntType($isInt);
            $this->inttype = $inttype;

            $checkDouble = $this->model->checkDouble($var);
            $this->checkdouble = $checkDouble;

            $checkString = $this->model->checkString($var);
            $this->checkstring = $checkString;

            $checkArray = $this->model->checkArray($var);
            $this->checkarray = $checkArray;

            $checkObject = $this->model->checkObject($var);
            $this->checkobject = $checkObject;
        }
    }

    //Problem 4. Non-Repeating Digits
    function problem4()
    {
        if ($this->isPost){
            $number = $_POST['number'];
            $this->number = $number;

            if (ctype_digit($number) && $number < 1000){
                $num = $number;
                $res = [];
                for ($i = 102; $i <= $num; $i++) {
                    if ($this->model->isDistinct($i)) {
                        array_push($res, $i);
                    }
                }
                if (sizeof($res) === 0) {
                    $result = "No";
                } else {
                    $result = implode(', ', $res);
                }
                $this->result = $result;
            }
            else{
                $this->addInfoMessage("You have to insert correct number [102...1000]. ");
            }
        }

    }

    //Problem 5. Lazy Sundays
    function problem5()
    {
        if ($this->isPost){
            $start = $_POST['start'];
            $end = $_POST['end'];

            $stimestamp = strtotime($start);
            $endtimestamp = strtotime($end);
            for ($curdate = $stimestamp,$i=0 ;$curdate < $endtimestamp;$curdate+=86400){
                $allDays[$i] = $curdate;
                $this->curdate = $allDays;
                $i++;
            }
        }


    }
    //Problem 6. HTML Table
    function problem6()
    {
        if ($this->isPost){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['age'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            if ($this->model->valProblem6($fname, $lname, $dob, $phone, $address)){
                $fullname = strtolower($fname)." ".strtolower($lname);
                $this->fullname = ucwords($fullname);
                $this->age = $dob;
                $this->phone = $phone;
                $this->address = ucwords($address);
            }
        }
    }
    //Problem 7. Form data
    function problem7()
    {
        if ($this->isPost){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];

            if ($gender == 1){
                $gender = "male";
            } else{
                $gender = "male";
            }

            if ($this->model->valProblem1($fname, $lname, $age)){
                $fullname = strtolower($fname)." ".strtolower($lname);
                $this->fullname = ucwords($fullname) ;
                $this->age = $age;
                $this->gender = $gender;
            }
        }
    }
    //Problem 8. Time Until New Year
    function problem8()
    {

        if ($this->isPost){
            $startdate = $_POST['startdate'];
            $starttime = $_POST['starttime'];

            date_default_timezone_set("UTC");

            $start = $startdate."-".$starttime;
            $this->startat = $start;
            $now = strtotime($start);
            $year = date('Y', $now);
            $newYear = strtotime("31-12-{$year} 23:59:59");
            $diff = $newYear - $now;
            $this->hours = $remainHours = number_format(floor($diff / 60 / 60), 0, '.', '');
            $this->minutes = $remainMinutes = number_format(floor($diff / 60), 0, '.', ' ');
            $this->seconds = $remainSeconds = number_format($diff, 0, '.', ' ');
            $days = floor($diff / 60 / 60 / 24);
            $hours = floor($diff / 60 / 60) % $days;
            $minutes = floor($diff / 60) % 60;
            $seconds = $diff % 60;
            $this->mixed = $remainMixed = "{$days}:{$hours}:{$minutes}:{$seconds}";
        }
    }
    //Problem 9. Calendar
    function problem9()
    {
        date_default_timezone_set("UTC");
        if ($this->isPost){
            $year = $_POST['year'];
            if ($year > 1970 && $year < 2037){
                $orgTmp = strtotime("01-01-{$year} 0:0:01");
                $sec = 1;
                $min = floor($sec*60);
                $hh = floor($min*60);
                $d = floor($hh*24);

                $this->orgtmp = $orgTmp;
                $this->indexday = $d;
                $this->monthyear = date('Y',$orgTmp);
            }
            else{
                $this->addInfoMessage("You have to insert correct year [1970...2037]. ");

            }
        }
    }

    
}
