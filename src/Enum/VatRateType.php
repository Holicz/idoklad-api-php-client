<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class VatRateType extends Enum
{
    public const REDUCED_1 = 0;

    public const BASIC = 1;

    public const ZERO = 2;

    public const REDUCED_2 = 3;
}
