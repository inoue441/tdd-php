<?php

class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        $this->amount = $this->amount * 2;
    }
}