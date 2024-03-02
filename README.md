## rust

### up

```bash
make rust-up
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
make db-up
```

### check

```bash
mysql -u root -p
enter password: password
show databases;
use mydatabase;
show tables;
```

## devcontainer

### setup

```bash
cp .env.dist .env
```

### up

run devcontainer in vscode
