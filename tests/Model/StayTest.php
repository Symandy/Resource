<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\Model;

use DateTime;
use PHPUnit\Framework\TestCase;
use Symandy\Component\Resource\Model\EndableInterface;
use Symandy\Component\Resource\Model\PeriodAwareInterface;
use Symandy\Component\Resource\Model\ResourceInterface;
use Symandy\Component\Resource\Model\StartableInterface;
use Symandy\Tests\Component\Resource\app\Stay;

final class StayTest extends TestCase
{

    public function test_stay_instances(): void
    {
        $stay = new Stay();

        self::assertInstanceOf(ResourceInterface::class, $stay);
        self::assertInstanceOf(StartableInterface::class, $stay);
        self::assertInstanceOf(EndableInterface::class, $stay);
        self::assertInstanceOf(PeriodAwareInterface::class, $stay);
    }

    public function test_stay_has_values(): void
    {
        $stay = new Stay();

        self::assertNull($stay->getId());
        self::assertNull($stay->getStartsAt());
        self::assertNull($stay->getEndsAt());

        $now = new DateTime();

        $stay->setStartsAt($now);
        self::assertSame($now, $stay->getStartsAt());

        $endsAt = (new DateTime())->modify('+2 weeks');
        $stay->setEndsAt($endsAt);
        self::assertSame($endsAt, $stay->getEndsAt());
    }

}
