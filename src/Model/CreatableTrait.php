<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

use function date_default_timezone_get;
use function time;

trait CreatableTrait
{

    protected ?DateTimeInterface $createdAt = null;

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function create(DateTimeZone $timezone = null): void
    {
        $timezone ??= new DateTimeZone(date_default_timezone_get());
        $createdAt = DateTimeImmutable::createFromFormat('U', (string) time());

        $this->setCreatedAt($createdAt->setTimezone($timezone));
    }

}
