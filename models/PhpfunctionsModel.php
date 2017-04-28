<?php

class PhpfunctionsModel extends BaseModel
{
    function findPointPosition(float $x, float $y, float $z): string
    {
        list($boxX1, $boxX2, $boxY1, $boxY2, $boxZ1, $boxZ2) = [10, 50, 20, 80, 15, 50];
        if ($x >= $boxX1 && $x <= $boxX2 &&
            $y >= $boxY1 && $y <= $boxY2 &&
            $z >= $boxZ1 && $z <= $boxZ2
        ) {
            return "inside";
        }
        return "outside";
    }

    function getLimitArea(string $area): int
    {
        $limits = [
            "motorway" => 130,
            "interstate" => 90,
            "city" => 50,
            "residential" => 20
        ];

        if (!array_key_exists($area, $limits)) {
            return 1000;
        }

        return $limits[$area];
    }

    function getInfraction(int $speed, int $limit)
    {
        $overSpeed = $speed - $limit;
        if ($overSpeed >= 0) {
            if ($overSpeed <= 20)
                return "speeding";

            if ($overSpeed <= 40)
                return "excessive speeding";

            return "reckless driving";
        }
        return false;
    }

    function inputToArray(string $input): array
    {
        $result = [];
        $input = explode(", ", $input);
        for ($i = 0; $i < count($input); $i += 2) {
            $question = $input[$i];
            $answer = $input[$i + 1];
            $result[$question] = $answer;
        }
        return $result;
    }

    function generateXmlFromArray(array $array): string
    {
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\n";
        $xml .= "<quiz>\n";
        foreach ($array as $key => $a) {
            $xml .= "  <question>\n    {$key}\n  </question>\n";
            $xml .= "  <answer>\n    {$a}\n  </answer>\n";
        }
        $xml .= "</quiz>";

        return $xml;
    }

    function cooking($number,$operations)
    {
        $functions = ["chop" => "chopNum",
            "dice" => "dice",
            "spice" => "spice",
            "bake" => "bake",
            "fillet" => "fillet"
        ];

        $result = array();
        $curNum = $number;
        foreach ($operations as $key => $operation) {
            if (array_key_exists($operation, $functions)) {
                $curNum =  $this->choice($functions[$operation],$curNum );
                $result[$key] = $operation." ".$curNum."<br>";
            }
        }
        return $result;
    }

    function choice($operation,$num)
    {
        switch ($operation){
            case "chopNum":
                return $this->chopNum($num);
            case "dice":
                return $this->dice($num);
            case "spice":
                return $this->spice($num);
            case "bake":
                return $this->bake($num);
            case "fillet":
                return $this->fillet($num);
        }
    }

    function chopNum(float $num): float
    {
        return $num / 2;
    }

    function dice(float $num): float
    {
        return sqrt($num);
    }

    function spice(float $num): float
    {
        return ++$num;
    }

    function bake(float $num): float
    {
        return $num * 3;
    }

    function fillet(float $num): float
    {
        return $num * 0.8;
    }

    function getAvgNumber(string $num)
    {
        $digits = array_map("intval", str_split($num, 1));
        $average = $this->calculateAvg($digits);
        if ($average > 5){
            return $num;
        }

        return $this->getAvgNumber($num . 9);

    }

    function calculateAvg(array $numbers): float
    {
        return array_sum($numbers) / count($numbers);
    }

    function valChecker(string $coordinates): array
    {
        list($x1, $y1, $x2, $y2) = array_map("intval", explode(", ", $coordinates));
    
        $distanceA = $this->getDistanceType($this->calculateDistance($x1, $y1));
        $distanceB = $this->getDistanceType($this->calculateDistance($x2, $y2));
        $distanceC = $this->getDistanceType($this->calculateDistance($x1, $y1, $x2, $y2));


        $result = ["$x1, $y1, 0, 0" => "$distanceA",
            "0, 0, $x2, $y2" => "$distanceB",
            "$x1, $y1, $x2, $y2" => "$distanceC"];

        return $result;
    }

    function calculateDistance(int $aX, int $aY, int $bX = 0, int $bY = 0): float
    {
        $xDistance = $bX - $aX;
        $yDistance = $bY - $aY;

        return sqrt(($xDistance * $xDistance) + ($yDistance * $yDistance));
    }

    function getDistanceType(float $distance): string
    {
        return round($distance) == $distance ? "valid" : "invalid";
    }


    function treasureLocation(string $coordinate)
    {
        $islands = [
            "Java" => new Islands(1, 4, 1, 7),
            "Borneo" => new Islands(7, 10, 1, 4),
            "Cuba" => new Islands(1, 7, 8, 10),
            "Hainan" => new Islands(8.5, 12.5, 6.5, 11.5),
        ];
        $result = array();

        $coordinates = array_map("floatval", explode(", ", $coordinate));
        for ($i = 0; $i < count($coordinates); $i += 2) {
            $x = $coordinates[$i];
            $y = $coordinates[$i + 1];
            $onIsland = '';
            foreach ($islands as $islandName => $island) {

                if ($island->isOnIsland($x, $y)) {
                    $onIsland = $islandName;
                    break;
                }
            }

            $result["$x, $y"] = $onIsland ? "{$onIsland}\n" : "On the bottom of the ocean\n";
        }

        return $result;
    }



}