<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;
use DateTimeZone;

interface CreatableInterface
{

    public function getCreatedAt(): ?DateTimeInterface;

    public function setCreatedAt(?DateTimeInterface $createdAt): void;

    public function create(DateTimeZone $timezone = null): void;

}
