<?php

class PhparraysController extends BaseController
{
    //Problem 1. Largest Common End
    function problem1()
    {
        if ($this->isPost){
            $firstArray = $_POST['first'];
            $secondArray = $_POST['second'];
            $firstArray = array_filter(explode(' ',$firstArray));
            $secondArray = array_filter(explode(' ',$secondArray));
            $count = $this->model->countCommon($firstArray, $secondArray);

            if ($count == 0){
                $firstArrayRev = array_reverse($firstArray);
                $secondArrayRev = array_reverse($secondArray);
                $count = $this->model->countCommon($firstArrayRev, $secondArrayRev);
                $bold = $this->model->bold($firstArrayRev, $secondArrayRev);
                for($i = 0 ; $i < 4; $i++){
                    $bold[$i] = array_reverse($bold[$i]);
                }
                $way = "<u>right</u>";
            }
            else {
                $bold = $this->model->bold($firstArray,$secondArray);
                $way = "<u>left</u>";
            }

            $this->count = $count;
            $firstArrayOut = implode(", ",$bold[0]);
            $this->firstwords = $firstArrayOut;
            $secondtArrayOut = implode(", ",$bold[1]);
            $this->secondwords = $secondtArrayOut;
            $comments = implode(", ",$bold[3]);
            $this->comments = "The largest common end is at the ".$way.": ".$comments;
        }
    }
    //Problem 2. Rotate and Sum
    function problem2()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']);
            $k = intval($_POST['k']);
            $array = array_filter(explode(' ',$inputArray));

            $sum = $this->model->sum($array, $k);
            $sum = implode(" ",$sum);
            $this->sum = $sum;

            $results = $this->model->rotates($array,$k);
            $this->results = $results;

            $this->inputarray = $inputArray;
            $this->k = $k;
        }
    }
    //Problem 3. Max Sequence of Equal Elements
    function problem3()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']);
            $array = array_filter(explode(' ',$inputArray));

            $results = $this->model->maxSequence($array);

            $this->inputarray = $inputArray;
            $this->results = $results;
        }
    }

    //Problem 4. Max Sequence of Increasing Elements
    function problem4()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']);
            $array = array_filter(explode(' ',$inputArray));

            $results = $this->model->maxSeqIncreasing($array);

            $this->inputarray = $inputArray;
            $this->results = $results;
        }
    }
    //Problem 5. Most Frequent Number
    function problem5()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']);
            $array = array_filter(explode(' ',$inputArray));

            $numbers = $this->model->frequentNumber($array);
            $result = $this->model->mostFrequent($numbers);

            $outputarray = $this->model->boldMFN($array, $result[0]);
            $output = implode(" ", $outputarray);
            $this->output = $output;
            $this->num = $result[0];
            $this->count = $result[1];
        }
    }
    //Problem 6. Index of Letters
    function problem6()
    {
        if ($this->isPost){
            $letters = mb_strtolower(trim($_POST['letters'])) ;

            $this->inputletters = $letters;
            $result = $this->model->indexLetter($letters);
            $output = implode("<br>",$result);
            $this->output = $output;
        }
    }
    //Problem 7. Equal Sums
    function problem7()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']) ;
            $arrays = array_filter(explode(' ',$inputArray));
            $commnets = '';

            $result = $this->model->equalSum($arrays);

            if ($result <= 0){
                $commnets = $this->model->commentsEqualSumN($arrays, $result );
            }
            if ($result > 0){
                $commnets = $this->model->commentsEqualSum($arrays, $result );
            }
            $this->input = $inputArray;
            $this->output = $result;
            $this->comments = $commnets;
        }
    }
    //Problem 10. Sum Reversed Numbers
    function problem10()
    {
        if ($this->isPost){
            $inputArray = trim($_POST['inputarray']);
            $array = array_filter(explode(' ',$inputArray));
            $sum = $this->model->sumArrayElements($array);
            $revArray = $this->model->revArrayElements($array);
            $this->input = $inputArray;
            $this->output = $sum;
            $this->comments = $revArray." = ".$sum;
        }
    }
}
