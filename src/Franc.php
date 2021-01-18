<?php

class Franc extends Money
{
    private string $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    /**
     * @param  int  $multiplier
     * @return Money
     */
    public function times(int $multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency()
    {
        return $this->currency;
    }
}