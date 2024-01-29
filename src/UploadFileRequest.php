<?php

namespace Shrd\Laravel\Files\Upload\Contracts;

use DateTimeInterface;

interface UploadFileRequest
{
    public function getUri(): string;

    public function getContentType(): string;

    public function getStartsAt(): DateTimeInterface;

    public function getExpiresAt(): DateTimeInterface;
}
