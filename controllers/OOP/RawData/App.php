<?php

namespace controllers\OOP\RawData;

use controllers\OOP\RawData\Models\{
    Car as Car, Cargo as Cargo,
    Engine as Engine,
    Tire as Tire
};


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

        $lastLine = count($input);
        for ($i = 1; $i < $numOfCars + 1 ; $i++) {
            $carDetails = explode(" ", $input[$i]);

            $model = $carDetails[0];

            $engineSpeed = intval($carDetails[1]);
            $enginePower = intval($carDetails[2]);
            $engine = new Engine($engineSpeed, $enginePower);

            $cargoWeight = intval($carDetails[3]);
            $cargoType = $carDetails[4];
            $cargo = new Cargo($cargoWeight, $cargoType);

            $tire1Pressure = floatval($carDetails[5]);
            $tire1Age = intval($carDetails[6]);
            $tire1= new Tire($tire1Age, $tire1Pressure);

            $tire2Pressure = floatval($carDetails[7]);
            $tire2Age = intval($carDetails[8]);
            $tire2= new Tire($tire2Age, $tire2Pressure);

            $tire3Pressure = floatval($carDetails[9]);
            $tire3Age = intval($carDetails[10]);
            $tire3= new Tire($tire3Age, $tire3Pressure);

            $tire4Pressure = floatval($carDetails[11]);
            $tire4Age = intval($carDetails[12]);
            $tire4= new Tire($tire4Age, $tire4Pressure);

            $car  = new Car($model, $engine, $cargo, $tire1, $tire2, $tire3, $tire4);
            $this->cars[] = $car;
        }

        $printType = trim($input[$lastLine-1]);
        $filteredCars = null;
        if ($printType === "flamable") {
            $filteredCars = $this->getFlammableCars();
        } else {
            $filteredCars = $this->getFragileCars();
        }

        $result = array();
        foreach ($filteredCars as $k => $car) {
            $result[$k] = $car;
        }

        return $result;
    }

    private function getFlammableCars(): array
    {
        return array_filter($this->cars, function (Car $car) {
            if ($car->getCargo()->getType() === "flamable" &&
                $car->getEngine()->getPower() > 250) {
                return true;
            }

            return false;
        });
    }

    private function getFragileCars(): array
    {
        return array_filter($this->cars, function (Car $car) {
            if ($car->getCargo()->getType() === "fragile") {
                foreach ($car->getTires() as $tire) {
                    if ($tire->getPressure() < 1) {
                        return true;
                    }
                }
            }

            return false;
        });
    }
}