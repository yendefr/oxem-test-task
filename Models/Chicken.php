<?php


namespace app\Models;


class Chicken extends Animal
{
    protected string $name = 'Chicken';
    protected string $productName = 'Eggs';

    public function getProductCount(): int
    {
        return rand(0, 1);
    }
}