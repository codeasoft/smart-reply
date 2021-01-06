<?php

declare(strict_types=1);

namespace Tuzex\Responder\Exception;

use RuntimeException;
use Tuzex\Responder\Result;

final class UnknownResultException extends RuntimeException
{
    public function __construct(Result $result)
    {
        parent::__construct(sprintf('Result "%s" not have any transformer.', $result::class));
    }
}
