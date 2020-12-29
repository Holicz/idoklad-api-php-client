<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\IssuedInvoice\NewInvoice\Response;

use DobryProgramator\iDoklad\Enum\Country;
use JMS\Serializer\Annotation as Serializer;

final class MyAddress
{
    /**
     * @Serializer\SerializedName("AccountNumber")
     * @Serializer\Type("string")
     */
    private string $accountNumber;

    /**
     * @Serializer\SerializedName("BankCode")
     * @Serializer\Type("string")
     */
    private string $bankCode;

    /**
     * @Serializer\SerializedName("BankName")
     * @Serializer\Type("string")
     */
    private string $bankName;

    /**
     * @Serializer\SerializedName("City")
     * @Serializer\Type("string")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("CountryId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Country'>")
     */
    private Country $country;

    /**
     * @Serializer\SerializedName("CountryName")
     * @Serializer\Type("string")
     */
    private string $countryName;

    /**
     * @Serializer\SerializedName("Email")
     * @Serializer\Type("string")
     */
    private string $email;

    /**
     * @Serializer\SerializedName("Fax")
     * @Serializer\Type("string")
     */
    private string $fax;

    /**
     * @Serializer\SerializedName("Firstname")
     * @Serializer\Type("string")
     */
    private string $firstname;

    /**
     * @Serializer\SerializedName("Iban")
     * @Serializer\Type("string")
     */
    private string $iban;

    /**
     * @Serializer\SerializedName("IdentificationNumber")
     * @Serializer\Type("string")
     */
    private string $identificationNumber;

    /**
     * @Serializer\SerializedName("Mobile")
     * @Serializer\Type("string")
     */
    private string $mobile;

    /**
     * @Serializer\SerializedName("NickName")
     * @Serializer\Type("string")
     */
    private string $nickName;

    /**
     * @Serializer\SerializedName("Phone")
     * @Serializer\Type("string")
     */
    private string $phone;

    /**
     * @Serializer\SerializedName("PostalCode")
     * @Serializer\Type("string")
     */
    private string $postalCode;

    /**
     * @Serializer\SerializedName("Street")
     * @Serializer\Type("string")
     */
    private string $street;

    /**
     * @Serializer\SerializedName("Surname")
     * @Serializer\Type("string")
     */
    private string $surname;

    /**
     * @Serializer\SerializedName("Swift")
     * @Serializer\Type("string")
     */
    private string $swift;

    /**
     * @Serializer\SerializedName("Title")
     * @Serializer\Type("string")
     */
    private string $title;

    /**
     * @Serializer\SerializedName("VatIdentificationNumber")
     * @Serializer\Type("string")
     */
    private string $vatIdentificationNumber;

    /**
     * @Serializer\SerializedName("VatIdentificationNumberSk")
     * @Serializer\Type("string")
     */
    private string $vatIdentificationNumberSk;

    /**
     * @Serializer\SerializedName("Www")
     * @Serializer\Type("string")
     */
    private string $www;

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getBankCode(): string
    {
        return $this->bankCode;
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountryId(): Country
    {
        return $this->country;
    }

    public function getCountryName(): string
    {
        return $this->countryName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function getIdentificationNumber(): string
    {
        return $this->identificationNumber;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function getNickName(): string
    {
        return $this->nickName;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getSwift(): string
    {
        return $this->swift;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVatIdentificationNumber(): string
    {
        return $this->vatIdentificationNumber;
    }

    public function getVatIdentificationNumberSk(): string
    {
        return $this->vatIdentificationNumberSk;
    }

    public function getWww(): string
    {
        return $this->www;
    }
}
