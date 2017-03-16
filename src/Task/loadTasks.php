<?php

namespace Droath\RoboDockerSync\Task;

/**
 * Load docker sync command tasks.
 */
trait loadTasks
{
    /**
     * Docker-sync "start" task.
     */
    protected function taskDockerSyncStart($pathToDockerSync = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSync\Start::class, $pathToDockerSync);
    }

    /**
     * Docker-sync "stop" task.
     */
    protected function taskDockerSyncStop($pathToDockerSync = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSync\Stop::class, $pathToDockerSync);
    }

    /**
     * Docker-sync "clean" task.
     */
    protected function taskDockerSyncClean($pathToDockerSync = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSync\Clean::class, $pathToDockerSync);
    }

    /**
     * Docker-sync "logs" task.
     */
    protected function taskDockerSyncLogs($pathToDockerSync = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSync\Logs::class, $pathToDockerSync);
    }

    /**
     * Docker-sync "sync" task.
     */
    protected function taskDockerSyncSync($pathToDockerSync = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSync\Sync::class, $pathToDockerSync);
    }

    /**
     * Docker-sync-daemon "clean" task.
     */
    protected function taskDockerSyncDaemonClean($pathToDockerSyncDaemon = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncDaemon\Clean::class, $pathToDockerSyncDaemon);
    }

    /**
     * Docker-sync-daemon "logs" task.
     */
    protected function taskDockerSyncDaemonLogs($pathToDockerSyncDaemon = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncDaemon\Logs::class, $pathToDockerSyncDaemon);
    }

    /**
     * Docker-sync-daemon "start" task.
     */
    protected function taskDockerSyncDaemonStart($pathToDockerSyncDaemon = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncDaemon\Start::class, $pathToDockerSyncDaemon);
    }

    /**
     * Docker-sync-daemon "stop" task.
     */
    protected function taskDockerSyncDaemonStop($pathToDockerSyncDaemon = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncDaemon\Stop::class, $pathToDockerSyncDaemon);
    }

    /**
     * Docker-sync-stack "clean" task.
     */
    protected function taskDockerSyncStackClean($pathToDockerSyncStack = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncStack\Clean::class, $pathToDockerSyncStack);
    }

    /**
     * Docker-sync-stack "start" task.
     */
    protected function taskDockerSyncStackStart($pathToDockerSyncStack = null)
    {
        return $this->task(\Droath\RoboDockerSync\Task\DockerSyncStack\Start::class, $pathToDockerSyncStack);
    }
}
