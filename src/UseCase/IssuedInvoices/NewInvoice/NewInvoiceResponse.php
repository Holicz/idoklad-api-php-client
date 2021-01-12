<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice;

use DobryProgramator\iDoklad\Enum\Currency;
use DobryProgramator\iDoklad\Enum\EetResponsibility;
use DobryProgramator\iDoklad\Enum\Exported;
use DobryProgramator\iDoklad\Enum\IsSentToPurchaser;
use DobryProgramator\iDoklad\Enum\PaymentStatus;
use DobryProgramator\iDoklad\Enum\ReportLanguage;
use DobryProgramator\iDoklad\Enum\VatOnPayStatus;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Attachment;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\DeliveryAddress;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Item;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\MyAddress;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\PartnerAddress;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Prices;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Tag;
use DobryProgramator\iDoklad\UseCase\Metadata;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class NewInvoiceResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Attachments")
     * @Serializer\Type("array<DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Attachment>")
     *
     * @var array<int, Attachment>
     */
    private array $attachments = [];

    /**
     * @Serializer\SerializedName("ConstantSymbolId")
     * @Serializer\Type("int")
     */
    private int $constantSymbolId;

    /**
     * @Serializer\SerializedName("CurrencyId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Currency'>")
     */
    private Currency $currency;

    /**
     * @Serializer\SerializedName("DateOfAccountingEvent")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfAccountingEvent;

    /**
     * @Serializer\SerializedName("DateOfIssue")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfIssue;

    /**
     * @Serializer\SerializedName("DateOfLastReminder")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfLastReminder;

    /**
     * @Serializer\SerializedName("DateOfMaturity")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfMaturity;

    /**
     * @Serializer\SerializedName("DateOfPayment")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfPayment;

    /**
     * @Serializer\SerializedName("DateOfTaxing")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfTaxing;

    /**
     * @Serializer\SerializedName("DateOfVatApplication")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateOfVatApplication;

    /**
     * @Serializer\SerializedName("DeliveryAddress")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\DeliveryAddress")
     */
    private ?DeliveryAddress $deliveryAddress = null;

    /**
     * @Serializer\SerializedName("Description")
     * @Serializer\Type("string")
     */
    private string $description;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     * @Serializer\Type("float")
     */
    private float $discountPercentage;

    /**
     * @Serializer\SerializedName("DocumentNumber")
     * @Serializer\Type("string")
     */
    private string $documentNumber;

    /**
     * @Serializer\SerializedName("DocumentSerialNumber")
     * @Serializer\Type("int")
     */
    private int $documentSerialNumber;

    /**
     * @Serializer\SerializedName("EetResponsibility")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\EetResponsibility'>")
     */
    private EetResponsibility $eetResponsibility;

    /**
     * @Serializer\SerializedName("ExchangeRate")
     * @Serializer\Type("float")
     */
    private float $exchangeRate;

    /**
     * @Serializer\SerializedName("ExchangeRateAmount")
     * @Serializer\Type("float")
     */
    private float $exchangeRateAmount;

    /**
     * @Serializer\SerializedName("Exported")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Exported'>")
     */
    private Exported $exported;

    /**
     * @Serializer\SerializedName("Id")
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsEet")
     * @Serializer\Type("bool")
     */
    private bool $isEet;

    /**
     * @Serializer\SerializedName("IsIncomeTax")
     * @Serializer\Type("bool")
     */
    private bool $isIncomeTax;

    /**
     * @Serializer\SerializedName("IsSentToAccountant")
     * @Serializer\Type("bool")
     */
    private bool $isSentToAccountant;

    /**
     * @Serializer\SerializedName("IsSentToPurchaser")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\IsSentToPurchaser'>")
     */
    private IsSentToPurchaser $isSentToPurchaser;

    /**
     * @Serializer\SerializedName("Items")
     * @Serializer\Type("array<DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Item>")
     *
     * @var array<int, Item>
     */
    private array $items = [];

    /**
     * @Serializer\SerializedName("ItemsTextPrefix")
     * @Serializer\Type("string")
     */
    private string $itemsTextPrefix;

    /**
     * @Serializer\SerializedName("ItemsTextSuffix")
     * @Serializer\Type("string")
     */
    private string $itemsTextSuffix;

    /**
     * @Serializer\SerializedName("Metadata")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\Metadata")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("MyAddress")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\MyAddress")
     */
    private MyAddress $myAddress;

    /**
     * @Serializer\SerializedName("Note")
     * @Serializer\Type("string")
     */
    private string $note;

    /**
     * @Serializer\SerializedName("OrderNumber")
     * @Serializer\Type("string")
     */
    private string $orderNumber;

    /**
     * @Serializer\SerializedName("PartnerAddress")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\PartnerAddress")
     */
    private PartnerAddress $partnerAddress;

    /**
     * @Serializer\SerializedName("PartnerId")
     * @Serializer\Type("int")
     */
    private int $partnerId;

    /**
     * @Serializer\SerializedName("PaymentOptionId")
     * @Serializer\Type("int")
     */
    private int $paymentOptionId;

    /**
     * @Serializer\SerializedName("PaymentStatus")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\PaymentStatus'>")
     */
    private PaymentStatus $paymentStatus;

    /**
     * @Serializer\SerializedName("Prices")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Prices")
     */
    private Prices $prices;

    /**
     * @Serializer\SerializedName("ProformaInvoices")
     * @Serializer\Type("array<int>")
     */
    private ?array $proformaInvoices = null;

    /**
     * @Serializer\SerializedName("RecurringInvoiceId")
     * @Serializer\Type("int")
     */
    private ?int $recurringInvoiceId = null;

    /**
     * @Serializer\SerializedName("ReminderCount")
     * @Serializer\Type("int")
     */
    private int $reminderCount;

    /**
     * @Serializer\SerializedName("ReportLanguage")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\ReportLanguage'>")
     */
    private ReportLanguage $reportLanguage;

    /**
     * @Serializer\SerializedName("SalesOrderId")
     * @Serializer\Type("int")
     */
    private ?int $salesOrderId = null;

    /**
     * @Serializer\SerializedName("SalesPosEquipmentId")
     * @Serializer\Type("int")
     */
    private ?int $salesPosEquipmentId = null;

    /**
     * @Serializer\SerializedName("Tags")
     * @Serializer\Type("array<DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Tag>")
     *
     * @var array<int, Tag>
     */
    private array $tags = [];

    /**
     * @Serializer\SerializedName("VariableSymbol")
     * @Serializer\Type("string")
     */
    private string $variableSymbol;

    /**
     * @Serializer\SerializedName("VatOnPayStatus")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\VatOnPayStatus'>")
     */
    private VatOnPayStatus $vatOnPayStatus;

    /**
     * @Serializer\SerializedName("VatReverseChargeCodeId")
     * @Serializer\Type("int")
     */
    private ?int $vatReverseChargeCodeId = null;

    public function getAttachments(): Attachment
    {
        return $this->attachments;
    }

    public function getConstantSymbolId(): int
    {
        return $this->constantSymbolId;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getDateOfAccountingEvent(): \DateTimeInterface
    {
        return $this->dateOfAccountingEvent;
    }

    public function getDateOfIssue(): \DateTimeInterface
    {
        return $this->dateOfIssue;
    }

    public function getDateOfLastReminder(): \DateTimeInterface
    {
        return $this->dateOfLastReminder;
    }

    public function getDateOfMaturity(): \DateTimeInterface
    {
        return $this->dateOfMaturity;
    }

    public function getDateOfPayment(): \DateTimeInterface
    {
        return $this->dateOfPayment;
    }

    public function getDateOfTaxing(): \DateTimeInterface
    {
        return $this->dateOfTaxing;
    }

    public function getDateOfVatApplication(): \DateTimeInterface
    {
        return $this->dateOfVatApplication;
    }

    public function getDeliveryAddress(): ?DeliveryAddress
    {
        return $this->deliveryAddress;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDiscountPercentage(): float
    {
        return $this->discountPercentage;
    }

    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }

    public function getDocumentSerialNumber(): int
    {
        return $this->documentSerialNumber;
    }

    public function getEetResponsibility(): EetResponsibility
    {
        return $this->eetResponsibility;
    }

    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    public function getExchangeRateAmount(): float
    {
        return $this->exchangeRateAmount;
    }

    public function getExported(): Exported
    {
        return $this->exported;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isEet(): bool
    {
        return $this->isEet;
    }

    public function isIncomeTax(): bool
    {
        return $this->isIncomeTax;
    }

    public function isSentToAccountant(): bool
    {
        return $this->isSentToAccountant;
    }

    public function isSentToPurchaser(): IsSentToPurchaser
    {
        return $this->isSentToPurchaser;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemsTextPrefix(): string
    {
        return $this->itemsTextPrefix;
    }

    public function getItemsTextSuffix(): string
    {
        return $this->itemsTextSuffix;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function getMyAddress(): MyAddress
    {
        return $this->myAddress;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getPartnerAddress(): PartnerAddress
    {
        return $this->partnerAddress;
    }

    public function getPartnerId(): int
    {
        return $this->partnerId;
    }

    public function getPaymentOptionId(): int
    {
        return $this->paymentOptionId;
    }

    public function getPaymentStatus(): PaymentStatus
    {
        return $this->paymentStatus;
    }

    public function getPrices(): Prices
    {
        return $this->prices;
    }

    public function getProformaInvoices(): ?array
    {
        return $this->proformaInvoices;
    }

    public function getRecurringInvoiceId(): ?int
    {
        return $this->recurringInvoiceId;
    }

    public function getReminderCount(): int
    {
        return $this->reminderCount;
    }

    public function getReportLanguage(): ReportLanguage
    {
        return $this->reportLanguage;
    }

    public function getSalesOrderId(): ?int
    {
        return $this->salesOrderId;
    }

    public function getSalesPosEquipmentId(): ?int
    {
        return $this->salesPosEquipmentId;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getVariableSymbol(): string
    {
        return $this->variableSymbol;
    }

    public function getVatOnPayStatus(): VatOnPayStatus
    {
        return $this->vatOnPayStatus;
    }

    public function getVatReverseChargeCodeId(): ?int
    {
        return $this->vatReverseChargeCodeId;
    }
}
