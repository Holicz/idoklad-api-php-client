<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Contact\CreateContact;

use DobryProgramator\iDoklad\UseCase\Metadata;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class CreateContactResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("AccountNumber")
     */
    private string $accountNumber;

    /**
     * @Serializer\SerializedName("BankId")
     */
    private ?int $bankId;

    /**
     * @Serializer\SerializedName("City")
     */
    private string $city;

    /**
     * @Serializer\SerializedName("CompanyName")
     */
    private string $companyName;

    /**
     * @Serializer\SerializedName("CountryId")
     */
    private int $countryId;

    /**
     * @Serializer\SerializedName("DefaultInvoiceMaturity")
     */
    private ?int $defaultInvoiceMaturity;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     */
    private float $discountPercentage;

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
     * @Serializer\SerializedName("Id")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IdentificationNumber")
     */
    private string $identificationNumber;

    /**
     * @Serializer\SerializedName("IsRegisteredForVatOnPay")
     */
    private bool $isRegisteredForVatOnPay;

    /**
     * @Serializer\SerializedName("Metadata")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("Mobile")
     */
    private string $mobile;

    /**
     * @Serializer\SerializedName("Note")
     */
    private string $note;

    /**
     * @Serializer\SerializedName("Phone")
     */
    private string $phone;

    /**
     * @Serializer\SerializedName("PostalCode")
     */
    private string $postalCode;

    /**
     * @Serializer\SerializedName("SendReminders")
     */
    private bool $sendReminders;

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

    public function getCountryId(): int
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
