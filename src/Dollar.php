<?php

class Dollar extends Money
{
    private string $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
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
        return $this->currency;
    }
}