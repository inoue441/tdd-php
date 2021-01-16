<?php

class Money
{
    protected int $amount;

    public function equals(Object $object)
    {
        // NOTE: 原書では `Dollar dollar = (Dollar) object;` (キャスト)
        $money = $object;
        return $this->amount === $money->amount;
    }
}