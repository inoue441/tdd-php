<?php

abstract class Money
{
    protected int $amount;
    protected string $currency;

    /**
     * Money constructor.
     * @param  int  $amount
     * @param  string  $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public abstract function times(int $multiplier);

    /**
     * @return string
     */
    public function currency()
    {
        return $this->currency;
    }

    public function equals(Object $object)
    {
        // NOTE: 原書では `Dollar dollar = (Dollar) object;` (キャスト)
        $money = $object;
        return $this->amount === $money->amount
            && get_class($this) === get_class($object);
    }

    /**
     * @param  int  $amount
     * @return Money
     */
    public static function dollar(int $amount)
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param  int  $int
     */
    public static function franc(int $amount)
    {
        return new Franc($amount, 'CHF');
    }
}