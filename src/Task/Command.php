<?php

namespace Droath\RoboDockerSync\Task;

use Robo\Common\ExecOneCommand;
use Robo\Exception\TaskException;
use Robo\Task\BaseTask;

/**
 * Docker sync command base class.
 */
abstract class Command extends BaseTask
{
    use ExecOneCommand;

    /**
     * Command action.
     *
     * @var string
     */
    const COMMAND_ACTION = '';

    /**
     * Default executable path.
     *
     * @var string
     */
    const DEFAULT_EXECUTABLE = '';

    /**
     * Executable.
     *
     * @var string
     */
    protected $executable;

    /**
     * Docker sync constructor.
     *
     * @param string $pathToDockerSync
     *   A custom path to the docker-sync executable binary.
     */
    public function __construct($pathToExecutable = null)
    {
        $defaultExecutable = static::DEFAULT_EXECUTABLE;

        $this->executable = isset($pathToExecutable)
            ? $pathToExecutable
            : $this->findExecutablePhar($defaultExecutable);

        if (!$this->executable) {
            throw new TaskException(
                __CLASS__,
                sprintf('Unable to find the %s executable.', $defaultExecutable)
            );
        }
    }

    /**
     * Path of the docker_sync config.
     */
    public function config($path)
    {
        $this->option('config', $path);

        return $this;
    }

    /**
     * Only sync configuration will be references.
     */
    public function syncName($name)
    {
        $this->option('sync-name', $name);

        return $this;
    }

    /**
     * Print version of docker sync commands.
     */
    public function version()
    {
        $this->option('version');

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $command = $this->getCommand();

        $this->printTaskInfo(
            'Running Docker-Sync: {command}',
            ['command' => $command]
        );

        return $this->executeCommand($command);
    }

    /**
     * Get docker-sync command.
     *
     * @return string
     */
    protected function getCommand()
    {
        $action = static::COMMAND_ACTION;

        return "{$this->executable} {$action} {$this->arguments}";
    }
}
