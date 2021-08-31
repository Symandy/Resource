<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

interface CodeAwareInterface
{

    public function getCode(): ?string;

    public function setCode(?string $code): void;

}
