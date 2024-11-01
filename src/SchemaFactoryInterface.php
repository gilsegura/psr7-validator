<?php

declare(strict_types=1);

namespace PSR7Validator;

interface SchemaFactoryInterface
{
    public function schema(): object;
}
