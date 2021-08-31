<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTime;
use DateTimeInterface;

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
        $this->setArchivedAt(new DateTime());
    }

    public function restore(): void
    {
        $this->setArchivedAt(null);
    }

}
