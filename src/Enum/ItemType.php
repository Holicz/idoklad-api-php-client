<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class ItemType extends Enum
{
    public const NORMAL = 0;

    public const ROUND = 1;

    public const REDUCE = 2;

    public const DISCOUNT = 3;
}
