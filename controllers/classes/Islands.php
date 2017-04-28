<?php
class Islands {
    function __construct($x1, $x2, $y1, $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }

    function isOnIsland(float $x, float $y): bool
    {
        if ($x >= $this->x1 && $x <= $this->x2 && $y >= $this->y1 && $y <= $this->y2){
            return true;
        }
        return false;
    }
}