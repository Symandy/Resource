<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\app;

use Symandy\Component\Resource\Model\PeriodAwareInterface;
use Symandy\Component\Resource\Model\ResourceInterface;

interface StayInterface extends ResourceInterface, PeriodAwareInterface
{

}
