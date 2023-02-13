<?php
namespace Julio\DataStructure\Stack;

class Stack {
    public function __construct(
        private array $items = []
    ) { }

    public function push(mixed ...$items): void {
        foreach ($items as $item)
            array_push($this->items, $item);
    }

    public function pop(): void {
        array_pop($this->items);
    }

    public function peek(): mixed {
        $lastPosition = $this->size() - 1;
        return $this->items[$lastPosition];
    }

    public function isEmpty(): bool {
        return $this->size() === 0;
    }

    public function size(): int {
        return count($this->items);
    }

    public function toArray(): array {
        return $this->items;
    }

    public function __toString(): string
    {
        $responseStr = 'start -> ';
        foreach ($this->items as $item)
            $responseStr .= "$item -> ";
        $responseStr .= 'end';

        return $responseStr;
    }
}