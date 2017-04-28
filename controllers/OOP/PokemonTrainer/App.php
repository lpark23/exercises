<?php

namespace controllers\OOP\PokemonTrainer;

use controllers\OOP\PokemonTrainer\Models\{
    Pokemon as Pokemon, Trainer as Trainer
};


class App
{
    const LINE_TOUR = "Tournament";
    const LINE_END = "End";
    private $trainers = [];

    public function start()
    {
        return $this->processInput();
    }

    private function processInput()
    {
        $input = explode(", ", trim($_POST['info']));

        $i = 0;
        $current = 0;
        while (true) {
            $line = trim($input[$i]);
            if ($line === self::LINE_TOUR) {
                break;
            }

            $tokens = explode(" ", trim($line));

            $trainer = null;
            if (!$this->trainerExists($tokens[0])) {
                $trainer = new Trainer($tokens[0]);
                $this->addTrainer($trainer);
            } else {
                $trainer = $this->getTrainerByName($tokens[0]);
            }

            $pokemon = new Pokemon($tokens[1], $tokens[2], intval($tokens[3]));
            $trainer->addPokemon($pokemon);
            $i++;
            $current = $i;
        }

        while (true) {
            $line = trim($input[$current+1]);
            if ($line === self::LINE_END) {
                break;
            }

            $element = $line;
            foreach ($this->trainers as $name => $trainer) {
                if ($trainer->hasPokemonOfElement($element)) {
                    $trainer->addBadge();
                } else {
                    $trainer->reducePokemonsHealth(10);
                    $trainer->removeDeadPokemons();
                }
            }
            $current++;
        }

        return $this->sortTraiers();

    }

    private function trainerExists(string $name): bool
    {
        return array_key_exists($name, $this->trainers);
    }

    private function addTrainer(Trainer $trainer)
    {
        $this->trainers[$trainer->getName()] = $trainer;
    }

    private function getTrainerByName(string $name): Trainer
    {
        return $this->trainers[$name];
    }

    private function sortTraiers()
    {
        usort($this->trainers, function (Trainer $trainerA, Trainer $trainerB) {
            return -($trainerA->getBadgesCount() <=> $trainerB->getBadgesCount());
        });

        return $this->trainers;
    }
}