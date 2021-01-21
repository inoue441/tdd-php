<?php

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
        $this->rates[] = [
            'pair' => new Pair($from, $to),
            'rate' => $rate,
        ];
    }

    /**
     * @param  string  $from 換算元通貨
     * @param  string  $to 換算先通貨
     * @return int 為替レート
     */
    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }

        /**
         * @var Pair $pair
         * @var int $rate
         */
        foreach ($this->rates as $item) {
            $pair = $item['pair'];
            if ($pair->from === $from && $pair->to === $to) {
                return $item['rate'];
            }
        }

        return  1;
    }
}