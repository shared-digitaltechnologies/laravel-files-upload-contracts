<?php

namespace Shrd\Laravel\Files\Upload\Contracts;


use DateTimeInterface;

interface UploadFileRequestGenerator
{
    public function createUploadFileRequest(
        DateTimeInterface $startsAt,
        DateTimeInterface $expiresAt,
        ?string $contentType = null
    ): UploadFileRequest;
}
