<?php

declare(strict_types=1);

namespace PSR7Validator;

use Psr\Http\Message\RequestInterface;
use PSR7Validator\Exception\ValidationExceptionInterface;

final readonly class RequestValidator
{
    public function __construct(
        private MessageValidator $validator,
    ) {
    }

    /**
     * @throws ValidationExceptionInterface
     */
    public function validate(RequestInterface $request): void
    {
        $this->validator->validate($request);
    }
}
