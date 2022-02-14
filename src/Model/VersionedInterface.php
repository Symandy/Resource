<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

interface VersionedInterface
{

    public function getVersion(): ?int;

    public function setVersion(?int $version): void;

}
