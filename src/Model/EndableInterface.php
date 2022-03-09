<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;

interface EndableInterface
{

    public function getEndsAt(): ?DateTimeInterface;

    public function setEndsAt(?DateTimeInterface $endsAt): void;

}
