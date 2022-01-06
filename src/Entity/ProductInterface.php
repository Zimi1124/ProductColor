<?php

declare(strict_types=1);

namespace App\Entity;

interface ProductInterface
{
    public const COLOR_RED = 'Red';

    public const COLOR_BLUE = 'Blue';

    public const COLOR_GREEN = 'Green';

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
