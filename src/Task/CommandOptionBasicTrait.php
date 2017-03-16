<?php

namespace Droath\RoboDockerSync\Task;

/**
 * Define docker sync basic command options.
 */
trait CommandOptionBasicTrait
{
    /**
     * App name in PID and OUTPUT file name for Daemon.
     */
    public function appName($name = 'daemon')
    {
        $this->option('app-name', $name);

        return $this;
    }

    /**
     * Path to PID and OUTPUT file Directory.
     */
    public function dir($path = './.docker-sync')
    {
        $this->option('dir', $path);

        return $this;
    }
}
