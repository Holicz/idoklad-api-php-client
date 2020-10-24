<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

final class Metadata
{
    /**
     * @Serializer\SerializedName("DateCreated")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:s.v'>")
     */
    private DateTimeInterface $dateCreated;

    /**
     * @Serializer\SerializedName("DateLastChange")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:s.v'>")
     */
    private DateTimeInterface $dateLastChanged;

    /**
     * @Serializer\SerializedName("UserCreatedId")
     */
    private int $userCreatedId;

    /**
     * @Serializer\SerializedName("UserLastChangeId")
     */
    private int $userLastChangedId;

    public function getDateCreated(): DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function getDateLastChanged(): DateTimeInterface
    {
        return $this->dateLastChanged;
    }

    public function getUserCreatedId(): int
    {
        return $this->userCreatedId;
    }

    public function getUserLastChangedId(): int
    {
        return $this->userLastChangedId;
    }
}
