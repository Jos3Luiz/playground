#!/bin/sh
docker run --name some-mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=rootpass -e MYSQL_DATABASE=exampledb -e MYSQL_USER_PASSWORD=examplepass -e MYSQL_USER=exampleuser -e MYSQL_ROOT_HOST=% -d mysql:5.7

