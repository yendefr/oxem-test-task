<?php


namespace app;

use app\Models\Animal;
include 'Models/Animal.php';

class Farm
{
    protected array $animals;
    protected array $totalProducts;
    protected array $animalsCounts;

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * @return array
     */
    public function getTotalProducts(): array
    {
        return $this->totalProducts;
    }

    /**
     * @return array
     */
    public function getAnimalsCounts(): array
    {
        /** @var Animal $animal */
        foreach ($this->animals as $animal) {
            isset($this->animalsCounts[$animal->getName()]) ?
                $this->animalsCounts[$animal->getName()] += 1 :
                $this->animalsCounts[$animal->getName()] = 1;
        }
        return $this->animalsCounts;
    }

    /**
     * @param int $times
     */
    public function collectProducts(int $times = 1): void
    {
        for ($i = 0; $i < $times; $i++){
            foreach ($this->animals as $animal) {
                isset($this->totalProducts[$animal->getProductName()]) ?
                    $this->totalProducts[$animal->getProductName()] += $animal->getProductCount() :
                    $this->totalProducts[$animal->getProductName()] = $animal->getProductCount();
            }
        }
    }

    /**
     * @param Animal $animal
     * @param int $count
     */
    public function addAnimals(Animal $animal, int $count = 1): void
    {
        for ($i = 0; $i < $count; $i++) {
            $this->animals[] = $animal->getNewInstance();
        }
    }

    public function printAnimalsCounts(): void
    {
        echo 'Кол-во животных на данный момент:' . PHP_EOL;
        foreach ($this->getAnimalsCounts() as $animalName => $animalCount)
        {
            echo $animalName . ': ' . $animalCount . PHP_EOL;
        }
    }

    public function printTotalProducts(): void
    {
        echo 'Кол-во продуктов на данный момент:' . PHP_EOL;
        foreach ($this->totalProducts as $productName => $productCount)
        {
            echo $productName . ': ' . $productCount . PHP_EOL;
        }
    }
}