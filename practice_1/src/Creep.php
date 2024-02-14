<?php

declare(strict_types=1);

namespace Asciito\UMLPracticeOne;

use Asciito\UMLPracticeOne\Tortoise;

class Creep implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @param Tortoise[] $tortoise
     */
    public function __construct(private array $tortoise = [])
    {
        //
    }

    /**
     * Add a tortoise to the creep
     */
    public function addTortoise(Tortoise $tortoise): static
    {
        $this->tortoise[] = $tortoise;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->tortoise[$offset] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->tortoise[] = $value;
        } else {
            $this->tortoise[$offset] = $value;
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetExists(mixed $offset): bool
    {
        return (bool) $this->tortoise[$offset] ?? false;
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->tortoise[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->tortoise);
    }

    /**
     * @inheritDoc
     */
    public function __destruct()
    {
        $this->tortoise = [];
    }
}
