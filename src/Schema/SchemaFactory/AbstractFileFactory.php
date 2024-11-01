<?php

declare(strict_types=1);

namespace PSR7Validator\Schema\SchemaFactory;

use PSR7Validator\Assert\Assertion;
use PSR7Validator\SchemaFactoryInterface;

abstract readonly class AbstractFileFactory implements SchemaFactoryInterface
{
    protected string $filename;

    public function __construct(
        string $filename,
    ) {
        Assertion::file($filename);

        $this->filename = $filename;
    }
}
