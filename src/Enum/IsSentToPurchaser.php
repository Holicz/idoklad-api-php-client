<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class IsSentToPurchaser extends Enum
{
    public const NOT_SENT = 0;

    public const SENT = 1;

    public const SENT_AND_READ = 2;
}
