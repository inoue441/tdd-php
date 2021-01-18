<?php

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param  int  $multiplier
     * @return Money
     */
    public function times(int $multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}