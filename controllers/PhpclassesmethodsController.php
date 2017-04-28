<?php

class PhpclassesmethodsController extends BaseController
{
    //Problem 1. Define a class Person
    function problem1()
    {
        if ($this->isPost){

            spl_autoload_register(function () {
                require_once "classes/Person.php";
            });

            $name = trim($_POST['fname']);
            $age = intval($_POST['age']);

            $persons = [];
            $persons[] = new Person($name, $age);
            $this->input = $name.$age;
            $this->result = $persons;
        }
    }
    //Problem 3. Opinion Poll
    function problem3()
    {
        if ($this->isPost){
            $input = explode(" ", trim($_POST['info']));

            $result = $this->model->opinionPoll($input);

            $this->input = trim($_POST['info']);
            $this->result = $result;
        }
    }

    //Problem 4. Company Roster
    function problem4()
    {
        if ($this->isPost){

            $input = explode(", ", trim($_POST['info']));

            $bestPaidDepartment = $this->model->bestPaidDepartment($input);

            $this->input = trim($_POST['info']);
            $this->result = $bestPaidDepartment;
        }
    }
    //Problem 5. *Speed Racing
    function problem5()
    {
        if ($this->isPost){

            $result = $this->model->speedRacing();

            $this->input = explode(", ", trim($_POST['info']));
            $this->result = $result;
        }
    }
    //Problem 6. *Raw data
    function problem6()
    {
        if ($this->isPost){

            $result = $this->model->rawData();

            $this->input = explode(", ", trim($_POST['info']));

            $this->result = $result;
        }
    }
    //Problem 7. Car Salesman
    function problem7()
    {
        if ($this->isPost){

            $result = $this->model->Salesman();

            $this->input = explode(", ", trim($_POST['info']));

            $this->result = $result;
        }
    }
    //Problem 8. Pokemon Trainer
    function problem8()
    {
        if ($this->isPost){

            $result = $this->model->pokemonTrainer();

            $this->input = explode(", ", trim($_POST['info']));

            $this->result = $result;
        }
    }
    //Problem 9. Google
    function problem9()
    {
        if ($this->isPost){

            $result = $this->model->google();

            $this->input = explode(", ", trim($_POST['info']));
            $this->result = $result;
        }
    }
    //Problem 10. Method Says Hello!
    function problem10()
    {
        if ($this->isPost){
            $name = trim($_POST['name']);

            $result = $this->model->sayHello($name);

            $this->input = trim($_POST['name']);
            $this->result = $result;
        }
    }
    //Problem 11. Oldest Family Member
    function problem11()
    {
        if ($this->isPost){
            $input = explode(", ", trim($_POST['info']));

            $result = $this->model->oldestFamilyMember($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 12. Last Digit Name
    function problem12()
    {
        if ($this->isPost){
            $input = trim($_POST['number']);

            $result = $this->model->lastDigit($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 13. Number in Reversed Order
    function problem13()
    {
        if ($this->isPost){
            $input = trim($_POST['number']);

            $result = $this->model->reversed($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 14. Fibonacci Numbers
    function problem14()
    {
        if ($this->isPost){
            $input = explode(", ",trim($_POST['info']));

            $result = $this->model->fibonacciNumbers($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 15. Car
    function problem15()
    {
        if ($this->isPost){
            $input = explode(", ",trim($_POST['info']));

            $result = $this->model->car();

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 16. Date Modifier
    function problem16()
    {
        if ($this->isPost){
            $input = explode(",",trim($_POST['info']));

            $result = $this->model->dateModifier($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
    //Problem 17. *Print People
    function problem17()
    {
        if ($this->isPost){
            $input = explode(", ",trim($_POST['info']));

            $result = $this->model->printPeople($input);

            $this->input = $input;
            $this->result = $result;
        }
    }
}