<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice;

use DateTimeInterface;
use DobryProgramator\iDoklad\UseCase\Contact\CreateContact\CreateContactResponse;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Request\Item;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\HttpFoundation\Request;

final class CreateProformaInvoiceRequest implements UseCaseRequestInterface
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
     * @Serializer\SerializedName("ConstantSymbolId")
     */
    private ?int $constantSymbolId = null;

    /**
     * @Serializer\SerializedName("CurrencyId")
     */
    private int $currencyId;

    /**
     * @Serializer\SerializedName("DateOfIssue")
     */
    private DateTimeInterface $dateOfIssue;

    /**
     * @Serializer\SerializedName("DateOfMaturity")
     */
    private DateTimeInterface $dateOfMaturity;

    /**
     * @Serializer\SerializedName("DateOfPayment")
     */
    private ?DateTimeInterface $dateOfPayment = null;

    /**
     * @Serializer\SerializedName("DateOfTaxing")
     */
    private ?DateTimeInterface $dateOfTaxing = null;

    /**
     * @Serializer\SerializedName("DateOfVatApplication")
     */
    private ?DateTimeInterface $dateOfVatApplication = null;

    /**
     * @Serializer\SerializedName("Description")
     */
    private string $description;

    /**
     * @Serializer\SerializedName("DocumentSerialNumber")
     */
    private int $documentSerialNumber;

    /**
     * @Serializer\SerializedName("EetResponsibility")
     */
    private ?int $eetResponsibility = null;

    /**
     * @Serializer\SerializedName("ExchangeRate")
     */
    private ?float $exchangeRate = null;

    /**
     * @Serializer\SerializedName("ExchangeRateAmount")
     */
    private ?float $exchangeRateAmount = null;

    /**
     * @Serializer\SerializedName("Exportedů)
     */
    private ?int $exported = null;

    /**
     * @Serializer\SerializedName("Iban")
     */
    private ?string $iban = null;

    /**
     * @Serializer\SerializedName("IsEet")
     */
    private bool $isEet;

    /**
     * @Serializer\SerializedName("IsIncomeTax")
     */
    private bool $isIncomeTax;

    /**
     * @Serializer\SerializedName("IsProformaTaxed")
     */
    private bool $isProformaTaxed;

    /**
     * @Serializer\SerializedName("Items")
     *
     * @var array<int, Item>
     */
    private array $items = [];

    /**
     * @Serializer\SerializedName("ItemsTextPrefix")
     */
    private ?string $itemsTextPrefix = null;

    /**
     * @Serializer\SerializedName("ItemsTextSuffix")
     */
    private ?string $itemsTextSuffix = null;

    /**
     * @Serializer\SerializedName("Note")
     */
    private ?string $note = null;

    /**
     * @Serializer\SerializedName("NumericSequenceId")
     */
    private int $numericSequenceId;

    /**
     * @Serializer\SerializedName("OrderNumber")
     */
    private ?string $orderNumber = null;

    /**
     * @Serializer\SerializedName("PartnerId")
     */
    private int $partnerId;

    /**
     * @Serializer\SerializedName("PaymentOptionId")
     */
    private int $paymentOptionId;

    /**
     * @Serializer\SerializedName("ReportLanguage")
     */
    private ?int $reportLanguage = null;

    /**
     * @Serializer\SerializedName("SalesOrderId")
     */
    private ?int $salesOrderId = null;

    /**
     * @Serializer\SerializedName("SalesPosEquipmentId")
     */
    private ?int $salesPosEquipmentId = null;

    /**
     * @Serializer\SerializedName("Swift")
     */
    private ?string $swift = null;

    /**
     * @Serializer\SerializedName("Tags")
     *
     * @var array<int>
     */
    private array $tags = [];

    /**
     * @Serializer\SerializedName("VariableSymbol")
     */
    private ?string $variableSymbol = null;

    /**
     * @Serializer\SerializedName("VatOnPayStatus")
     */
    private ?int $vatOnPayStatus = null;

    public function __construct(
        int $currencyId,
        DateTimeInterface $dateOfIssue,
        DateTimeInterface $dateOfMaturity,
        string $description,
        int $documentSerialNumber,
        bool $isEet,
        bool $isIncomeTax,
        bool $isProformaTaxed,
        int $numericSequenceId,
        int $partnerId,
        int $paymentOptionId
    ) {
        $this->currencyId = $currencyId;
        $this->dateOfIssue = $dateOfIssue;
        $this->dateOfMaturity = $dateOfMaturity;
        $this->description = $description;
        $this->documentSerialNumber = $documentSerialNumber;
        $this->isEet = $isEet;
        $this->isIncomeTax = $isIncomeTax;
        $this->isProformaTaxed = $isProformaTaxed;
        $this->numericSequenceId = $numericSequenceId;
        $this->partnerId = $partnerId;
        $this->paymentOptionId = $paymentOptionId;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * @return class-string<CreateContactResponse>
     */
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

    public function getConstantSymbolId(): ?int
    {
        return $this->constantSymbolId;
    }

    public function setConstantSymbolId(?int $constantSymbolId): self
    {
        $this->constantSymbolId = $constantSymbolId;

        return $this;
    }

    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    public function getDateOfIssue(): DateTimeInterface
    {
        return $this->dateOfIssue;
    }

    public function getDateOfMaturity(): DateTimeInterface
    {
        return $this->dateOfMaturity;
    }

    public function getDateOfPayment(): ?DateTimeInterface
    {
        return $this->dateOfPayment;
    }

    public function setDateOfPayment(?DateTimeInterface $dateOfPayment): self
    {
        $this->dateOfPayment = $dateOfPayment;

        return $this;
    }

    public function getDateOfTaxing(): ?DateTimeInterface
    {
        return $this->dateOfTaxing;
    }

    public function setDateOfTaxing(?DateTimeInterface $dateOfTaxing): self
    {
        $this->dateOfTaxing = $dateOfTaxing;

        return $this;
    }

    public function getDateOfVatApplication(): ?DateTimeInterface
    {
        return $this->dateOfVatApplication;
    }

    public function setDateOfVatApplication(?DateTimeInterface $dateOfVatApplication): self
    {
        $this->dateOfVatApplication = $dateOfVatApplication;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDocumentSerialNumber(): int
    {
        return $this->documentSerialNumber;
    }

    public function getEetResponsibility(): ?int
    {
        return $this->eetResponsibility;
    }

    public function setEetResponsibility(?int $eetResponsibility): self
    {
        $this->eetResponsibility = $eetResponsibility;

        return $this;
    }

    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(?float $exchangeRate): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    public function getExchangeRateAmount(): ?float
    {
        return $this->exchangeRateAmount;
    }

    public function setExchangeRateAmount(?float $exchangeRateAmount): self
    {
        $this->exchangeRateAmount = $exchangeRateAmount;

        return $this;
    }

    public function getExported(): ?int
    {
        return $this->exported;
    }

    public function setExported(?int $exported): self
    {
        $this->exported = $exported;

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

    public function isEet(): bool
    {
        return $this->isEet;
    }

    public function isIncomeTax(): bool
    {
        return $this->isIncomeTax;
    }

    public function isProformaTaxed(): bool
    {
        return $this->isProformaTaxed;
    }

    /**
     * @return array<int, Item>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        $this->items[] = $item;

        return $this;
    }

    public function getItemsTextPrefix(): ?string
    {
        return $this->itemsTextPrefix;
    }

    public function setItemsTextPrefix(?string $itemsTextPrefix): self
    {
        $this->itemsTextPrefix = $itemsTextPrefix;

        return $this;
    }

    public function getItemsTextSuffix(): ?string
    {
        return $this->itemsTextSuffix;
    }

    public function setItemsTextSuffix(?string $itemsTextSuffix): self
    {
        $this->itemsTextSuffix = $itemsTextSuffix;

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

    public function getNumericSequenceId(): int
    {
        return $this->numericSequenceId;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getPartnerId(): int
    {
        return $this->partnerId;
    }

    public function getPaymentOptionId(): int
    {
        return $this->paymentOptionId;
    }

    public function getReportLanguage(): ?int
    {
        return $this->reportLanguage;
    }

    public function setReportLanguage(?int $reportLanguage): self
    {
        $this->reportLanguage = $reportLanguage;

        return $this;
    }

    public function getSalesOrderId(): ?int
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(?int $salesOrderId): self
    {
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    public function getSalesPosEquipmentId(): ?int
    {
        return $this->salesPosEquipmentId;
    }

    public function setSalesPosEquipmentId(?int $salesPosEquipmentId): self
    {
        $this->salesPosEquipmentId = $salesPosEquipmentId;

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

    /**
     * @return array<int>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    public function addTag(int $tag): self
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * @param array<int> $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getVariableSymbol(): ?string
    {
        return $this->variableSymbol;
    }

    public function setVariableSymbol(?string $variableSymbol): self
    {
        $this->variableSymbol = $variableSymbol;

        return $this;
    }

    public function getVatOnPayStatus(): ?int
    {
        return $this->vatOnPayStatus;
    }

    public function setVatOnPayStatus(?int $vatOnPayStatus): self
    {
        $this->vatOnPayStatus = $vatOnPayStatus;

        return $this;
    }
}
