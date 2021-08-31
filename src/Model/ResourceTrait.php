<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

trait ResourceTrait
{

    protected ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

}
