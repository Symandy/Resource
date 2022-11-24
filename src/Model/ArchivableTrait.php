<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

use function date_default_timezone_get;
use function time;

trait ArchivableTrait
{

    protected ?DateTimeInterface $archivedAt = null;

    public function getArchivedAt(): ?DateTimeInterface
    {
        return $this->archivedAt;
    }

    public function setArchivedAt(?DateTimeInterface $archivedAt): void
    {
        $this->archivedAt = $archivedAt;
    }

    public function archive(DateTimeZone $timezone = null): void
    {
        $timezone ??= new DateTimeZone(date_default_timezone_get());
        $archivedAt = DateTimeImmutable::createFromFormat('U', (string) time());

        $this->setArchivedAt($archivedAt->setTimezone($timezone));
    }

    public function restore(): void
    {
        $this->setArchivedAt(null);
    }

}
