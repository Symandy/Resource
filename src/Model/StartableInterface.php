<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeInterface;

interface StartableInterface
{

    public function getStartsAt(): ?DateTimeInterface;

    public function setStartsAt(?DateTimeInterface $startsAt): void;

}
