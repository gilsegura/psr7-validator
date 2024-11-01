<?php

declare(strict_types=1);

namespace PSR7Validator;

use Psr\Http\Message\MessageInterface;

final readonly class ValidatorChain implements MessageValidator
{
    /** @var MessageValidator[] */
    private array $validators;

    public function __construct(
        MessageValidator ...$validators,
    ) {
        $this->validators = $validators;
    }

    #[\Override]
    public function validate(MessageInterface $message): void
    {
        foreach ($this->validators as $validator) {
            $validator->validate($message);
        }
    }
}
