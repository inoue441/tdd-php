<?php

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {

    }

    /**
     * @param  string  $from 換算元通貨
     * @param  string  $to 換算先通貨
     * @return int 為替レート
     */
    public function rate(string $from, string $to): int
    {
        return ($from === "CHF" && $to === "USD") ? 2 : 1;
    }
}