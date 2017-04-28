<?php

namespace controllers\OOP\Car;

use controllers\OOP\Car\Models\Car;

class App
{
    const END_OF_INPUT = "END";
    
    private $car;
    private $content = "";

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $input = explode(", ", trim($_POST['info']));
        $i = 1;

        $carTokens = explode(" ", trim($input[0]));
        $this->car = new Car($carTokens[0], floatval($carTokens[1]), floatval($carTokens[2]));

        while (true) {
            $commandTokens = explode(" ", trim($input[$i]));
            if ($commandTokens[0] === self::END_OF_INPUT) {
                break;
            }

            $command = array_shift($commandTokens);
            switch ($command) {
                case "Travel":
                    $this->car->travel(floatval($commandTokens[0]));
                    break;
                case "Refuel":
                    $this->car->reFuel(floatval($commandTokens[0]));
                    break;
                case "Distance":
                    $this->printDistance();
                    break;
                case "Time":
                    $this->printTime();
                    break;
                case "Fuel":
                    $this->printFuel();
                    break;
                default:
                    throw new \Exception("Invalid operation supplied!");
            }
            $i++;
        }
        return $this->content;
    }

    private function printDistance()
    {
        $distance = $this->formatFloat($this->car->getDistance());
        $this->content .= "Total distance: {$distance} kilometers"."<br>";
    }

    private function printTime()
    {
        $time = $this->car->getTimeTraveled();
        $this->content .= "Total time: {$time['hours']} hours and {$time['minutes']} minutes"."<br>";
    }

    private function printFuel()
    {
        $fuel = $this->formatFloat($this->car->getFuel());
        $this->content .= "Fuel left: {$fuel} liters"."<br>";
    }

    private function formatFloat(float $float): string
    {
        return number_format(round($float, 1), 1);
    }
}