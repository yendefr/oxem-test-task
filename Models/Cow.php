<?php


namespace app\Models;


class Cow extends Animal
{
    protected string $name = 'Cow';
    protected string $productName = 'Milk';

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        return rand(8, 12);
    }
}