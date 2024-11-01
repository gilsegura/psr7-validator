<?php

declare(strict_types=1);

namespace PSR7Validator\Schema\SchemaFactory;

use JsonSchema\SchemaStorage;

final readonly class JsonFileFactory extends AbstractFileFactory
{
    #[\Override]
    public function schema(): object
    {
        $storage = new SchemaStorage();

        return $storage->getSchema(sprintf('file://%s', realpath($this->filename)));
    }
}
