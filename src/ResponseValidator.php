<?php

declare(strict_types=1);

namespace PSR7Validator;

use Psr\Http\Message\ResponseInterface;
use PSR7Validator\Exception\ValidationExceptionInterface;

final readonly class ResponseValidator
{
    public function __construct(
        private MessageValidator $validator,
    ) {
    }

    /**
     * @throws ValidationExceptionInterface
     */
    public function validate(ResponseInterface $response): void
    {
        $this->validator->validate($response);
    }
}
