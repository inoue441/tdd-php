<?php

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param  int  $multiplier
     * @return Money
     */
    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency()
    {
        return 'USD';
    }
}