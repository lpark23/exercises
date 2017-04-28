<?php
use controllers\OOP\CompanyRoster\Models\{
    Employee as Employees, Department as Departments,
    Company as Companies
};
use controllers\OOP\SpeedRacing\App;
use controllers\OOP\RawData\App as AppRawData;
use controllers\OOP\Salesman\App as AppSalesman;
use controllers\OOP\PokemonTrainer\App as AppPokemonTrainer;
use controllers\OOP\Google\App as AppGoogle;
use controllers\OOP\SayHello\Person as HellpPerson;
use controllers\OOP\OldestFamilyMember\Person as AgePerson;
use controllers\OOP\OldestFamilyMember\Family;
use controllers\OOP\LastDigitName\Number;
use controllers\OOP\Reversed\DecimalNumber as DecNumber;
use controllers\OOP\FibonacciNumbers\Fibonacci;
use controllers\OOP\Car\App as AppCar;
use controllers\OOP\DateModifier\DateModifier as DateMod;
use controllers\OOP\PrintPeople\Person as PrintPerson;

class PhpclassesmethodsModel extends BaseModel
{

    function opinionPoll($input)
    {
        spl_autoload_register(function () {
            require_once "./controllers/classes/Person.php";
        });

        for ($i = 0; $i < count($input); $i++) {
            $name = $input[$i];
            $age = intval($input[++$i]);
            $persons[] = new Person($name, $age);
        }
        $filteredPersons = array_filter($persons, function (Person $person) {
            return $person->getAge() > 30;
        });

        usort($filteredPersons, function (Person $personA, Person $personB) {
            return $personA->getName() <=> $personB->getName();
        });

        return $filteredPersons;
    }

    function bestPaidDepartment(array $input)
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/CompanyRoster/Models/Department.php";
            require_once "./controllers/OOP/CompanyRoster/Models/Company.php";
            require_once "./controllers/OOP/CompanyRoster/Models/Employee.php";
        });

        $countInput = intval(count($input));
        $company = new Companies();
        for ($i = 0; $i < $countInput; $i++) {
            $line = explode(" ", $input[$i]);

            $name = $line[0];
            $salary = floatval($line[1]);
            $position = $line[2];
            $departmentName = $line[3];

            $email = null;
            $age = null;

            if (isset($line[4])) {
                if (is_numeric($line[4])) {
                    $age = intval($line[4]);
                } else {
                    $email = $line[4];
                    $sym[$i] = $line[4];
                }
            }
            if (isset($line[5])) {
                if (is_numeric($line[5])) {
                    $age = intval($line[5]);
                }
            }
            if (!$company->hasDepartment($departmentName)) {
                $department = new Departments($departmentName);
                $company->addDepartment($department);
            }
            $department = $company->getDepartment($departmentName);
            $employee = new Employees($name, $salary, $position, $department, $email, $age);
            $department->hireEmployee($employee);
        }

        return $bestPaidDepartment = $company->getBestPaidDepartment();

    }

    function speedRacing()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/SpeedRacing/Models/Car.php";
            require_once "./controllers/OOP/SpeedRacing/App.php";
        });
        $app = new App();

        $result = $app->start();

        return $result;
    }

    function rawData()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/RawData/Models/Car.php";
            require_once "./controllers/OOP/RawData/Models/Cargo.php";
            require_once "./controllers/OOP/RawData/Models/Engine.php";
            require_once "./controllers/OOP/RawData/Models/Tire.php";
            require_once "./controllers/OOP/RawData/App.php";
        });
        $app = new AppRawData();
        $result = $app->start();

        return $result;
    }

    function Salesman()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/Salesman/Models/Car.php";
            require_once "./controllers/OOP/Salesman/Models/Engine.php";
            require_once "./controllers/OOP/Salesman/App.php";
        });
        $app = new AppSalesman();
        $result = $app->start();

        return $result;
    }

    function pokemonTrainer()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/PokemonTrainer/Models/Pokemon.php";
            require_once "./controllers/OOP/PokemonTrainer/Models/Trainer.php";
            require_once "./controllers/OOP/PokemonTrainer/App.php";
        });

        $app = new AppPokemonTrainer();
        $result = $app->start();
        return $result;
    }

    function google()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/Google/Models/Car.php";
            require_once "./controllers/OOP/Google/Models/Company.php";
            require_once "./controllers/OOP/Google/Models/Person.php";
            require_once "./controllers/OOP/Google/Models/Pokemon.php";
            require_once "./controllers/OOP/Google/Models/Relative.php";
            require_once "./controllers/OOP/Google/App.php";
        });

        $app = new AppGoogle();
        $result = $app->start();
        return $result;
    }


    function sayHello($name)
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/SayHello/Person.php";
        });

        $person = new HellpPerson($name);
        $fields = count(get_object_vars($person));
        $methods = count(get_class_methods($person));
        if ($fields != 1 || $methods != 2) {
            throw new Exception("Too many fields or methods");
        }

        return $person->sayHello();
    }

    function oldestFamilyMember(array $input)
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/OldestFamilyMember/Person.php";
            require_once "./controllers/OOP/OldestFamilyMember/Family.php";
        });

        $family = new Family();

        $numOfLines = intval(trim($input[0]));
        for ($i = 1; $i < $numOfLines + 1; $i++) {
            $memberDetails = explode(" ", trim($input[$i]));
            $member = new AgePerson($memberDetails[0], intval($memberDetails[1]));
            $family->addMember($member);
        }

        return $family->getOldestMember();

    }

    function lastDigit($input)
    {
        require_once './controllers/OOP/LastDigitName/Number.php';

        $number = new Number(intval($input));
        return $number->getLastDigitName();
    }

    function reversed($input)
    {
        require_once './controllers/OOP/Reversed/DecimalNumber.php';

        $number = new DecNumber(floatval($input));
        return $number->getNumberReversed();
    }

    function fibonacciNumbers($input)
    {
        require_once './controllers/OOP/FibonacciNumbers/Fibonacci.php';

        $start = intval(trim($input[0]));
        $end = intval(trim($input[1]));

        $fib = new Fibonacci($end);
        return implode(", ", $fib->getFibonacciRange($start, $end));
    }

    function car()
    {
        spl_autoload_register(function () {
            require_once "./controllers/OOP/Car/App.php";
            require_once "./controllers/OOP/Car/Models/Car.php";
        });

        $app = new AppCar();
        return $app->start();

    }

    function dateModifier(array $input)
    {
        spl_autoload_register(function () {
            require_once './controllers/OOP/DateModifier/DateModifier.php';
        });

        $dateA = trim($input[0]);
        $dateB = trim($input[1]);

        $app = new DateMod();

        return $app->getDateDifference($dateA,$dateB);
    }

    function printPeople(array $input)
    {
        spl_autoload_register(function () {
            require_once './controllers/OOP/PrintPeople/Person.php';
        });
        $people = array();

        $i = 0;
        while ($i<8) {
            $tokens = explode(" ", trim($input[$i]));
            if ($tokens[0] === "END") {
                break;
            }
            $people[$i] = new PrintPerson($tokens[0], intval($tokens[1]), $tokens[2]);
            $i++;
        }

        uasort($people, function (PrintPerson $personA, PrintPerson $personB){
            return $personA->getAge() <=> $personB->getAge();
        });
        return $people;
    }
}