<?php

declare(strict_types=1);

namespace PSR7Validator\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use PSR7Validator\ResponseValidator;
use PSR7Validator\ServerRequestValidator;

final readonly class ValidationMiddleware implements MiddlewareInterface
{
    public function __construct(
        private ServerRequestValidator $requestValidator,
        private ResponseValidator $responseValidator,
    ) {
    }

    #[\Override]
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->requestValidator->validate($request);

        $response = $handler->handle($request);

        $this->responseValidator->validate($response);

        return $response;
    }
}
