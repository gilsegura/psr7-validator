<?php

declare(strict_types=1);

namespace PSR7Validator\Assert;

use Assert\Assertion as BaseAssertion;
use PSR7Validator\Exception\AssertionFailedException;

final class Assertion extends BaseAssertion
{
    protected static $exceptionClass = AssertionFailedException::class;
}
