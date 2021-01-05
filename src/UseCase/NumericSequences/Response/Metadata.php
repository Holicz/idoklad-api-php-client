<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\Response;

use JMS\Serializer\Annotation as Serializer;

final class Metadata
{
    /**
     * @Serializer\SerializedName("DateCreated")
     */
    private DateTimeInterface $dateCreated;

    /**
     * @Serializer\SerializedName("DateLastChange")
     */
    private DateTimeInterface $dateLastChange;

    /**
     * @Serializer\SerializedName("UserCreatedId")
     */
    private DateTimeInterface $userCreatedId;

    /**
     * @Serializer\SerializedName("UserLastChangeId")
     */
    private DateTimeInterface $userLastChangeId;

    public function getDateCreated(): DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function getDateLastChange(): DateTimeInterface
    {
        return $this->dateLastChange;
    }

    public function getUserCreatedId(): DateTimeInterface
    {
        return $this->userCreatedId;
    }

    public function getUserLastChangeId(): DateTimeInterface
    {
        return $this->userLastChangeId;
    }

}
