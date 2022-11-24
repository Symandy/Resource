<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

use function date_default_timezone_get;
use function time;

trait UpdatableTrait
{

    protected ?DateTimeInterface $updatedAt = null;

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function update(DateTimeZone $timezone = null): void
    {
        $timezone ??= new DateTimeZone(date_default_timezone_get());
        $updatedAt = DateTimeImmutable::createFromFormat('U', (string) time());

        $this->setUpdatedAt($updatedAt->setTimezone($timezone));
    }

}
