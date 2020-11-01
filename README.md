# About
Fill in
# Installation
Fill in
# Usage
Fill in
# Supported use cases
## Contact
### Create contact
[iDoklad documentation 🔗](https://api.idoklad.cz/Help/v3/en/#api-Contacts-ContactsNew_contact)
#### Usage
```php
<?php

use DobryProgramator\iDoklad\Enum\Country;
use DobryProgramator\iDoklad\iDokladApiClient;
use DobryProgramator\iDoklad\UseCase\Contact\CreateContact\CreateContactRequest;

$idokladClient = new iDokladApiClient('clientId', 'clientSecret');
$createContactRequest = new CreateContactRequest('Acme Corporation', Country::CZECHIA());
$createContactRequest->setFirstname('John');
$createContactRequest->setSurname('Doe');
// All fields according to the documentation are available

$response = $idokladClient->sendRequest($createContactRequest);
```
# Enums
## Country [🔗](https://api.idoklad.cz/Help/v3/en/#api-Lists-CountriesList_of_states)
Corresponds to iDoklad documentation, enum name is `NameEnglish`.
## Currency [🔗](https://api.idoklad.cz/Help/v3/en/#api-Lists-CurrenciesList_of_currencies)
Corresponds to iDoklad documentation, enum name is `Code`.
## EetResponsibility
| iDoklad explanation                                                | Enum                                                                    |
|--------------------------------------------------------------------|-------------------------------------------------------------------------|
| ItsMyBill will register the document into EET for you.             | `DobryProgramator\iDoklad\Enum\EetResponsibility::IDOKLAD`              |
| Use if you don't want ItsMyBill to register the document into EET. | `DobryProgramator\iDoklad\Enum\EetResponsibility::EXTERNAL_APPLICATION` |
## Exported
| iDoklad explanation                                                                                                                          | Enum                                                   |
|----------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------|
| The document was not exported.                                                                                                               | `DobryProgramator\iDoklad\Enum\Exported::NOT_EXPORTED` |
| The document was exported to an external accounting system. Changing a document with Exported = 1 will change the exported value to Changed. | `DobryProgramator\iDoklad\Enum\Exported::EXPORTED`     |
| The document was exported and later changed in ItsMyBill.                                                                                    | `DobryProgramator\iDoklad\Enum\Exported::CHANGED`      |
| The document was exported and later deleted in ItsMyBill.                                                                                    | `DobryProgramator\iDoklad\Enum\Exported::DELETED`      |
## Payment option
| iDoklad name       | Enum                                                              |
|--------------------|-------------------------------------------------------------------|
| Převodem           | `DobryProgramator\iDoklad\Enum\PaymentOption::BANK_TRANSFER`      |
| Kartou             | `DobryProgramator\iDoklad\Enum\PaymentOption::ONLINE_BY_CARD`     |
| Hotově             | `DobryProgramator\iDoklad\Enum\PaymentOption::CASH`               |
| Dobírka            | `DobryProgramator\iDoklad\Enum\PaymentOption::CASH_ON_DELIVERY`   |
| Zápočtem           | `DobryProgramator\iDoklad\Enum\PaymentOption::CREDIT`             |
| Zálohou            | `DobryProgramator\iDoklad\Enum\PaymentOption::DOWN_PAYMENT`       |
| Haléřové dorovnání | `DobryProgramator\iDoklad\Enum\PaymentOption::PENNY_COMPENSATION` |
| Stravenka          | `DobryProgramator\iDoklad\Enum\PaymentOption::MEAL_VOUCHER`       |
| PayPal             | `DobryProgramator\iDoklad\Enum\PaymentOption::PAYPAL`             |
## PriceType 
| iDoklad explanation | Enum                                                   |
|---------------------|--------------------------------------------------------|
| Price incl. VAT     | `DobryProgramator\iDoklad\Enum\PriceType::WITH_VAT`    |
| Price without VAT   | `DobryProgramator\iDoklad\Enum\PriceType::WITHOUT_VAT` |
| Base only           | `DobryProgramator\iDoklad\Enum\PriceType::ONLY_BASE`   |
## ReportLanguage
| iDoklad explanation | Enum                                               |
|---------------------|----------------------------------------------------|
| Czech               | `DobryProgramator\iDoklad\Enum\ReportLanguage::CZ` |
| Slovak              | `DobryProgramator\iDoklad\Enum\ReportLanguage::SK` |
| English             | `DobryProgramator\iDoklad\Enum\ReportLanguage::EN` |
| German              | `DobryProgramator\iDoklad\Enum\ReportLanguage::DE` |
## VatOnPayStatus
| iDoklad explanation                                                                                                                                                          | Enum                                                                 |
|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------|
| Outside of the mode                                                                                                                                                          | `DobryProgramator\iDoklad\Enum\VatOnPayStatus::DISABLED`             |
| Within the mode                                                                                                                                                              | `DobryProgramator\iDoklad\Enum\VatOnPayStatus::ENABLED`              |
| Invoice was within the mode VatOnPay, user has ended this mode while the invoice has not been paid and it is necessary to settle the invoice as of the last day of this mode | `DobryProgramator\iDoklad\Enum\VatOnPayStatus::INVOICE_NEEDS_TAXING` |
## VatRateType
| iDoklad explanation     | Enum                                                   |
|-------------------------|--------------------------------------------------------|
| First reduced VAT rate  | `DobryProgramator\iDoklad\Enum\VatRateType::REDUCED_1` |
| Basic sazba VAT rate    | `DobryProgramator\iDoklad\Enum\VatRateType::BASIC`     |
| Zero sazba VAT rate     | `DobryProgramator\iDoklad\Enum\VatRateType::ZERO`      |
| Second reduced VAT rate | `DobryProgramator\iDoklad\Enum\VatRateType::REDUCED_2` |
# Throwed exceptions
## 4xx
### `DobryProgramator\iDoklad\Exception\ApiRateExceededException`
You API rate limit was exceeded. See [iDoklad pricing 🔗](https://www.idoklad.cz/cenik) for more information.
### `DobryProgramator\iDoklad\Exception\BadRequestException`
Bad request. Most likely you passed in wrong data, please check the documentation for integrity constraints.
### `DobryProgramator\iDoklad\UseCase\Authentication\AuthenticationException`
Unable to authenticate. Either authentication request is wrong (which is unlikely), or your credentials are wrong. 
### `DobryProgramator\iDoklad\Exception\NoActiveSubscriptionException`
You either do not have an active subscription, or it expired. See
[my subscriptions page 🔗](https://app.idoklad.cz/Billing/MySubscription) for more information.
### `DobryProgramator\iDoklad\Exception\UnauthorizedException`
iDoklad says you are not authenticated. This is most likely a bug in this library. Please create an issue.
## 5xx
## `DobryProgramator\iDoklad\Exception\CouldNotProcessResponseException`
Throwed when iDoklad's response could not be parsed (e.g. when API response changed without maintaining BC).
## `DobryProgramator\iDoklad\Exception\iDokladServerException`
Throwed when iDoklad API returns `5xx` HTTP code.
