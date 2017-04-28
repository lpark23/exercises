<?php

namespace controllers\home\examples;
use controllers\home\examples\Models\Exercise;

class App
{
    private $lessons ;

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $file = fopen("content/homework.txt", "r") or exit("Unable to open file!");
        $j = 0;
        while(!feof($file))
        {
            $countproblem[$j] = fgets($file);
            $lesson = fgets($file);
            $exercises = array();
            for ($i = 0 ; $i < $countproblem[$j] ; $i++){
                $exercise = fgets($file);
                $title = fgets($file);
                $content = fgets($file);
                $exercises[$i] = new Exercise($exercise,$title,$content);
            }
            $this->lessons[$lesson] = $exercises;
            $j++;
        }
        fclose($file);

        return $this->showLessons();
    }

    function showLessons()
    {
        return $this->lessons;
    }

}