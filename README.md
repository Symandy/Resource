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

Each interface have a corresponding trait and contains one or several attributes :

| Name (trait + interface)                           | Property    | Methods                                                                                |
|----------------------------------------------------|-------------|----------------------------------------------------------------------------------------|
| Resource                                           | $id         | getId()                                                                                |
| Creatable                                          | $createdAt  | getCreatedAt() <br/> setCreatedAt(?\DateTimeInterface)<br/> create()                   |
| Updatable                                          | $updatedAt  | getUpdatedAt() <br/> setUpdatedAt(?\DateTimeInterface)<br/> update()                   |
| Timestampable<br/> (extends Creatable & Updatable) | -           | -                                                                                      |
| Archivable                                         | $archivedAt | getArchivedAt() <br/> setArchivedAt(?\DateTimeInterface)<br/> archive()<br/> restore() |
| Toggleable                                         | $enabled    | isEnabled() <br/> setEnabled(bool)<br/> enable()<br/> disable()                        |
| CodeAware                                          | $code       | getCode() <br/> setCode(?string)                                                       |
| SlugAware                                          | $slug       | getSlug() <br/> setSlug(?string)                                                       |
| Versioned                                          | $version    | getVersion() <br/> setVersion(?int)                                                    |
| Startable                                          | $startsAt   | getStartsAt() <br/> setStartsAt(?\DateTimeInterface)                                   |
| Endable                                            | $endsAt     | getEndsAt() <br/> setEndsAt(?\DateTimeInterface)                                       |
| PeriodAware<br/>(extends Startable & Endable)      | -           | -                                                                                      |


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
