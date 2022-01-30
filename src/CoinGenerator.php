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
        return random_int(0, 1) === 0
            ? 'Heads'
            : 'Tails';
    }
}
