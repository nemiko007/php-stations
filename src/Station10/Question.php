<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
        return match ($animal) {
            '猫' => 'ミケ',
            '犬' => 'ポチ',
            default => 'わかりません',
        };
    }
}
