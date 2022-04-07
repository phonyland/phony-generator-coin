<?php

declare(strict_types=1);

namespace Phonyland\CoinGenerator;

use Phonyland\Framework\Generator;

class CoinGenerator extends Generator
{
    public function flip(): string
    {
        return $this->fetch('coin.flip');
    }
}
