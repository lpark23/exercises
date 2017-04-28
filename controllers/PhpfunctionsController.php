<?php
require_once "classes/Islands.php";

class PhpfunctionsController extends BaseController
{
    //Problem 1. Inside Volume
    function problem1()
    {
        if ($this->isPost){
            $coordinates = trim($_POST['coordinates']);

            $coordinate = array_map("floatval", explode(", ", $coordinates));
            $this->result = $coordinate;

            $result = array();
            for ($i = 0; $i < count($coordinate); $i += 3) {
                if (isset($coordinate[$i], $coordinate[$i + 1], $coordinate[$i + 2])) {
                    $result[$i] = $this->model->findPointPosition(...array_slice($coordinate, $i, 3));
                }
            }
            $this->input = $coordinate;
            $this->result = $result;
        }
    }
    //Problem 2. Road Radar
    function problem2()
    {
        if ($this->isPost){
            $speed = intval(trim($_POST['speed']));
            $area = trim($_POST['area']);

            $limitArea = $this->model->getLimitArea($area);
            $infraction = $this->model->getInfraction($speed, $limitArea);
            if ($infraction){
                $this->result = $infraction;
            }else{
                $this->result = "No infraction";
            }

            $input = ["$speed" => "$area"];
            $this->input = $input;
        }
    }
    //Problem 3. *Template format
    function problem3()
    {
        if ($this->isPost){
            $quiz = trim($_POST['quiz']);

            $arrayquiz = $this->model->inputToArray($quiz);
            $xml = $this->model->generateXmlFromArray($arrayquiz);

            $this->input = $arrayquiz;
            $this->result = $xml;
        }
    }
    //Problem 4. Cooking by Numbers
    function problem4()
    {
        if ($this->isPost){
            $number = floatval(trim($_POST['number']));
            $operations = explode(", ", trim($_POST['operations']));
            $operationsstring = implode(" ",$operations);
            $input = ["$number" => "$operationsstring"];
            $this->input = $input;

            $cook = $this->model->cooking($number,$operations);
            $this->result = $cook;
        }
    }
    //Problem 5. Modify Average
    function problem5()
    {
        if ($this->isPost){
            $number = trim($_POST['number']);
            $digits = array_map("intval", str_split($number, 1));

            if (count($digits) <= 6){
                if (is_numeric($number))
                    $result = $this->model->getAvgNumber($number);
            }else{
                $msg = "Digits of number must be no more 6.";
                $result = $msg;
            }
            $this->input = $number;
            $this->result = $result;
        }
    }
    //Problem 6. Validity Checker
    function problem6()
    {
        if ($this->isPost){
            $coordinates = trim($_POST['coordinates']);

            $result = $this->model->valChecker($coordinates);

            $this->input = $coordinates;
            $this->result = $result;
        }
    }
    //Problem 7. Treasure Locator
    function problem7()
    {
        if ($this->isPost){
            $coordinate = trim($_POST['coordinates']);
            
            $result = $this->model->treasureLocation($coordinate);

            $this->input = $coordinate;
            $this->result = $result;
        }
    }

}

