<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

trait VersionedTrait
{

    protected ?int $version = 1;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

}
