<?php
session_start();
require('library.php');
var_dump($_SESSION['id']);
var_dump($_SESSION['name']);

//セッションの情報がなければ、ログインに戻る
if (isset($_SESSION["id"]) && isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
} else {
    header('Location:login.php');
    exit();
}

//メッセージの投稿
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    //db接続
    $db = dbconnect();
    //
    $stmt = $db->prepare('inser into posts(message,member_id) values(?,?)');
    if (!$stmt) {
        die($db->error);
    }

    $stmt->bind_param('si', $message, $id);
    $success = $stmt->execute();
    if (!$success) {
        die($db->error);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ひとこと掲示板</title>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="wrap">
        <div id="head">
            <h1>ひとこと掲示板</h1>
        </div>
        <div id="content">
            <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
            <form action="" method="post">
                <dl>
                    <dt><?php echo h($name); ?>さん、メッセージをどうぞ</dt>
                    <dd>
                        <textarea name="message" cols="50" rows="5"></textarea>
                    </dd>
                </dl>
                <div>
                    <p>
                        <input type="submit" value="投稿する" />
                    </p>
                </div>
            </form>

            <div class="msg">
                <img src="member_picture/" width="48" height="48" alt="" />
                <p>○○<span class="name">（○○）</span></p>
                <p class="day"><a href="view.php?id=">2021/01/01 00:00:00</a>
                    [<a href="delete.php?id=" style="color: #F33;">削除</a>]
                </p>
            </div>
        </div>
    </div>
</body>

</html>