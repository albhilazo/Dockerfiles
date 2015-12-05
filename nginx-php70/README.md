# Nginx + PHP 7.0

Images used:
- [nginx:latest](https://hub.docker.com/_/nginx)
- [php:7.0-fpm](https://hub.docker.com/_/php)


## Usage

```shell
$ docker-compose up -d
```

Virtual host root points to `src/public`, but the whole `src` folder is mounted.

Default virtual host and port:

```
http://php.dev:8080
```


## Logs

`error.log` and `access.log` linked to container's standard output.

You can check them using:

```shell
$ docker logs <container-name>
```