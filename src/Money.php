<?php

abstract class Money
{
    protected int $amount;

    public abstract function times(int $multiplier);

    public function equals(Object $object)
    {
        // NOTE: 原書では `Dollar dollar = (Dollar) object;` (キャスト)
        $money = $object;
        return $this->amount === $money->amount
            && get_class($this) === get_class($object);
    }

    public static function dollar(int $amount)
    {
        return new Dollar($amount);
    }
}