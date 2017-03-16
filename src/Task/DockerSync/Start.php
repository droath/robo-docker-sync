<?php

namespace Droath\RoboDockerSync\Task\DockerSync;

use Droath\RoboDockerSync\Task\CommandOptionBasicTrait;
use Droath\RoboDockerSync\Task\CommandOptionLogTrait;

/**
 * Define docker sync start.
 */
class Start extends Base
{
    use CommandOptionLogTrait;
    use CommandOptionBasicTrait;

    /**
     * {@inheritdoc}
     */
    const COMMAND_ACTION = 'start';

    /**
     * Run in the background.
     */
    public function daemon()
    {
        $this->option('daemon');

        return $this;
    }
}
