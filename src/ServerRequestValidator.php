<?php

declare(strict_types=1);

namespace PSR7Validator;

use Psr\Http\Message\ServerRequestInterface;
use PSR7Validator\Exception\ValidationExceptionInterface;

final readonly class ServerRequestValidator
{
    public function __construct(
        private MessageValidator $validator,
    ) {
    }

    /**
     * @throws ValidationExceptionInterface
     */
    public function validate(ServerRequestInterface $request): void
    {
        $this->validator->validate($request);
    }
}
