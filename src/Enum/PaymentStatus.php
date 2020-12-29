<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class PaymentStatus extends Enum
{
    public const UNPAID = 0;

    public const PAID = 1;

    public const PARTIAL_PAID = 2;

    public const OVERPAID = 3;

}
