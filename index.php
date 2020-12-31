<?php

declare(strict_types=1);

use DobryProgramator\iDoklad\Enum\Currency;
use DobryProgramator\iDoklad\Enum\PaymentOption;
use DobryProgramator\iDoklad\iDokladApiClient;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\CreateProformaInvoiceRequest;

require_once('vendor/autoload.php');

$client = new iDokladApiClient('', '');
$createProformInvoice = new CreateProformaInvoiceRequest(
    Currency::get(Currency::CZK),
    new DateTimeImmutable(),
    new DateTimeImmutable(),
    'Test',
    100,
    false,
    false,
    false,
    1,
    1,
    PaymentOption::get(PaymentOption::CREDIT)
);

$response = $client->sendRequest($createProformInvoice);
dump($response);
