<?php

namespace App\Jobs;

use App\Meme\Client;
use Pusher;

class MemeJob
{
    /**
     * The pusher channel name.
     *
     * @var string
     */
    const CHANNEL = 'lol';

    /**
     * The task id.
     *
     * @var string
     */
    protected $task;

    /**
     * The job text.
     *
     * @var string
     */
    protected $text;

    /**
     * Create a new meme job instance.
     *
     * @param string $task
     * @param string $text
     *
     * @return void
     */
    public function __construct(string $task, string $text)
    {
        $this->task = $task;
        $this->text = $text;
    }

    /**
     * Handle the meme job.
     *
     * @param \App\Meme\Client $client
     * @param \Pusher          $pusher
     *
     * @return void
     */
    public function handle(Client $client, Pusher $pusher)
    {
        $images = [];

        foreach ([random_int(1, 70), random_int(1, 70), random_int(1, 70)] as $id) {
            $images[] = $this->client->generate($id, $this->text);
        }

        $this->pusher($this->task, self::LOL, ['ids' => $images]);
    }
}
