<?php

declare(strict_types=1);

namespace Phonyland\CoinGenerator;

use Phonyland\GeneratorManager\Generator;

class CoinGenerator extends Generator
{
    /**
     * @throws \Exception
     */
    public function flip(): string
    {
        // @phpstan-ignore-next-line
        return $this->phony->number->boolean()
            ? 'Heads'
            : 'Tails';
    }
}
