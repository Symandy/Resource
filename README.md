# Symandy Resource Components

This package is a set of reusable components and contains interfaces and traits that could be used in any PHP project. 
It was mainly designed to be used for [Symfony](https://github.com/symfony/symfony) entities.

This package design was strongly inspired by [Sylius Resource Bundle](https://github.com/Sylius/SyliusResourceBundle)


## Installation

```shell
$ composer require symandy/resource
```


## Components
The components are stored in `Symandy\Component\Resource\Model` namespace.

Each interface have a corresponding traits and contains one or several attributes :

- `ResourceInterface` / `ResourceTrait` => int `$id` + getter.
- `TimestampableInterface` / `TimestampableTrait` => datetime `$createdAt`, `$updatedAt`, getters + setters and 
`create()` and `update()` functions which set the current datetime to the corresponding attribute.
- `ArchivableInterface` / `ArchivableTrait` => datetime `$archivedAt`, getter and setter and `archive()` function 
(set `$archivedAt` to current datetime) and `restore()` function (set  `$archivedAt` to `null`).
- `ToggleableInterface` / `ToggleableTrait` => boolean `$enabled`, getter and setter with `enable()`, `disable()` 
functions.
- `CodeAwareInterface` / `CodeAwareTrait` => string `$code` + getter and setter.
- `SlugAwareInterface` / `SlugAwareTrait` => string `$slug` + getter and setter.


## Usage

### Resource creation

The best way to use these components is to create a class and an interface for each resource.

It is also possible to create only the class and add the corresponding traits.

#### Example  

```php
<?php

namespace App;

use Symandy\Component\Resource\Model\ResourceInterface;
use Symandy\Component\Resource\Model\TimestampableInterface;
use Symandy\Component\Resource\Model\ToggleableInterface;

interface PostInterface extends ResourceInterface, ToggleableInterface, TimestampableInterface
{
    # Other methods
}

```

```php
<?php

namespace App;

use Symandy\Component\Resource\Model\ResourceTrait;
use Symandy\Component\Resource\Model\TimestampableTrait;
use Symandy\Component\Resource\Model\ToggleableTrait;

class Post implements PostInterface
{
    use ResourceTrait, ToggleableTrait, TimestampableTrait;

    # Other attributes with getters / setters
}

```

### Use the resource in your app


```php
<?php
use App\Post;

# ...
$post = new Post();

$id = $post->getId();
$post->enable();
$post->create();
# ...
```
