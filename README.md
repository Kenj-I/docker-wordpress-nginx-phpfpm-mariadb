# description

wordpressの開発環境

## usage

`build`ディレクトリの中に`envfile`
`docker-compose.yml`ファイルと同じディレクトリ内に`.env`を作成

```
// envfile

MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=wordpress
MYSQL_USER=development
MYSQL_PASSWORD=development

```


```
// .env

VIRTUAL_HOST=wordpress-test.local
HOST_DB_PORT=63306

```

## virtualhost

nginx-proxyを使用する場合

```
//docker-compose.yml

version: '3'

services:
    nginx:
        build: ./build
        networks:
            - wordpress_network
            - external_nginx_proxy
        depends_on:
            - wordpress
        volumes:
            - ./wordpress:/var/www/html
        environment:
            - VIRTUAL_HOST=$VIRTUAL_HOST

    wordpress:
        image: wordpress:4.9.4-php7.1-fpm
        env_file: ./build/envfile
        networks:
            - wordpress_network
        depends_on:
            - db
        volumes:
            - ./wordpress:/var/www/html

    db:
        image: mariadb:latest
        env_file: ./build/envfile
        command: mysqld --character-set-server=utf8 --collation-server=utf8_unicode_ci
        networks:
            - wordpress_network
        ports:
            - "$HOST_DB_PORT:3306"
        volumes:
            - ./data:/var/lib/mysql

# volumes:
#     wordpress:
#         driver_opts:
#             type: none
#             device: ./wordpress #NOTE needs full path (~ and ./ not work)
#             o: bind

#settin virtualhost
networks:
    wordpress_network:
    external_nginx_proxy:
        external:
            name: proxy_net
```

使用しない場合

```
//docker-compose.yml

version: '3'

services:
    nginx:
        build: ./build
		ports:
			- "80:80"
        networks:
            - wordpress_network
#            - external_nginx_proxy
        depends_on:
            - wordpress
        volumes:
            - ./wordpress:/var/www/html
        environment:
            - VIRTUAL_HOST=$VIRTUAL_HOST

    wordpress:
        image: wordpress:4.9.4-php7.1-fpm
        env_file: ./build/envfile
        networks:
            - wordpress_network
        depends_on:
            - db
        volumes:
            - ./wordpress:/var/www/html

    db:
        image: mariadb:latest
        env_file: ./build/envfile
        command: mysqld --character-set-server=utf8 --collation-server=utf8_unicode_ci
        networks:
            - wordpress_network
        ports:
            - "$HOST_DB_PORT:3306"
        volumes:
            - ./data:/var/lib/mysql

# volumes:
#     wordpress:
#         driver_opts:
#             type: none
#             device: ./wordpress #NOTE needs full path (~ and ./ not work)
#             o: bind

#settin virtualhost
networks:
    wordpress_network:
#    external_nginx_proxy:
#        external:
#            name: proxy_net
```
