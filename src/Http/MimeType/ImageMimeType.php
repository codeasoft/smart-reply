<?php

declare(strict_types=1);

namespace Codea\Responder\Http\MimeType;

use Codea\Responder\Http\MimeType;

enum ImageMimeType: string implements MimeType
{
    case APNG = 'image/apng';
    case AVIF = 'image/avif';
    case GIF = 'image/gif';
    case JPG = 'image/jpeg';
    case PNG = 'image/png';
    case SVG = 'image/svg+xml';
    case WEBP = 'image/webp';

    public function value(): string
    {
        return $this->value;
    }
}
