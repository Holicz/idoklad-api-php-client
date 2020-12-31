<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice;

use DateTimeImmutable;
use DobryProgramator\iDoklad\Enum\ConstantSymbol;
use DobryProgramator\iDoklad\Enum\Currency;
use DobryProgramator\iDoklad\Enum\EetResponsibility;
use DobryProgramator\iDoklad\Enum\Exported;
use DobryProgramator\iDoklad\Enum\IsSentToPurchaser;
use DobryProgramator\iDoklad\Enum\PaymentOption;
use DobryProgramator\iDoklad\Enum\PaymentStatus;
use DobryProgramator\iDoklad\UseCase\Metadata;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Attachment;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\DeliveryAddress;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Item;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\MyAddress;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\PartnerAddress;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class CreateProformaInvoiceResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Attachments")
     * @Serializer\Type("array<'DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Attachment'>")
     *
     * @var array<int, Attachment>
     */
    private array $attachments = [];

    /**
     * @Serializer\SerializedName("ConstantSymbolId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\ConstantSymbol'>")
     */
    private ConstantSymbol $constantSymbol;

    /**
     * @Serializer\SerializedName("CurrencyId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Currency'>")
     */
    private Currency $currency;

    /**
     * @Serializer\SerializedName("DateOfAccountingEvent")
     */
    private DateTimeImmutable $dateOfAccountingEvent;

    /**
     * @Serializer\SerializedName("DateOfIssue")
     */
    private DateTimeImmutable $dateOfIssue;

    /**
     * @Serializer\SerializedName("DateOfLastReminder")
     */
    private DateTimeImmutable $dateOfLastReminder;

    /**
     * @Serializer\SerializedName("DateOfMaturity")
     */
    private DateTimeImmutable $dateOfMaturity;

    /**
     * @Serializer\SerializedName("DateOfPayment")
     */
    private DateTimeImmutable $dateOfPayment;

    /**
     * @Serializer\SerializedName("DateOfTaxing")
     */
    private DateTimeImmutable $dateOfTaxing;

    /**
     * @Serializer\SerializedName("DateOfVatApplication")
     */
    private DateTimeImmutable $dateOfVatApplication;

    /**
     * @Serializer\SerializedName("DeliveryAddress")
     */
    private DeliveryAddress $deliveryAddress;

    /**
     * @Serializer\SerializedName("Description")
     */
    private string $description;

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
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\EetResponsibility'>")
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
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\Exported'>")
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
     * @Serializer\SerializedName("IsProformaTaxed")
     */
    private bool $isProformaTaxed;

    /**
     * @Serializer\SerializedName("IsSentToAccountant")
     */
    private bool $isSentToAccountant;

    /**
     * @Serializer\SerializedName("IsSentToPurchaser")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\IsSentToPurchaser'>")
     */
    private IsSentToPurchaser $isSentToPurchaser;

    /**
     * @Serializer\SerializedName("Items")
     * @Serializer\Type("array<'DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Item'>")
     *
     * @var array<int, Item>
     */
    private array $items;

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
    private MyAddress $myAddress;

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
    private PartnerAddress $partnerAddress;

    /**
     * @Serializer\SerializedName("PartnerId")
     */
    private int $partnerId;

    /**
     * @Serializer\SerializedName("PaymentOptionId")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\PaymentOption'>")
     */
    private PaymentOption $paymentOption;

    /**
     * @Serializer\SerializedName("PaymentStatus")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\PaymentStatus'>")
     */
    private PaymentStatus $paymentStatus;
}
