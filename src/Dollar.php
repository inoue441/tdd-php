<?php

class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {

    }

    public function times(int $multiplier)
    {
        $this->amount = 5 * 2;
    }
}