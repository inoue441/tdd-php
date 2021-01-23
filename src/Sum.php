<?php

class Sum implements Expression
{
    public Expression $augend;
    public Expression $addend;

    /**
     * Sum constructor.
     * @param  Expression  $augend
     * @param  Expression  $addend
     */
    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @param  Bank  $bank
     * @param  string  $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to)
    {
        $amount = $this->augend->reduce($bank, $to)->amount
            + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }
}