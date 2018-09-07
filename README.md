Built from this project: https://github.com/markoshust/docker-magento

## Setup
1. Clone this repo.
1. Run `./bin/start`, to start Docker containers.
1. Run `cp .env.example .env`, then edit `.env` with you preferred settings.
1. Run `./bin/setup`, to setup Magento.
1. Frontend: http://[your-base-url]:[your-web-port], PHPmyAdmin: http://[your-base-url]:[your-phpmyadmin-port]/
1. Grab admin URL with `grep frontName src/app/etc/env.php`.
  * Admin user:  `magento2`
  * Admin password:  `magento2pass`



## Custom CLI Commands

- `./bin/bash`: Drop into the bash prompt of your Docker container. The `phpfpm` container should be mainly used to access the filesystem within Docker.
- `./bin/dev-urn-catalog-generate`: Generate URN's for PHPStorm and remap paths to local host. Restart PHPStorm after running this command.
- `./bin/cli`: Run any CLI command without going into the bash prompt. Ex. `./bin/cli ls`
- `./bin/composer`: Run the composer binary. Ex. `./bin/composer install`
- `./bin/download`: Download a version of Magento to the `src` directory. Ex. `./bin/download 2.2.2`
- `./bin/fixperms`: This will fix filesystem ownerships and permissions within Docker.
- `./bin/initloopback`: Setup your ip loopback for proper Docker ip resolution.
- `./bin/magento`: Run the Magento CLI. Ex: `./bin/magento cache:flush`
- `./bin/cliroot`: Run any CLI command as root without going into the bash prompt. Ex `./bin/cliroot apt-get install nano`
- `./bin/bashroot`: Drop into the bash prompt of `phpfpm` as root.
- `./bin/setup`: Run the Magento setup process to install Magento from the source code.
- `./bin/start`: Start the Docker Compose process and your app. Ctrl+C to stop the process.
- `./bin/xdebug`: Disable or enable Xdebug. Ex. `./bin/xdebug enable`

## Misc Info

### Database

- The hostname of each service is the name of the service within the `docker-compose.yml` file. So for example, MySQL's hostname is `db` (not `localhost`) when accessing it from a Docker container.

### Composer Authentication

Please first setup Magento Marketplace authentication (details in the [DevDocs](http://devdocs.magento.com/guides/v2.0/install-gde/prereq/connect-auth.html)).

Place your auth token at `~/.composer/auth.json` with the following contents, like so:

```
{
    "http-basic": {
        "repo.magento.com": {
            "username": "MAGENTO_PUBLIC_KEY",
            "password": "MAGENTO_PRIVATE_KEY"
        }
    }
}
```
