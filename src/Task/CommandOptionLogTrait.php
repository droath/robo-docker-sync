<?php

namespace Droath\RoboDockerSync\Task;

/**
 * Define docker sync log command options.
 */
trait CommandOptionLogTrait
{
    /**
     * Don't log OUPUT to file on Daemon.
     */
    public function noLogd()
    {
        $this->option('no-logd');

        return $this;
    }
}
