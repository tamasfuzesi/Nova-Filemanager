<?php

namespace Infinety\Filemanager\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Filesystem\FilesystemAdapter;

class FileRemoved
{
    use SerializesModels;

    /**
     * @var mixed
     */
    public $storage;

    /**
     * @var mixed
     */
    public $filePath;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(FilesystemAdapter $storage, string $filePath)
    {
        $this->storage = $storage;
        $this->filePath = $filePath;
    }
}
