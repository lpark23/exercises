<?php

namespace controllers\OOP\DateModifier;

class DateModifier
{
    public function getDateDifference(string $dateA, string $dateB)
    {
        $firstDate = \DateTime::createFromFormat('Y m d', $dateA);
        $secondDate = \DateTime::createFromFormat('Y m d', $dateB);

        return $firstDate->diff($secondDate)->days." days.";
    }
}