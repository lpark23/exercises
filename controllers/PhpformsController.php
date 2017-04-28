<?php

class PhpformsController extends BaseController
{
    //Problem 1. Print Tags
    function problem1()
    {
        if ($this->isPost){
            $tags = $_POST['tags'];
            $checkTag = $this->model->commaAndSpace($tags);

            if ($checkTag){
                $arrayTag = explode(", ", $tags);

                $this->arraytags = $arrayTag;

            }
        }
    }
    //Problem 2. Most Frequent Tag
    function problem2()
    {
        if ($this->isPost){
            $tags = $_POST['tags'];
            $checkTag = $this->model->commaAndSpace($tags);

            if ($checkTag){
                $arrayTag = explode(", ", $tags);
                $countArray = $this->model->arrayCountValues_ci($arrayTag);
                $max = $this->model->mostFrequent($countArray);
                $this->maxfrequent = $max;
                $this->arraytags = $countArray;
            }
        }
    }
    //Problem 3. Calculate Interest
    function problem3()
    {
        $arrayPeriod = array(1 => '1 month', 2 => '2 months', 3 => '3 months',
            4 => '4 months', 5 => '5 months', 6 => '6 months',12 => '1 year',
            18 => '1 year and 6 months', 24 => '2 years');
        $this->periodavbl = $arrayPeriod;

        if ($this->isPost){
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $compound = $_POST['compound'];
            $period = $_POST['period'];

            if (is_numeric($amount)){
                $this->currency = $currency;
                $this->result = $this->model->calculate($amount, $compound, $period);
            }
            else{
                $this->addInfoMessage("You have to insert number for amount");
                $this->setValidationError("","Enter Number only");
            }
        }
    }
    //Problem 4. HTML Tags Counter
    function problem4()
    {
        $htmlTags = array('doctype','html','head','body','h1','h2','h3','h4','h5','h6','p','ul','ol','a','table',
            'strong','b','div','header','nav','article','footer','aside','section','img','map','area','form',
            'input','br','button','title','li','th','tr','td','label','menu');

        $this->exampletags = $htmlTags;

        if (!isset($_SESSION['counthtmltag']))
            $_SESSION['counthtmltag'] = 0;

        if ($this->isPost){
            if (isset($_POST['tags'])){
                $tag = $_POST['tags'];
                $trimtag = trim($tag,"\<\>");
                foreach ($htmlTags as $htmlTag){
                    if ($trimtag == $htmlTag){
                        $_SESSION['counthtmltag']++;
                        $_SESSION['validhtml'] = "<label class=".'"label-success"'.">"."Valid HTML tag"."</label>";
                        break;
                    }
                    else{
                        $_SESSION['validhtml'] = "<label class=".'"label-danger"'.">"."Invalid HTML tag"."</label>";
                    }
                }
            }
            if (isset($_POST['hidden'])){
                session_destroy();
                $_SESSION['validhtml'] = null;
                $_SESSION['counthtmltag'] = 0;
            }
        }
    }
    //Problem 5. CV Generator
    function problem5()
    {
        if ($this->isPost){

            $fname = trim($_POST['fname']) ;
            $lname = trim($_POST['lname']);
            $phone = trim($_POST['phone']);
            $email = $_POST['email'];
            $birthday = $_POST['birthday'];
            $national = $_POST['national'];

            $company = $_POST['company'];
            $workfrom = $_POST['workfrom'];
            $workto = $_POST['workto'];

            $pclang = $_POST['pc-lang'];
            $pclevel = $_POST['pc-level'];
            
            $lang = $_POST['lang'];
            $conceptionLevel = $_POST['con-level'];
            $readLevel = $_POST['read-level'];
            $writeLevel = $_POST['write-level'];

            $driveCat = $_POST['category'];

            $personaInfo = $this->model->perosnalInfoValid($fname,$lname,$phone,$email,$birthday,$national);
            $companyInfo = $this->model->companyInfoValid($company, $workfrom, $workto);
            $programmingInfo = $this->model->programmingInfoValid($pclang);
            $langinfo = $this->model->langInfoValid($lang, $conceptionLevel,$readLevel,$writeLevel);
            
            if (($personaInfo == true) ){
                $showPerson = array('Full Name' => ucwords(strtolower($fname)." ".strtolower($lname)),
                    'Phone Number' => $phone, 'Email' => $email, 'Birthday' => $birthday, 'Nationality'=> $national);
                $this->showperson = $showPerson;
            }
            if ($companyInfo == true){
                $showCompany = array('Company Name' => strtoupper($company),
                    'Start working' => $workfrom, 'End working' => $workto);
                $this->showcompany = $showCompany;
            }
            if ($programmingInfo == true){
                $this->showpclanguages = $pclang;
                $this->showpclevel = $pclevel;
            }

            if ($langinfo == true){
                $this->showlanguages = $lang;
                $this->showconceptionlevel = $conceptionLevel;
                $this->showreadlevel = $readLevel;
                $this->showwritelevel = $writeLevel;
            }

            $this->drivecategory = $driveCat;
        }
    }
    
}
