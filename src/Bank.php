<?php

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        /** @var Sum $sum */
        $sum = $source;
        $amount = $sum->augend->amount + $sum->addend->amount;
        return Money::dollar($amount);
    }
}