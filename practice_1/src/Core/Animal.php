<?php

declare(strict_types=1);

namespace Asciito\UMLPracticeOne\Core;

class Animal
{
    private int $id;

    /**
     * Construct function
     * 
     * @param string $name   The name of the animal
     * @param int    $age    The age of the animal
     * @param int    $weight The weight of the animal (kg)
     */
    public function __construct(private string $name, private int $age, private int $weight)
    {
        $this->id = random_int(1, 999_999_999);
    }

    /**
     * Sets te animal's name
     * 
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Check if the animal is eating, or not
     * 
     * @return bool
     */
    public function eating(): bool
    {
        return (bool) random_int(0, 1);
    }
}
