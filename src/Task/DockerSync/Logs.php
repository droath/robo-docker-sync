<?php

namespace Droath\RoboDockerSync\Task\DockerSync;

use Droath\RoboDockerSync\Task\CommandOptionBasicTrait;
use Droath\RoboDockerSync\Task\CommandOptionLogTrait;

/**
 * Define docker sync logs.
 */
class Logs extends Base
{
    use CommandOptionLogTrait;
    use CommandOptionBasicTrait;

    /**
     * {@inheritdoc}
     */
    const COMMAND_ACTION = 'logs';

    /**
     * Specify number of lines to tail.
     */
    public function lines($amount = 100)
    {
        $this->option('lines', $amount);

        return $this;
    }

    /**
     * Specify if the logs should be streamed.
     */
    public function follow()
    {
        $this->option('follow');

        return $this;
    }
}
