## rust

### up

```bash
docker compose up -d
docker compose exec -it rust /bin/bash
```

### run

```bash
cargo run
```

## mariadb

### setup

```bash
cp .env.dist .env
```

### up

```bash
docker compose up -d
docker compose exec -it mariadb /bin/bash
```

### check

```bash
mysql -u root -p
enter password: password
show databases;
use mydatabase;
show tables;
```
