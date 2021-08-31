<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

trait SlugAwareTrait
{

    protected ?string $slug = null;

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

}
