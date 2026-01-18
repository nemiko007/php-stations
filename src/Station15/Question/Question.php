<?php

namespace Src\Station15\Question;

class Question
{
    public function main($multiplieds, $multiplier): array|false
    {
        $calculator = new Calculator();
        return $calculator->multiply($multiplieds, $multiplier);
    }
}
