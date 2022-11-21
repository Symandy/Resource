<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeImmutable;
use DateTimeInterface;

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

    public function archive(): void
    {
        $this->setArchivedAt(DateTimeImmutable::createFromFormat('U', (string) time()));
    }

    public function restore(): void
    {
        $this->setArchivedAt(null);
    }

}
