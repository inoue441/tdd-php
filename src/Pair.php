<?php

class Pair
{
    public string $from;
    public string $to;

    /**
     * Pair constructor.
     * @param  string  $from 換算元通貨
     * @param  string  $to 換算先通貨
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}