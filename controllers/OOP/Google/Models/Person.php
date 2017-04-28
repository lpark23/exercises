<?php

namespace controllers\OOP\Google\Models;

class Person
{
    private $name;
    private $company = null;
    private $car = null;
    private $pokemons = [];
    private $parents = [];
    private $children = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    public function setCar(Car $car)
    {
        $this->car = $car;
    }

    public function addPokemon(Pokemon $pokemon)
    {
        $this->pokemons[] = $pokemon;
    }

    public function addParent(Relative $parent)
    {
        $this->parents[] = $parent;
    }

    public function addChild(Relative $child)
    {
        $this->children[] = $child;
    }

    public function __toString(): string
    {
        $output = "{$this->name}" . "<br>";

        $output .= "Company: ";
        $output .= $this->company != null ? $this->company . "<br>" : "<br>";

        $output .= "Car: ";
        $output .= $this->car != null ? $this->car . "<br>" : "<br>";

        $output .= "Pokemon: ";
        foreach ($this->pokemons as $pokemon) {
            $output .= $pokemon . "<br>";
        }

        $output .= "Parents: ";
        foreach ($this->parents as $parent) {
            $output .= $parent . "<br>";
        }

        $output .= "Children: ";
        foreach ($this->children as $child) {
            $output .= $child . "<br>";
        }

        return $output;
    }
}