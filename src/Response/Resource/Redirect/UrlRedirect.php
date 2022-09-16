<?php

declare(strict_types=1);

namespace Codea\SmartReply\Response\Resource\Redirect;

use Assert\Assertion as Assert;
use Codea\SmartReply\Http\StatusCode;
use Codea\SmartReply\Response\Resource\Redirect;

final class UrlRedirect extends Redirect
{
    public function __construct(
        public readonly string $url,
        StatusCode $statusCode = StatusCode::FOUND
    ) {
        Assert::url($url);

        parent::__construct($statusCode);
    }
}
