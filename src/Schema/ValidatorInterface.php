<?php

declare(strict_types=1);

namespace PSR7Validator\Schema;

interface ValidatorInterface
{
    public function validate(object $data): array;
}
