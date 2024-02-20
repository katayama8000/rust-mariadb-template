use sqlx::mysql::MySqlPoolOptions;

#[tokio::main]
async fn main() -> Result<(), sqlx::Error> {
    println!("Hello, world!");
    let pool = MySqlPoolOptions::new()
        .max_connections(5)
        .connect("mysql://myuser:mypassword@mariadb/mydatabase")
        .await?;

    // insert some data
    sqlx::query("INSERT INTO mytable (name) VALUES (?)")
        .bind("World")
        .execute(&pool)
        .await?;
    // fetch all
    let rows = sqlx::query("SELECT * FROM mytable")
        .fetch_all(&pool)
        .await?;
    println!("Got {} rows", rows.len());
    Ok(())
}
