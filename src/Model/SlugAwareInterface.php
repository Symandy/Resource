<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

interface SlugAwareInterface
{

    public function getSlug(): ?string;

    public function setSlug(?string $slug): void;

}
