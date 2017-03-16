<?php

namespace Droath\RoboDockerSync\Task\DockerSync;

use Droath\RoboDockerSync\Task\Command;

/**
 * Define docker sync base class.
 */
abstract class Base extends Command
{
    /**
     * Define the default executable.
     */
    const DEFAULT_EXECUTABLE = 'docker-sync';
}
