<?php

declare(strict_types=1);

namespace Treblle\ErrorCodes\Attributes;

use Attribute;

#[Attribute]
final readonly class Description
{
    public function __construct(
        public string $title,
        public string $code,
        public string $link,
        public int $status,
    ) {
    }
}
