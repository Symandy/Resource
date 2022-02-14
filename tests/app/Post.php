<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\app;

use Symandy\Component\Resource\Model\ArchivableTrait;
use Symandy\Component\Resource\Model\CodeAwareTrait;
use Symandy\Component\Resource\Model\ResourceTrait;
use Symandy\Component\Resource\Model\SlugAwareTrait;
use Symandy\Component\Resource\Model\TimestampableTrait;
use Symandy\Component\Resource\Model\ToggleableTrait;
use Symandy\Component\Resource\Model\VersionedTrait;

class Post implements PostInterface
{

    use ResourceTrait;
    use CodeAwareTrait;
    use SlugAwareTrait;
    use ToggleableTrait;
    use VersionedTrait;
    use TimestampableTrait;
    use ArchivableTrait;

}
