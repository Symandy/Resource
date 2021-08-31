<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

trait CodeAwareTrait
{

    protected ?string $code = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

}
