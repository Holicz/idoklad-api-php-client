<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Enum;

use MabeEnum\Enum;

final class DocumentType extends Enum
{
    public const ISSUED_INVOICE = 0;

    public const PROFORMA_INVOICE = 1;

    public const CASH_VOUCHER = 2;

    public const CREDIT_NOTE = 3;

    public const BANK_STATEMENT = 4;

    public const RECEIVED_INVOICE = 5;

    public const SALES_RECEIPT = 6;

    public const SALES_ORDER = 7;

    public const RECURRING_INVOICE = 8;

    public const INTERNAL_DOCUMENT = 9;

    public const REGISTERED_SALE = 101;

    public const ISSUED_DOCUMENT_TEMPLATE = 102;

}
