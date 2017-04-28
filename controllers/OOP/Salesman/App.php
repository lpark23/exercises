<?php

namespace controllers\OOP\Salesman;

use controllers\OOP\Salesman\Models\{
    Car as Car, Engine as Engine
};

class App
{
    private $engines = [];
    private $cars = [];

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $input = explode(", ", trim($_POST['info']));
        $enginesCount  = intval($input[0]);

        for ($i = 1; $i < $enginesCount + 1; $i++) {
            $engineData = explode(" ", trim($input[$i]));
            $engineModel = $engineData[0];
            $enginePower = intval($engineData[1]);
            $engineDisplacement = null;
            $engineEfficiency = null;
            if (count($engineData) > 2) {
                if (is_numeric($engineData[2])) {
                    $engineDisplacement = intval($engineData[2]);
                } else {
                    $engineEfficiency = $engineData[2];
                }
            }

            if (count($engineData) > 3) {
                $engineEfficiency = $engineData[3];
            }

            $selectedEngine = new Engine($engineModel, $enginePower, $engineDisplacement, $engineEfficiency);
            $this->addEngine($selectedEngine);
        }

        $carsCount = intval($input[$enginesCount + 1]);
        for ($i = 2; $i < $carsCount + 2; $i++) {
            $carData = explode(" ", trim($input[$enginesCount + $i]));
            $carModel = $carData[0];
            $carEngine = $carData[1];
            $carWeight = null;
            $carColor = null;
            if (count($carData) > 2) {
                if (is_numeric($carData[2])) {
                    $carWeight = intval($carData[2]);
                } else {
                    $carColor = $carData[2];
                }
            }

            if (count($carData) > 3) {
                $carColor = $carData[3];
            }
            $selectedEngine = $this->getEngineByName($carEngine);
            $car = new Car($carModel, $selectedEngine, $carWeight, $carColor);
            $this->addCar($car);
        }

        return $this->cars;
    }

    private function addEngine(Engine $engine)
    {
        $this->engines[$engine->getModel()] = $engine;
    }

    private function addCar(Car $car)
    {
        $this->cars[] = $car;
    }

    private function getEngineByName(string $name): Engine
    {
        return $this->engines[$name];
    }

}