<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Contact\UpdateContact;

use DobryProgramator\iDoklad\Enum\Country;
use DobryProgramator\iDoklad\UseCase\Metadata;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class UpdateContactResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("AccountNumber")
     * @Serializer\Type("string")
     */
    private string $accountNumber;

    /**
     * @Serializer\SerializedName("BankId")
     * @Serializer\Type("int")
     */
    private ?int $bankId;

    /**
     * @Serializer\SerializedName("City")
     * @Serializer\Type("string")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("CompanyName")
     * @Serializer\Type("string")
     */
    private string $companyName;

    /**
     * @Serializer\SerializedName("CountryId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Country'>")
     */
    private Country $countryId;

    /**
     * @Serializer\SerializedName("DefaultInvoiceMaturity")
     * @Serializer\Type("int")
     */
    private ?int $defaultInvoiceMaturity;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     * @Serializer\Type("float")
     */
    private float $discountPercentage;

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
     * @Serializer\SerializedName("Id")
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IdentificationNumber")
     * @Serializer\Type("string")
     */
    private string $identificationNumber;

    /**
     * @Serializer\SerializedName("IsRegisteredForVatOnPay")
     * @Serializer\Type("bool")
     */
    private bool $isRegisteredForVatOnPay;

    /**
     * @Serializer\SerializedName("Metadata")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\Metadata")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("Mobile")
     * @Serializer\Type("string")
     */
    private string $mobile;

    /**
     * @Serializer\SerializedName("Note")
     * @Serializer\Type("string")
     */
    private string $note;

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
     * @Serializer\SerializedName("SendReminders")
     * @Serializer\Type("bool")
     */
    private bool $sendReminders;

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

    public function getBankId(): ?int
    {
        return $this->bankId;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function getCountryId(): Country
    {
        return $this->countryId;
    }

    public function getDefaultInvoiceMaturity(): ?int
    {
        return $this->defaultInvoiceMaturity;
    }

    public function getDiscountPercentage(): float
    {
        return $this->discountPercentage;
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getIdentificationNumber(): string
    {
        return $this->identificationNumber;
    }

    public function isRegisteredForVatOnPay(): bool
    {
        return $this->isRegisteredForVatOnPay;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function isSendReminders(): bool
    {
        return $this->sendReminders;
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
