<?php

class Sum implements Expression
{
    public Money $augend;
    public Money $addend;

    /**
     * Sum constructor.
     * @param  Money  $augend
     * @param  Money  $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @param  string  $to
     * @return Money
     */
    public function reduce(string $to)
    {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);
    }
}