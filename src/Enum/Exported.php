<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class Exported extends Enum
{
    public const NOT_EXPORTED = 0;

    public const EXPORTED = 1;

    public const CHANGED = 2;

    public const DELETED = 3;
}
