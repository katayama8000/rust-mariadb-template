use sqlx::{mysql::MySqlPoolOptions, Row};

#[tokio::main]
async fn main() -> Result<(), sqlx::Error> {
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
    // print all
    for row in rows {
        let id: i32 = row.get("id");
        let name: String = row.get("name");
        println!("id: {}, name: {}", id, name);
    }
    Ok(())
}
