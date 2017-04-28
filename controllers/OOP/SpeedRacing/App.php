<?php

namespace controllers\OOP\SpeedRacing;

use controllers\OOP\SpeedRacing\Models\Car;

class App
{
    private $cars = [];

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $input = explode(", ", trim($_POST['info']));
        $numOfCars = intval($input[0]);

        for ($i = 1; $i < $numOfCars + 1; $i++) {
            $carDetails = explode(" ", trim($input[$i]));
            $car = new Car(...$carDetails);
            $this->addCar($car);
        }
        $drive = $numOfCars + 1;

        $result = array();
        $msg = array();

        do {
            $commandTokens = explode(" ", $input[$drive]);
            if ($commandTokens[1] === null) {
                break;
            }
            else {
                try {
                    $car = $this->cars[$commandTokens[1]];
                    $car->travel(floatval($commandTokens[2]));

                } catch (\Exception $e) {
                    $msg[$drive] = $e->getMessage();
                }
            }

            $drive++;
        }while ($drive < count($input));

        $result[0] = $msg;
        $result[1] = $this->cars;
    return $result;
    }

    private function addCar(Car $car)
    {
        $this->cars[$car->getModelName()] = $car;
    }


}