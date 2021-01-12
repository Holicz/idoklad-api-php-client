<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class EmailMethod extends Enum
{
    public const PDF = 0;

    public const LINK = 1;
}
