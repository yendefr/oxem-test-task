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

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return $this
     */
    public function getNewInstance(): static
    {
        return new static();
    }

    /**
     * @return int
     */
    abstract public function getProductCount(): int;
}