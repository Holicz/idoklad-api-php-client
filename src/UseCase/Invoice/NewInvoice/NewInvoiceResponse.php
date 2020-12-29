<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoiceResponse;

use DobryProgramator\iDoklad\Enum\Currency;
use DobryProgramator\iDoklad\Enum\EetResponsibility;
use DobryProgramator\iDoklad\Enum\Exported;
use DobryProgramator\iDoklad\Enum\IsSentToPurchaser;
use DobryProgramator\iDoklad\Enum\PaymentStatus;
use DobryProgramator\iDoklad\Enum\ReportLanguage;
use DobryProgramator\iDoklad\Enum\VatOnPayStatus;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\Address;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\Attachment;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\DeliveryAddress;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\Item;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\Prices;
use DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\Tag;
use DobryProgramator\iDoklad\UseCase\Metadata;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class NewInvoiceResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Attachments")
     *
     * @var array<int, Attachment>
     */
    private array $attachments = [];

    /**
     * @Serializer\SerializedName("ConstantSymbolId")
     */
    private int $constantSymbolId;

    /**
     * @Serializer\SerializedName("CurrencyId")
     * @Serializer\Type("enum")
     */
    private Currency $currencyId;

    /**
     * @Serializer\SerializedName("DateOfAccountingEvent")
     */
    private DateTimeInterface $dateOfAccountingEvent;

    /**
     * @Serializer\SerializedName("DateOfIssue")
     */
    private DateTimeInterface $dateOfIssue;

    /**
     * @Serializer\SerializedName("DateOfLastReminder")
     */
    private DateTimeInterface $dateOfLastReminder;

    /**
     * @Serializer\SerializedName("DateOfMaturity")
     */
    private DateTimeInterface $dateOfMaturity;

    /**
     * @Serializer\SerializedName("DateOfPayment")
     */
    private DateTimeInterface $dateOfPayment;

    /**
     * @Serializer\SerializedName("DateOfTaxing")
     */
    private DateTimeInterface $dateOfTaxing;

    /**
     * @Serializer\SerializedName("DateOfVatApplication")
     */
    private DateTimeInterface $dateOfVatApplication;

    /**
     * @Serializer\SerializedName("DeliveryAddress")
     */
    private DeliveryAddress $deliveryAddress;

    /**
     * @Serializer\SerializedName("Description")
     */
    private string $description;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     */
    private float $discountPercentage;

    /**
     * @Serializer\SerializedName("DocumentNumber")
     */
    private string $documentNumber;

    /**
     * @Serializer\SerializedName("DocumentSerialNumber")
     */
    private int $documentSerialNumber;

    /**
     * @Serializer\SerializedName("EetResponsibility")
     * @Serializer\Type("enum")
     */
    private EetResponsibility $eetResponsibility;

    /**
     * @Serializer\SerializedName("ExchangeRate")
     */
    private float $exchangeRate;

    /**
     * @Serializer\SerializedName("ExchangeRateAmount")
     */
    private float $exchangeRateAmount;

    /**
     * @Serializer\SerializedName("Exported")
     * @Serializer\Type("enum")
     */
    private Exported $exported;

    /**
     * @Serializer\SerializedName("Id")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsEet")
     */
    private bool $isEet;

    /**
     * @Serializer\SerializedName("IsIncomeTax")
     */
    private bool $isIncomeTax;

    /**
     * @Serializer\SerializedName("IsSentToAccountant")
     */
    private bool $isSentToAccountant;

    /**
     * @Serializer\SerializedName("IsSentToPurchaser")
     * @Serializer\Type("enum")
     */
    private IsSentToPurchaser $isSentToPurchaser;

    /**
     * @Serializer\SerializedName("Items")
     *
     * @var array<int, Item>
     */
    private array $items = [];

    /**
     * @Serializer\SerializedName("ItemsTextPrefix")
     */
    private string $itemsTextPrefix;

    /**
     * @Serializer\SerializedName("ItemsTextSuffix")
     */
    private string $itemsTextSuffix;

    /**
     * @Serializer\SerializedName("Metadata")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("MyAddress")
     */
    private Address $myAddress;

    /**
     * @Serializer\SerializedName("Note")
     */
    private string $note;

    /**
     * @Serializer\SerializedName("OrderNumber")
     */
    private string $orderNumber;

    /**
     * @Serializer\SerializedName("PartnerAddress")
     */
    private Address $partnerAddress;

    /**
     * @Serializer\SerializedName("PartnerId")
     */
    private int $partnerId;

    /**
     * @Serializer\SerializedName("PaymentOptionId")
     */
    private int $paymentOptionId;

    /**
     * @Serializer\SerializedName("PaymentStatus")
     * @Serializer\Type("enum")
     */
    private PaymentStatus $paymentStatus;

    /**
     * @Serializer\SerializedName("Prices")
     */
    private Prices $prices;

    /**
     * @Serializer\SerializedName("ProformaInvoices")
     */
    private int $proformaInvoices;

    /**
     * @Serializer\SerializedName("RecurringInvoiceId")
     */
    private int $recurringInvoiceId;

    /**
     * @Serializer\SerializedName("ReminderCount")
     */
    private int $reminderCount;

    /**
     * @Serializer\SerializedName("ReportLanguage")
     * @Serializer\Type("enum")
     */
    private ReportLanguage $reportLanguage;

    /**
     * @Serializer\SerializedName("SalesOrderId")
     */
    private int $salesOrderId;

    /**
     * @Serializer\SerializedName("SalesPosEquipmentId")
     */
    private int $salesPosEquipmentId;

    /**
     * @Serializer\SerializedName("Tags")
     *
     * @var array<int, Tag>
     */
    private array $tags = [];

    /**
     * @Serializer\SerializedName("VariableSymbol")
     */
    private string $variableSymbol;

    /**
     * @Serializer\SerializedName("VatOnPayStatus")
     * @Serializer\Type("enum")
     */
    private VatOnPayStatus $vatOnPayStatus;

    /**
     * @Serializer\SerializedName("VatReverseChargeCodeId")
     */
    private int $vatReverseChargeCodeId;

    public function getAttachments(): Attachment
    {
        return $this->attachments;
    }

    public function getConstantSymbolId(): int
    {
        return $this->constantSymbolId;
    }

    public function getCurrencyId(): Currency
    {
        return $this->currencyId;
    }

    public function getDateOfAccountingEvent(): DateTimeInterface
    {
        return $this->dateOfAccountingEvent;
    }

    public function getDateOfIssue(): DateTimeInterface
    {
        return $this->dateOfIssue;
    }

    public function getDateOfLastReminder(): DateTimeInterface
    {
        return $this->dateOfLastReminder;
    }

    public function getDateOfMaturity(): DateTimeInterface
    {
        return $this->dateOfMaturity;
    }

    public function getDateOfPayment(): DateTimeInterface
    {
        return $this->dateOfPayment;
    }

    public function getDateOfTaxing(): DateTimeInterface
    {
        return $this->dateOfTaxing;
    }

    public function getDateOfVatApplication(): DateTimeInterface
    {
        return $this->dateOfVatApplication;
    }

    public function getDeliveryAddress(): DeliveryAddress
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

    public function getMyAddress(): Address
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

    public function getPartnerAddress(): Address
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

    public function getProformaInvoices(): int
    {
        return $this->proformaInvoices;
    }

    public function getRecurringInvoiceId(): int
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

    public function getSalesOrderId(): int
    {
        return $this->salesOrderId;
    }

    public function getSalesPosEquipmentId(): int
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

    public function getVatReverseChargeCodeId(): int
    {
        return $this->vatReverseChargeCodeId;
    }
}
