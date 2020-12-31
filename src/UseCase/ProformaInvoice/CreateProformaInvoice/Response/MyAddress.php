<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response;

use DobryProgramator\iDoklad\Enum\Country;
use JMS\Serializer\Annotation as Serializer;

final class MyAddress
{
    /**
     * @Serializer\SerializedName("AccountNumber")
     */
    private string $accountNumber;

    /**
     * @Serializer\SerializedName("BankCode")
     */
    private string $bankCode;

    /**
     * @Serializer\SerializedName("BankName")
     */
    private string $bankName;

    /**
     * @Serializer\SerializedName("City")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("CountryId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Country'>")
     */
    private Country $countryId;

    /**
     * @Serializer\SerializedName("CountryName")
     */
    private string $countryName;

    /**
     * @Serializer\SerializedName("Email")
     */
    private string $email;

    /**
     * @Serializer\SerializedName("Fax")
     */
    private string $fax;

    /**
     * @Serializer\SerializedName("Firstname")
     */
    private string $firstname;

    /**
     * @Serializer\SerializedName("Iban")
     */
    private string $iban;

    /**
     * @Serializer\SerializedName("IdentificationNumber")
     */
    private string $identificationNumber;

    /**
     * @Serializer\SerializedName("Mobile")
     */
    private string $mobile;

    /**
     * @Serializer\SerializedName("NickName")
     */
    private string $nickName;

    /**
     * @Serializer\SerializedName("Phone")
     */
    private string $phone;

    /**
     * @Serializer\SerializedName("PostalCode")
     */
    private string $postalCode;

    /**
     * @Serializer\SerializedName("Street")
     */
    private string $street;

    /**
     * @Serializer\SerializedName("Surname")
     */
    private string $surname;

    /**
     * @Serializer\SerializedName("Swift")
     */
    private string $swift;

    /**
     * @Serializer\SerializedName("Title")
     */
    private string $title;

    /**
     * @Serializer\SerializedName("VatIdentificationNumber")
     */
    private string $vatIdentificationNumber;

    /**
     * @Serializer\SerializedName("VatIdentificationNumberSk")
     */
    private string $vatIdentificationNumberSk;

    /**
     * @Serializer\SerializedName("Www")
     */
    private string $www;
}
