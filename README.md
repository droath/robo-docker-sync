# Robo Docker Sync

Run docker sync commands from the Robo task runner.


### Prerequisites

Install `docker-sync` gem using the [installation guide](https://github.com/EugenMayer/docker-sync/wiki/1.-Installation) on the GitHub project wiki.

### Getting Started

First, you'll need to download the robo docker sync library using composer:

```bash
composer require droath/robo-docker-sync:~0.0.1
```

### Example

```php
<?php

    // Run docker-sync in background.
    $this->taskDockerSyncStart()
        ->daemon()
        ->run();

     // Stop docker-sync from running.
    $this->taskDockerSyncStop()
        ->run();
```

### Support

The following commands have been implemented:

- docker-sync
- docker-sync-stack
- docker-sync-daemon
