<?php

class PhpsyntaxModel extends BaseModel
{
    public function valProblem1(string $fname, string $lname, $age) : bool
    {
        if(strlen($fname)<1){
            $this->addInfoMessage("Too short first name");
            $this->setValidationError("fname","Too short first name");
        }
        if(strlen($lname) < 1){
            $this->addInfoMessage("Too short last name");
            $this->setValidationError("lname","Too short last name");
        }
        if(!($age > 0 && $age < 100)){
            $this->addInfoMessage("Invalid Age Interval: 0..100");
            $this->setValidationError("age","Invalid number");
        }
        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }

    public function valProblem2(string $firstNumber, string $secondNumber) : bool
    {
        if(!($firstNumber > 0 or $firstNumber < 0)){
            $this->addInfoMessage("You have to insert correct first number");
            $this->setValidationError("firstnumber","You have to insert correct first number");
        }
        if(!($secondNumber > 0 or $secondNumber < 0)){
            $this->addInfoMessage("You have to insert correct second number");
            $this->setValidationError("secondNumber","You have to insert number");
        }
        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }

    public function checkType(string $option)
    {
        $type = "";
        if ($option == "int"){
            $type = "int";
        }
        if ($option == "double"){
            $type = "double";
        }
        if ($option == "string"){
            $type = "string";
        }
        if ($option == "array"){
            $type = "array";
        }
        if ($option == "object"){
            $type = "object";
        }
        return $type;
    }

    function msgIntType($isInt)
    {
        if ($isInt) {
            $checkType = "Variable is int";
        } else {
            $checkType = "Variable is not int";
        }
        return $checkType;
    }

    function varIsInt($var) 
    {
        if ($var[0] == '-') {
            return ctype_digit(substr($var, 1));
        }
        return ctype_digit($var);
    }

    function checkDouble($var) 
    {
        $paternDouble = "/^[0-9]*[\.][0-9]*$/";
        if (preg_match($paternDouble, $var )) {
            $checkDouble= "Variable is double";
        } else {
            $checkDouble = "Variable is not double";
        }
        return $checkDouble;
    }

    function checkString($var) 
    {
        $paternString = "/^[a-zA-Z0-9]*[\ [a-zA-Z0-9]*/";
        if (preg_match($paternString, $var )) {
            $checkString= "Variable is string";
        } else {
            $checkString = "Variable is not string";
        }
        return $checkString;
    }

    function checkArray($var) 
    {
        $paternArray = "/^array\([0-1a-zA-Z,\"]*\)*/";
        if (preg_match($paternArray, $var )) {
            $checkArray = "Variable is array";
        } else {
            $checkArray = "Variable is not array. Write: array(?,?,\"?\",?,?)";
        }
        return $checkArray;
    }

    function checkObject($var) 
    {
        $paternObject = "/^\(object\)\[[\ 0-9a-zA-Z],*[\ 0-9a-zA-Z].*\]/";
        if (preg_match($paternObject, $var )) {
            $checkObject = "Variable is object";
        } else {
            $checkObject = "Variable is not object.Write (object)[?,?,?,..,? ]";
        }
        return $checkObject;
    }

    function isDistinct($num)
    {
        $num = '' . $num;
        $current = [];
        for ($i = 0; $i < strlen($num); $i++) {
            $currentNum = $num[$i];
            if (in_array($currentNum, $current)) {
                return false;
            }
            array_push($current, $currentNum);
        }
        return true;
    }

    function valProblem6(string $fname, string $lname, $age, $phone, $address) : bool
    {
        if(strlen($fname)<1){
            $this->addInfoMessage("Too short first name");
            $this->setValidationError("fname","Too short first name");
        }
        if(strlen($lname) < 1){
            $this->addInfoMessage("Too short last name");
            $this->setValidationError("lname","Too short last name");
        }
        if(!($age > 0 && $age < 100)){
            $this->addInfoMessage("Invalid Age Interval: 0..100");
            $this->setValidationError("age","Invalid number");
        }
        $paternPhone = "/^[0][1-9]{3}[0-9]{6}/";
        if (preg_match($paternPhone, $phone )) {

        } else {
            $this->addInfoMessage("Invalid Phone Number format : 0 XXX XXX XXX");
            $this->setValidationError("phone","Invalid number");
        }

        if(strlen($address) < 1){
            $this->addInfoMessage("Too short address name");
            $this->setValidationError("lname","Too short address name");
        }

        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }
    
}
