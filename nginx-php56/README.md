# Nginx + PHP 5.6

Images used:
- [nginx:latest](https://hub.docker.com/_/nginx)
- [php:5.6-fpm](https://hub.docker.com/_/php)


## Usage

```shell
$ docker-compose up -d
```

Virtual host root points to `src/public`, but the whole `src` folder is mounted.

Default virtual host and port:
```
http://php.dev:8080
```