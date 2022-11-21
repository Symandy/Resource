<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;

trait EndableTrait
{

    protected ?DateTimeInterface $endsAt = null;

    public function getEndsAt(): ?DateTimeInterface
    {
        return $this->endsAt;
    }

    public function setEndsAt(?DateTimeInterface $endsAt): void
    {
        $this->endsAt = $endsAt;
    }

}
