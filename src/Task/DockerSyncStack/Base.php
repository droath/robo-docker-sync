<?php

namespace Droath\RoboDockerSync\Task\DockerSyncStack;

use Droath\RoboDockerSync\Task\Command;

/**
 * Define docker sync stack base class.
 */
abstract class Base extends Command
{
    /**
     * Define the default executable.
     */
    const DEFAULT_EXECUTABLE = 'docker-sync-stack';
}
