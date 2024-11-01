<?php

declare(strict_types=1);

namespace PSR7Validator;

use Psr\Http\Message\MessageInterface;
use PSR7Validator\Exception\ValidationExceptionInterface;

interface MessageValidator
{
    /**
     * @throws ValidationExceptionInterface
     */
    public function validate(MessageInterface $message): void;
}
