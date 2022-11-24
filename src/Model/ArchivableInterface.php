<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;
use DateTimeZone;

interface ArchivableInterface
{

    public function getArchivedAt(): ?DateTimeInterface;

    public function setArchivedAt(?DateTimeInterface $archivedAt): void;

    public function archive(DateTimeZone $timezone = null): void;

    public function restore(): void;

}
