<?php

declare(strict_types=1);

namespace Codea\Responder\File\FileExtension;

use Codea\Responder\File\FileExtension;

enum ArchiveFileExtension: string implements FileExtension
{
    case GZ = 'gz';
    case RAR = 'rar';
    case TAR = 'tar';
    case ZIP = 'zip';
    case X7Z = '7z';

    public function value(): string
    {
        return sprintf('.%s', trim($this->value, '.'));
    }
}
