<?php

namespace Droath\RoboDockerSync\Task\DockerSyncDaemon;

use Droath\RoboDockerSync\Task\Command;

/**
 * Define docker sync daemon base class.
 */
abstract class Base extends Command
{
    /**
     * Define the default executable.
     */
    const DEFAULT_EXECUTABLE = 'docker-sync-daemon';
}
