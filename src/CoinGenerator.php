<?php

declare(strict_types=1);

namespace Phonyland\CoinGenerator;

use Phonyland\Framework\Generator;

/**
 * Class CoinGenerator.
 *
 * @property-read mixed $flip
 */
class CoinGenerator extends Generator
{
    protected array $attributes = [
        'flip' => 'coin.flip',
    ];
}
