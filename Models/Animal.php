<?php


namespace app\Models;


abstract class Animal
{
    protected string $id;
    protected string $name;
    protected string $productName;

    public function __construct()
    {
        $this->id = substr(md5(random_bytes(5)), 0, 8);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getNewInstance(): static
    {
        return new static();
    }

    abstract public function getProductCount(): int;
}