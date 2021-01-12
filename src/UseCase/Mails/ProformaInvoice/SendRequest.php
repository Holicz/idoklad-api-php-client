<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Mails\ProformaInvoice;

use DobryProgramator\iDoklad\Enum\EmailMethod;
use DobryProgramator\iDoklad\Enum\ReportLanguage;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\HttpFoundation\Request;

final class SendRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_POST;

    private const ENDPOINT = 'Mails/ProformaInvoice/Send';

    private const RESPONSE_CLASS = SendResponse::class;

    /**
     * @Serializer\SerializedName("DocumentId")
     * @Serializer\Type("int")
     */
    private int $documentId;

    /**
     * @Serializer\SerializedName("EmailBody")
     * @Serializer\Type("string")
     */
    private ?string $emailBody = null;

    /**
     * @Serializer\SerializedName("EmailSubject")
     * @Serializer\Type("string")
     */
    private ?string $emailSubject = null;

    /**
     * @Serializer\SerializedName("Method")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\EmailMethod'>")
     */
    private ?EmailMethod $method = null;

    /**
     * @Serializer\SerializedName("OtherRecipients")
     * @Serializer\Type("array<string>")
     */
    private array $otherRecipients = [];

    /**
     * @Serializer\SerializedName("ReportLanguage")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\ReportLanguage'>")
     */
    private ?ReportLanguage $reportLanguage = null;

    /**
     * @Serializer\SerializedName("sendAttachment")
     * @Serializer\Type("bool")
     */
    private ?bool $sendAttachment = null;

    /**
     * @Serializer\SerializedName("sendToAccountant")
     * @Serializer\Type("bool")
     */
    private bool $sendToAccountant;

    /**
     * @Serializer\SerializedName("sendToPartner")
     * @Serializer\Type("bool")
     */
    private bool $sendToPartner;

    /**
     * @Serializer\SerializedName("sendToSelf")
     * @Serializer\Type("bool")
     */
    private bool $sendToSelf;

    public function __construct(
        int $documentId,
        bool $sendToAccountant,
        bool $sendToPartner,
        bool $sendToSelf
    ) {
        $this->documentId = $documentId;
        $this->sendToAccountant = $sendToAccountant;
        $this->sendToPartner = $sendToPartner;
        $this->sendToSelf = $sendToSelf;
    }

    public function getDocumentId(): int
    {
        return $this->documentId;
    }

    public function getEmailBody(): ?string
    {
        return $this->emailBody;
    }

    public function setEmailBody(?string $emailBody): void
    {
        $this->emailBody = $emailBody;
    }

    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    public function setEmailSubject(?string $emailSubject): void
    {
        $this->emailSubject = $emailSubject;
    }

    public function getMethod(): ?EmailMethod
    {
        return $this->method;
    }

    public function setMethod(?EmailMethod $method): void
    {
        $this->method = $method;
    }

    public function getOtherRecipients(): array
    {
        return $this->otherRecipients;
    }

    public function setOtherRecipients(array $otherRecipients): void
    {
        $this->otherRecipients = $otherRecipients;
    }

    public function getReportLanguage(): ?ReportLanguage
    {
        return $this->reportLanguage;
    }

    public function setReportLanguage(?ReportLanguage $reportLanguage): void
    {
        $this->reportLanguage = $reportLanguage;
    }

    public function getSendAttachment(): ?bool
    {
        return $this->sendAttachment;
    }

    public function setSendAttachment(?bool $sendAttachment): void
    {
        $this->sendAttachment = $sendAttachment;
    }

    public function isSendToAccountant(): bool
    {
        return $this->sendToAccountant;
    }

    public function isSendToPartner(): bool
    {
        return $this->sendToPartner;
    }

    public function isSendToSelf(): bool
    {
        return $this->sendToSelf;
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
}
