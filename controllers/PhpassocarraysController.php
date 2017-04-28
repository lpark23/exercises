<?php

class PhpassocarraysController extends BaseController
{
    //Problem 1. Word Mapping
    function problem1()
    {
        if ($this->isPost){
            $text = $_POST['inputtext'];
            $output = $this->model->textmapping($text);
            $this->input = $text;
            $this->output = $output;
        }
    }
    //Problem 2. Count Real Numbers
    function problem2()
    {
        if ($this->isPost){
            $list = trim($_POST['list']) ;
            $numbers = explode(" ",$list);
            $output = $this->model->countReal($numbers);
            $this->input = $list;
            $this->output = $output;
        }
    }
    //Problem 3. Coloring Texts
    function problem3()
    {
        if ($this->isPost){
            $text = trim($_POST['text']) ;

            $result = $this->model->cuttext($text);
            $output = $result;

            $this->input = $text;
            $this->output = $output;
        }
    }
    //Problem 4. Coloring Texts
    function problem4()
    {
        if ($this->isPost){
            $categories = trim($_POST['categories']) ;
            $tags = trim($_POST['tags']) ;
            $months = trim($_POST['months']) ;
            $this->inputcat = $categories;
            $this->inputtags = $tags;
            $this->inputm = $months;

            $categories = $this->model->side($categories);
            $tags = $this->model->side($tags);
            $months = $this->model->side($months);

            $result = array();
            $result['Categories'] = $categories;
            $result['Tags'] = $tags;
            $result['Months'] = $months;

            $output = $result;
            $this->output = $output;
        }
    }
    //Problem 5. Text Filter
    function problem5()
    {
        if ($this->isPost){
            $text = trim($_POST['text']);
            $banlist = trim($_POST['banlist']);
            $this->inputtext = $text;
            $banWords = explode(", ",$banlist);
            foreach ($banWords as $word) {
                $text = str_replace($word, str_repeat("*", strlen($word)), $text);
            }
            $output = $text;
            $this->output = $output;
        }
    }
    //Problem 6. *Sentence Extractor
    function problem6()
    {
        if ($this->isPost){
            $text = trim($_POST['text']);
            $word = trim($_POST['word']);
            $this->inputtext = $text;

            preg_match_all("/([^.?!]*\\b" . $word . "\\b[^?!]*[?!])/", $text, $res);
            $this->result = implode("\n",$res[0]);
        }
    }
    //Problem 7. **URL Replacer
    function problem7()
    {
        if ($this->isPost){
            $text = $_POST['text'];
            $this->inputtext = $text;

            $text = str_replace("<a href=\"", "[URL=", $text);
            $text = str_replace("\">", "]", $text);
            $text = str_replace("</a>", "[/URL]", $text);
            
            $this->result = $text;
        }
    }
}
