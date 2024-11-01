<?php

declare(strict_types=1);

namespace PSR7Validator\Schema;

use JsonSchema\Validator;

final readonly class SchemaValidator implements ValidatorInterface
{
    public function __construct(
        private object $schema,
    ) {
    }

    #[\Override]
    public function validate(object $data): array
    {
        $validator = new Validator();

        $validator->validate($data, $this->schema);

        return $validator->getErrors();
    }
}
