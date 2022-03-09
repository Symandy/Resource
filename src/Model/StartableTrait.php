<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;

trait StartableTrait
{

    private ?DateTimeInterface $startsAt = null;

    public function getStartsAt(): ?DateTimeInterface
    {
        return $this->startsAt;
    }

    public function setStartsAt(?DateTimeInterface $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

}
