<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Contact\CreateContact;

use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\HttpFoundation\Request;

final class CreateContactRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_POST;
    private const ENDPOINT = 'Contacts';
    private const RESPONSE_CLASS = CreateContactResponse::class;

    /**
     * @Serializer\SerializedName("AccountNumber")
     */
    private ?string $accountNumber = null;

    /**
     * @Serializer\SerializedName("BankId")
     */
    private ?int $bankId = null;

    /**
     * @Serializer\SerializedName("City")
     */
    private ?string $city = null;

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
    private ?int $defaultInvoiceMaturity = null;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     */
    private ?float $discountPercentage = null;

    /**
     * @Serializer\SerializedName("Email")
     */
    private ?string $email = null;

    /**
     * @Serializer\SerializedName("Fax")
     */
    private ?string $fax = null;

    /**
     * @Serializer\SerializedName("Firstname")
     */
    private ?string $firstname = null;

    /**
     * @Serializer\SerializedName("Iban")
     */
    private ?string $iban = null;

    /**
     * @Serializer\SerializedName("IdentificationNumber")
     */
    private ?string $identificationNumber = null;

    /**
     * @Serializer\SerializedName("IsRegisteredForVatOnPay")
     */
    private ?bool $isRegisteredForVatOnPay = null;

    /**
     * @Serializer\SerializedName("Mobile")
     */
    private ?string $mobile = null;

    /**
     * @Serializer\SerializedName("Note")
     */
    private ?string $note = null;

    /**
     * @Serializer\SerializedName("Phone")
     */
    private ?string $phone = null;

    /**
     * @Serializer\SerializedName("PostalCode")
     */
    private ?string $postalCode = null;

    /**
     * @Serializer\SerializedName("SendReminders")
     */
    private ?bool $sendReminders = null;

    /**
     * @Serializer\SerializedName("Street")
     */
    private ?string $street = null;

    /**
     * @Serializer\SerializedName("Surname")
     */
    private ?string $surname = null;

    /**
     * @Serializer\SerializedName("Swift")
     */
    private ?string $swift = null;

    /**
     * @Serializer\SerializedName("Title")
     */
    private ?string $title = null;

    /**
     * @Serializer\SerializedName("VatIdentificationNumber")
     */
    private ?string $vatIdentificationNumber = null;

    /**
     * @Serializer\SerializedName("VatIdentificationNumberSk")
     */
    private ?string $vatIdentificationNumberSk = null;

    /**
     * @Serializer\SerializedName("Www")
     */
    private ?string $www = null;

    public function __construct(
        string $companyName,
        int $countryId
    ) {
        $this->companyName = $companyName;
        $this->countryId = $countryId;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    public function getResponseObjectClass(): string
    {
        return self::RESPONSE_CLASS;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getBankId(): ?int
    {
        return $this->bankId;
    }

    public function setBankId(?int $bankId): self
    {
        $this->bankId = $bankId;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
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

    public function setDefaultInvoiceMaturity(?int $defaultInvoiceMaturity): self
    {
        $this->defaultInvoiceMaturity = $defaultInvoiceMaturity;

        return $this;
    }

    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?float $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getIdentificationNumber(): ?string
    {
        return $this->identificationNumber;
    }

    public function setIdentificationNumber(?string $identificationNumber): self
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }

    public function getIsRegisteredForVatOnPay(): ?bool
    {
        return $this->isRegisteredForVatOnPay;
    }

    public function setIsRegisteredForVatOnPay(?bool $isRegisteredForVatOnPay): self
    {
        $this->isRegisteredForVatOnPay = $isRegisteredForVatOnPay;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getSendReminders(): ?bool
    {
        return $this->sendReminders;
    }

    public function setSendReminders(?bool $sendReminders): self
    {
        $this->sendReminders = $sendReminders;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSwift(): ?string
    {
        return $this->swift;
    }

    public function setSwift(?string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getVatIdentificationNumber(): ?string
    {
        return $this->vatIdentificationNumber;
    }

    public function setVatIdentificationNumber(?string $vatIdentificationNumber): self
    {
        $this->vatIdentificationNumber = $vatIdentificationNumber;

        return $this;
    }

    public function getVatIdentificationNumberSk(): ?string
    {
        return $this->vatIdentificationNumberSk;
    }

    public function setVatIdentificationNumberSk(?string $vatIdentificationNumberSk): self
    {
        $this->vatIdentificationNumberSk = $vatIdentificationNumberSk;

        return $this;
    }

    public function getWww(): ?string
    {
        return $this->www;
    }

    public function setWww(?string $www): self
    {
        $this->www = $www;

        return $this;
    }
}
