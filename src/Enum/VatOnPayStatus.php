<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class VatOnPayStatus extends Enum
{
    public const DISABLED = 0;

    public const ENABLED = 1;

    public const INVOICE_NEEDS_TAXING = 2;
}
