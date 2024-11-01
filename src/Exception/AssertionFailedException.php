<?php

declare(strict_types=1);

namespace PSR7Validator\Exception;

final class AssertionFailedException extends \InvalidArgumentException
{
    public function __construct(
        string $message,
        int $code,
        public readonly ?string $propertyPath = null,
        public readonly mixed $value = null,
        public readonly array $constraints = [],
    ) {
        parent::__construct($message, $code);
    }
}
