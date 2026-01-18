<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    public function hazard()
    {
        echo 'ハザードランプを点灯する';
    }

    protected function run()
    {
        $this->maxSpeed = 60;
        parent::run();
    }

    protected function back()
    {
        $this->hazard();
        parent::back();
    }
}