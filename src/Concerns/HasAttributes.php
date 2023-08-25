<?php

declare(strict_types=1);

namespace Treblle\ErrorCodes\Concerns;

use BackedEnum;
use ReflectionClassConstant;
use Treblle\ErrorCodes\Attributes\Description;

/**
 * @mixin BackedEnum
 */
trait HasAttributes
{
    public function getDescription(): Description
    {
        return (new ReflectionClassConstant(
            class: $this,
            constant: $this->name,
        ))->getAttributes(
            name: Description::class,
        )[0]->newInstance();
    }
}
