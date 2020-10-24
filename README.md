__info about library__
# Installation
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
$createContactRequest = new CreateContactRequest('Acme Corporation', Country::CZECHIA);
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
## Payment option
| iDoklad name      | Enum                                                              |
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
## `DobryProgramator\iDoklad\Exception\iDokladServerException`
Throwed when iDoklad API returns `5xx` HTTP code.
