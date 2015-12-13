# Nginx + PHP 5.6 + MySQL

Images used:
- [nginx:latest](https://hub.docker.com/_/nginx)
- [php:5.6-fpm](https://hub.docker.com/_/php)
- [mysql:latest](https://hub.docker.com/_/mysql)


## Usage

```shell
$ docker-compose up -d
```

Virtual host root points to `src/public`, but the whole `src` folder is mounted.

Default virtual host and port:

```
http://php.dev:8080
```

Stop containers:

```shell
$ docker-compose stop
```

Stop and remove:

```shell
$ docker-compose stop && docker-compose rm -v
```


## Database

All `.sql` and `.sh` files in `db` folder will be executed at start.

The script `import.sh` in that folder imports all dump files in `db/data` to a specific database.
You will need to edit the `dbname` variable in the script with your database name.

Default MySQL configuration uses `root` user without password and port `3306`.
To open a connection using PHP you will need to point to `db` hostname.
Example using PDO:

```php
$db = new \PDO('mysql:dbname=mydb;host=db;port=3306', 'root', '');
```


## Logs

`error.log` and `access.log` linked to container's standard output.

You can check them using:

```shell
$ docker logs <container-name>
```