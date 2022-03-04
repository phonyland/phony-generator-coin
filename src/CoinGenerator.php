<?php

declare(strict_types=1);

namespace Phonyland\CoinGenerator;

use Phonyland\Framework\Generator;

class CoinGenerator extends Generator
{
    public function flip(): string
    {
        // @phpstan-ignore-next-line
        return $this->phony->number->boolean()
            ? 'Heads'
            : 'Tails';
    }
}
