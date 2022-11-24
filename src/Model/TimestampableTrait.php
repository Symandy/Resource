<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

use DateTimeZone;

trait TimestampableTrait
{

    use CreatableTrait {
        create as initializeCreatedAt;
    }
    use UpdatableTrait;

    public function create(DateTimeZone $timezone = null): void
    {
        $this->initializeCreatedAt($timezone);
        $this->update();
    }

}
