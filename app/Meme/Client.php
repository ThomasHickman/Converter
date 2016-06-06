<?php

namespace App\Zamzar;

use GuzzleHttp\Client;

class Client
{
    /**
     * The input storage path.
     *
     * @var string
     */
    protected $storage;

    /**
     * The result storage path.
     *
     * @var string
     */
    protected $public;

    /**
     * Create a new client instance.
     *
     * @param string $generator
     * @param string $storage
     * @param string $public
     *
     * @return void
     */
    public function __construct($generator, $storage, $public)
    {
        $this->generator = $generator;
        $this->storage = $storage;
        $this->public = $public;
    }

    /**
     * Start a new file conversion.
     *
     * @param int    $image
     * @param string $text
     *
     * @return string
     */
    public function generate(int $image, string $text)
    {
        $name = str_random(16);

        $process = new Process("{$generator} {$this->storage}\{$image} {$this->storage}\{$name} \"{$text}\"");

        $process->run();
    }
}
