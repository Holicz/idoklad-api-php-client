<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response;

use DobryProgramator\iDoklad\Enum\Country;
use JMS\Serializer\Annotation as Serializer;

final class DeliveryAddress
{
    /**
     * @Serializer\SerializedName("City")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("ContactDeliveryAddressId")
     */
    private int $contactDeliveryAddressId;

    /**
     * @Serializer\SerializedName("CountryId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Country'>")
     */
    private Country $country;

    /**
     * @Serializer\SerializedName("Name")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("PostalCode")
     */
    private string $postalCode;

    /**
     * @Serializer\SerializedName("Street")
     */
    private string $street;
}
