<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

trait TimestampableTrait
{

    use CreatableTrait {
        create as initializeCreatedAt;
    }
    use UpdatableTrait;

    public function create(): void
    {
        $this->initializeCreatedAt();
        $this->update();
    }

}
