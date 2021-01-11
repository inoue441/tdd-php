RUN_PHP := docker-compose run --rm php
RUN_COMPOSER := docker-compose run --rm composer

install:
	$(RUN_COMPOSER) composer install
.PHONY: install

update:
	$(RUN_COMPOSER) composer update
.PHONY: update

test:
	$(RUN_PHP) ./vendor/bin/phpunit
.PHONY: test