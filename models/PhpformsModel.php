<?php

class PhpformsModel extends BaseModel
{
    function commaAndSpace($var)
    {
        $patternArray = "/^[a-zA-Z]*, /";
        if(preg_match($patternArray, $var)){
        }
        else{
            $this->addInfoMessage("You have to insert correct pattern with comma and space(..., ..., ..., ... )");
            $this->setValidationError("as","You have to separated by a comma and space");
        }

        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }

    function arrayCountValues_ci($array)
    {
        $ret_array = array();
        foreach($array as $value) {
            foreach($ret_array as $key2 => $value2) {
                if(strtolower($key2) == strtolower($value)) {
                    $ret_array[$key2]++;
                    continue 2;
                }
            }
            $ret_array[$value] = 1;
        }
        array_multisort(array_values($ret_array), SORT_DESC, array_keys($ret_array),$ret_array);

        return $ret_array;
    }

    function mostFrequent($countArray)
    {
        $max = array();
        for ($i = 0; $i<count($countArray);$i++){
            foreach ($countArray as $k => $val){
                if ($val == max($countArray)){
                    $max[$k] = $k;
                }
            }
        }

        return $max;
    }


    public function calculate($amount, $compound, $period)
    {
        $this->principle = $amount;
        $this->compoundings = $compound/12;
        $this->rate = $this->compoundings;
        $this->term = $period;

        return $this->calculate_annual_compound_interest();
    }

    private function rate_as_percentage()
    {
        return $this->rate / 100;
    }

    private function exponent()
    {
        return $this->term * $this->compoundings;
    }

    private function rate_over_compoundings()
    {
        return ($this->rate_as_percentage() / $this->compoundings);
    }

    private function interest_calculation()
    {
        return pow((1 + $this->rate_over_compoundings()), $this->exponent());
    }

    private function calculate_annual_compound_interest(){
        $raw = $this->principle * $this->interest_calculation();
        return round($raw, 2);
    }


    function perosnalInfoValid($fname,$lname,$phone,$email,$birthday,$national)
    {
        if (!(ctype_alpha($fname)) || mb_strlen($fname) <= 2 || mb_strlen($fname) > 20) {
            $this->addInfoMessage("You have to insert correct First Name (>2 and <20 sumbols)");
            $this->setValidationError("","");
        }

        if (!(ctype_alpha($lname)) || mb_strlen($lname) <= 2 || mb_strlen($lname) > 20) {
            $this->addInfoMessage("You have to insert correct Last Name (>2 and <20 symbols)");
            $this->setValidationError("","");
        }
        $paternPhone = "/^[0][1-9]{3}[0-9]{6}/";
        if (preg_match($paternPhone, $phone )) {

        } else {
            $this->addInfoMessage("Invalid Phone Number format : 0 XXX XXX XXX");
            $this->setValidationError("phone","Invalid number");
        }
        $paternEmail = "/[a-zA-Z0-9._%+-]+@[a-zA-Z]*.[a-z]{2,4}/";
        if (preg_match($paternEmail, $email )) {

        } else {
            $this->addInfoMessage("Invalid Email format : some_text4@some.domain");
            $this->setValidationError("email","Invalid email");
        }

        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }
    function companyInfoValid($company,$workfrom, $workto)
    {
        if(!(ctype_alpha($company)) || mb_strlen($company) <= 2 || mb_strlen($company) > 40){
            $this->addInfoMessage("You have to insert correct Company Name (>2 and <40 symbols)");
            $this->setValidationError("","");
        }
        if(is_numeric($workfrom)){
            $this->addInfoMessage("You have to correct Start working date");
            $this->setValidationError("","");
        }
        if(is_numeric($workto)){
            $this->addInfoMessage("You have to correct End working date");
            $this->setValidationError("","");
        }

        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }

    function programmingInfoValid($pclang)
    {
        $length = count($pclang);
        for ($i = 0; $i<$length;$i++) {
            if (mb_strlen($pclang[$i]) <= 0 || mb_strlen($pclang[$i]) > 20) {
                $this->addInfoMessage("You have to insert correct Langunages (>2 and <20 symbols)");
                $this->setValidationError("","");
            }
        }

        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }

    function langInfoValid($lang, $conceptionLevel,$readLevel,$writeLevel)
    {
        $length = count($lang);
        for ($i = 0; $i < $length; $i++) {
            if (!(ctype_alpha($lang[$i])) || mb_strlen($lang[$i]) <= 1 || mb_strlen($lang[$i]) > 20) {
                $this->addInfoMessage("You have to select language");
                $this->setValidationError("","");
            }
        }

        for ($i = 0; $i < $length; $i++) {
            if ($conceptionLevel[$i]==='-Conception-') {
                $this->addInfoMessage("You have to select Conception");
                $this->setValidationError("","");
            }
        }
        for ($i = 0; $i < $length; $i++) {
            if ($readLevel[$i]==='-Reading-') {
                $this->addInfoMessage("You have to select Reading");
                $this->setValidationError("","");
            }
        }
        for ($i = 0; $i < $length; $i++) {
            if ($writeLevel[$i]==='-Writing-') {
                $this->addInfoMessage("You have to select Writing");
                $this->setValidationError("","");
            }
        }


        if ($this->formValid()){
            return true;
        }
        else{
            return false;
        }
    }


}
