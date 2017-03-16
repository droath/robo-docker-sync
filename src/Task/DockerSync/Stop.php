<?php

namespace Droath\RoboDockerSync\Task\DockerSync;

use Droath\RoboDockerSync\Task\CommandOptionBasicTrait;

/**
 * Define docker sync stop.
 */
class Stop extends Base
{
    use CommandOptionBasicTrait;

    /**
     * {@inheritdoc}
     */
    const COMMAND_ACTION = 'stop';
}
