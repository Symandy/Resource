<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\app;

use Symandy\Component\Resource\Model\PeriodAwareTrait;
use Symandy\Component\Resource\Model\ResourceTrait;

class Stay implements StayInterface
{

    use ResourceTrait;
    use PeriodAwareTrait;

}
