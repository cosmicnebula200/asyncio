<?php
declare(strict_types=1);

namespace adeynes\asyncio;

abstract class DirectoryOperationTask extends AsyncIOTask
{

    /** @var string */
    protected $directory;

    public function __construct(string $directory)
    {
        $this->directory = $directory;
    }

}