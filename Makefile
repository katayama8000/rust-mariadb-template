.PHONY: rust-up db-up

rust-up:
	docker-compose up -d
	docker-compose exec -it rust /bin/bash

db-up:
	docker-compose up -d
	docker-compose exec -it mariadb /bin/bash
