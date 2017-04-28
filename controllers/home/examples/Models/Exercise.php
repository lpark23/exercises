<?php

namespace controllers\home\examples\Models;

class Exercise{
    private $practice;
    private $title;
    private $content;

    public function __construct(string $practice, string $title, string $content)
    {
        $this->practice = $practice;
        $this->title = $title;
        $this->content = $content;
    }

    public function getPractice()
    {
        return $this->practice;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function __toString():string
    {
        return "{$this->getPractice()} ! {$this->getTitle()} ! {$this->getContent()}";
    }


}