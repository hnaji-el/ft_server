#!/bin/bash

docker rm -f $(docker ps -aq)
docker rmi -f $(docker images -q)
docker build -t web .
docker run -d -p 80:80 -p 443:443 --name=webserver web
docker exec -it webserver /bin/bash
