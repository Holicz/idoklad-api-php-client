<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class ItemType extends Enum
{
    public const ITEM_TYPE_NORMAL = 0;

    public const ITEM_TYPE_ROUND = 1;

    public const ITEM_TYPE_REDUCE = 2;

    public const ITEM_TYPE_DISCOUNT = 3;

}
