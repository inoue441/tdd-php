<?php

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        /** @var Sum $sum */
        $sum = $source;
        return $sum->reduce($to);
    }
}