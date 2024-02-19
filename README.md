## rust

### up

```bash
docker compose up -d
docker compose exec rust /bin/bash
```

### run

```bash
cargo run
```

## mariadb

```bash
docker compose up -d
docker compose exec -it mariadb /bin/bash
mysql -u root -p
enter password: password
show databases;
use mydatabase;
show tables;
```
