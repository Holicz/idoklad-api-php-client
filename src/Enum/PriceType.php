<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class PriceType extends Enum
{
    public const WITH_VAT = 0;

    public const WITHOUT_VAT = 1;

    public const ONLY_BASE = 2;
}
