<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use DobryProgramator\iDoklad\Enum\Country;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class DeliveryAddress
{
    /**
     * @Serializer\SerializedName("City")
     * @Type("string")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("ContactDeliveryAddressId")
     * @Type("int")
     */
    private int $contactDeliveryAddressId;

    /**
     * @Serializer\SerializedName("CountryId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Country'>")
     */
    private Country $countryId;

    /**
     * @Serializer\SerializedName("Name")
     * @Type("string")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("PostalCode")
     * @Type("string")
     */
    private string $postalCode;

    /**
     * @Serializer\SerializedName("Street")
     * @Type("string")
     */
    private string $street;

    public function getCity(): string
    {
        return $this->city;
    }

    public function getContactDeliveryAddressId(): int
    {
        return $this->contactDeliveryAddressId;
    }

    public function getCountryId(): Country
    {
        return $this->countryId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getStreet(): string
    {
        return $this->street;
    }
}
