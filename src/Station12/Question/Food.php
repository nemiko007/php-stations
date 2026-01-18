<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    public function __construct(int $originalPrice, private CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
    }

    public function price(): int
    {
        if ($this->useByDate->lt(CarbonImmutable::now()->addHours(5))) {
            return (int)floor($this->originalPrice / 2);
        }
        return $this->originalPrice;
    }
}
