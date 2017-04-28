<?php

namespace controllers\OOP\Google;

use controllers\OOP\Google\Models\{
    Car as Car, Company as Company, Person as Person,
    Pokemon as Pokemon, Relative as Relative
};

class App
{
    const END_OF_INPUT = "End";
    private $persons = [];

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $input = explode(", ", trim($_POST['info']));
        $i = 0;
        $lastelm = 0;

        while (true) {
            $line = trim($input[$i]);
            if ($line === self::END_OF_INPUT) {
                break;
            }

            $tokens = explode(" ", $line);
            $personName = array_shift($tokens);

            $person = null;
            if ($this->personExists($personName)) {
                $person = $this->getPersonByName($personName);
            } else {
                $person = new Person($personName);
                $this->addPerson($person);
            }

            $this->addPersonDetail($person, $tokens);
            $i++;
            $lastelm = $i;
        }
        $personToLookFor = trim($input[$lastelm+1]);

        return $this->getPersonByName($personToLookFor);
    }

    private function addPersonDetail(Person $person, array $data)
    {
        $type = array_shift($data);
        switch ($type) {
            case "company":
                $person->setCompany(new Company($data[0], $data[1], floatval($data[2])));
                break;
            case "car":
                $person->setCar(new Car($data[0], intval($data[1])));
                break;
            case "pokemon":
                $person->addPokemon(new Pokemon(...$data));
                break;
            case "parents":
                $person->addParent(new Relative(...$data));
                break;
            case "children":
                $person->addChild(new Relative(...$data));
                break;
            default:
                throw new \Exception("Invalid Command!");
                break;
        }
    }

    private function addPerson(Person $person)
    {
        $this->persons[$person->getName()] = $person;
    }

    private function personExists(string $name): bool
    {
        return array_key_exists($name, $this->persons);
    }

    private function getPersonByName(string $name): Person
    {
        return $this->persons[$name];
    }

}