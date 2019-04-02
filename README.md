Docker Laravel
==============
This will get you up and running with a frozen laravel/postgres/nginx install ready for production. 

|            |        |
|------------|--------|
| PHP        | 7.2.16 |
| Laravel    | 5.8.4  |
| Postgres   | 11.1   |
| Nginx      | current (1.15.9) |
|            |        |

# The Sell
Containers are small and fast. They mirror staging and production. They start up in seconds and use few resources. Once setup your workflow will look like this:
```sh
# run you package managers locally, e.g. in your project directory
composer require psr/log
yarn add underscore
# bring up the containers (postgres, nginx, laravel)
docker-compose up
# shell into the laravel container for php artisan commands
docker-compose exec clevyr-laravel fish
root@63697056d5c9:/application  php artisan migrate
root@63697056d5c9:/application  php artisan make:controller MyController
root@63697056d5c9:/application  php artisan tinker
```
Also, there will be pie.

# Setting up Laravel-Docker for a New Project
The laravel-docker repo will try to stay current, with current versions. When you use it as a template for a new project, you decouple and freeze the package versions.
```sh
git clone git@github.com:clevyr/laravel-docker.git MY_PROJECT_NAME
cd MY_PROJECT_NAME
cp .env.example .env
openssl rand -base64 32 # copy output to APP_KEY in .env, e.g. APP_KEY=base64:Kt4pEpKCT8h2n2WB+qDjk+A8oKfiULmSgioZmr39DbA=
rm -rf .git 
composer install
# Now the project is yours
```
Finally, You need to replace all instances of `CONTACTSPROJECT` in `/docker-compose.yml` with your project name. 

TODO: add init script to do all of the above.

You'll want to setup git for your new project:
```sh
git init
git add .
git commit -m "first commit"
#etc
```


# Up and Running

## Pre-requisites
### Install Docker
[Download docker](https://www.docker.com/products/docker-desktop) and follow instructions for your OS. Run docker and wait for it to start (icon in the taskbar). You don't need to create an account if you don't want.
### Install Composer
[Composer](https://getcomposer.org/) is the php package manager. You will be running composer on your local machine (read: not in a docker).
```sh
brew install composer
```
### Clone This Repo
```
git clone git@github.com:clevyr/laravel-docker.git
```

## Start the Containers with docker-compose
cd into the project directory and start docker
```sh
cd laravel-docker
docker-compose up --detach  # starting without --detach will stream log output from the containers
```
It will take a minute to build the images the first time.
After it finished `docker ps` will show you the running containers.

## .env
`.env.example` is configured to connect to postgres. Copy it to `.env`
```sh
cp .env.example .env
```

GJ! You're all setup.


# Usage

```sh
docker-compose exec clevyr-laravel fish
``` 
This will drop you into the running docker. From here you can `php artisan ...` to your hearts content.

## View the Running Webpage
http://localhost:8000 is the default. This is configurable in `docker-compose.yml`

## View the Database
You can use [PSequel](link) to view your tables with the following settings (config in `docker-compose.yml`).
```
POSTGRES_USER=generic_db_user
POSTGRES_PASSWORD=stronk-password
POSTGRES_DB=laravel
```

## Adminer
Adminer is also running. You can point your browser to http://localhost:8080 and use the following default credentials.
```
system: PostgreSQL
server: postgres
Username: generic_db_user
password: stronk-password
database: laravel
```

# Docker-compose cheatsheet #

**Note:** you need to cd first to where your docker-compose.yml file lives.

  * Start containers in the background: `docker-compose up -d`
  * Start containers on the foreground: `docker-compose up`. You will see a stream of logs for every container running.
  * Stop containers: `docker-compose stop`
  * Kill containers: `docker-compose kill`
  * View container logs: `docker-compose logs`
  * Execute command inside of container: `docker-compose exec SERVICE_NAME COMMAND` where `COMMAND` is whatever you want to run. Examples:
        * Shell into the PHP container, `docker-compose exec clevyr-laravel bash`
        * Run symfony console, `docker-compose exec clevyr-laravel bin/console`
        * Open a mysql shell, `docker-compose exec mysql mysql -uroot -pCHOSEN_ROOT_PASSWORD`
