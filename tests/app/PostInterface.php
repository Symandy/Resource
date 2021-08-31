<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\app;

use Symandy\Component\Resource\Model\ArchivableInterface;
use Symandy\Component\Resource\Model\CodeAwareInterface;
use Symandy\Component\Resource\Model\ResourceInterface;
use Symandy\Component\Resource\Model\SlugAwareInterface;
use Symandy\Component\Resource\Model\TimestampableInterface;
use Symandy\Component\Resource\Model\ToggleableInterface;

interface PostInterface extends
    ResourceInterface,
    CodeAwareInterface,
    SlugAwareInterface,
    ToggleableInterface,
    TimestampableInterface,
    ArchivableInterface
{

}
