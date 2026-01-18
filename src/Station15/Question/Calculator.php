<?php

namespace Src\Station15\Question;

class Calculator
{
    public function multiply($multiplieds, $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        }

        return array_map(function ($multiplied) use ($multiplier) {
            return $multiplied * $multiplier;
        }, $multiplieds);
    }
}
