<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences\Response;

use JMS\Serializer\Annotation as Serializer;

final class Metadata
{
    /**
     * @Serializer\SerializedName("DateCreated")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateCreated;

    /**
     * @Serializer\SerializedName("DateLastChange")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    private \DateTimeImmutable $dateLastChange;

    /**
     * @Serializer\SerializedName("UserCreatedId")
     * @Serializer\Type("int")
     */
    private int $userCreatedId;

    /**
     * @Serializer\SerializedName("UserLastChangeId")
     * @Serializer\Type("int")
     */
    private int $userLastChangeId;

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getDateLastChange(): \DateTimeImmutable
    {
        return $this->dateLastChange;
    }

    public function getUserCreatedId(): int
    {
        return $this->userCreatedId;
    }

    public function getUserLastChangeId(): int
    {
        return $this->userLastChangeId;
    }

}
