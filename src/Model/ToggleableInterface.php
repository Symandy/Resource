<?php

declare(strict_types=1);

namespace Symandy\Component\Resource\Model;

interface ToggleableInterface
{

    public function isEnabled(): bool;

    public function setEnabled(bool $enabled): void;

    public function enable(): void;

    public function disable(): void;

}
