<?php

namespace Droath\RoboDockerSync\Task\DockerSyncDaemon;

use Droath\RoboDockerSync\Task\CommandOptionBasicTrait;
use Droath\RoboDockerSync\Task\CommandOptionLogTrait;

/**
 * Define docker sync daemon stop.
 */
class Stop extends Base
{
    use CommandOptionLogTrait;
    use CommandOptionBasicTrait;

    /**
     * {@inheritdoc}
     */
    const COMMAND_ACTION = 'stop';
}
