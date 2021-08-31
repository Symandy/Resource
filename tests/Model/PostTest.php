<?php

declare(strict_types=1);

namespace Symandy\Tests\Component\Resource\Model;

use JetBrains\PhpStorm\Pure;
use PHPUnit\Framework\TestCase;
use Symandy\Component\Resource\Model\ArchivableInterface;
use Symandy\Component\Resource\Model\CodeAwareInterface;
use Symandy\Component\Resource\Model\ResourceInterface;
use Symandy\Component\Resource\Model\SlugAwareInterface;
use Symandy\Component\Resource\Model\TimestampableInterface;
use Symandy\Component\Resource\Model\ToggleableInterface;
use Symandy\Tests\Component\Resource\app\Post;
use Symandy\Tests\Component\Resource\app\PostInterface;

class PostTest extends TestCase
{

    public function test_post_instances(): void
    {
        $post = new Post();

        self::assertInstanceOf(ResourceInterface::class, $post);
        self::assertInstanceOf(CodeAwareInterface::class, $post);
        self::assertInstanceOf(SlugAwareInterface::class, $post);
        self::assertInstanceOf(ToggleableInterface::class, $post);
        self::assertInstanceOf(TimestampableInterface::class, $post);
        self::assertInstanceOf(ArchivableInterface::class, $post);
        self::assertInstanceOf(PostInterface::class, $post);
    }

    public function test_post_have_values(): void
    {
        $post = new Post();
        $post->setCode('CODE');
        $post->setSlug('one-basic-slug');
        $post->create();

        self::assertSame('CODE', $post->getCode());
        self::assertSame('one-basic-slug', $post->getSlug());

        self::assertFalse($post->isEnabled());
        $post->enable();
        self::assertTrue($post->isEnabled());

        self::assertNotNull($post->getCreatedAt());
        self::assertNotNull($post->getUpdatedAt());

        $updatedAt = $post->getUpdatedAt();
        $createdAt = $post->getCreatedAt();
        $post->update();
        self::assertNotSame($updatedAt, $post->getUpdatedAt());
        self::assertSame($createdAt, $post->getCreatedAt());

        self::assertNull($post->getArchivedAt());
        $post->archive();
        self::assertNotNull($post->getArchivedAt());
    }

}
