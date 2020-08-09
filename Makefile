CFLAGS = -g -Wall
TARGETS = start

start:
	docker-compose up -d php
	docker-compose exec php composer install
	docker-compose up -d

stop:
	docker-compose stop
