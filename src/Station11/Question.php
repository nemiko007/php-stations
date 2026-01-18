<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);

        return $this->makeCombination($lessThanBudgetSweets, $keys);
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget): array
    {
        $filteredSweets = [];
        foreach ($sweets as $sweet) {
            if ($sweet['price'] <= $budget) {
                $filteredSweets[] = $sweet;
            }
        }
        return $filteredSweets;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget): array
    {
        while (true) {
            $keys = array_rand($lessThanBudgetSweets, 3);
            $totalPrice = 0;
            foreach ($keys as $key) {
                $totalPrice += $lessThanBudgetSweets[$key]['price'];
            }
            if ($totalPrice <= $budget) {
                return $keys;
            }
        }
    }

    private function makeCombination(array $sweets, array $keys): array
    {
        $combination = [];
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
        }
        return $combination;
    }
}
