<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ひとこと掲示板</title>

    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<div id="wrap">
    <div id="head">
        <h1>ひとこと掲示板</h1>
    </div>
    <div id="content">
        <p>&laquo;<a href="index.php">一覧にもどる</a></p>
        <div class="msg">
            <img src="member_picture/" width="48" height="48" alt=""/>
            <p>○○<span class="name">（○○）</span></p>
            <p class="day"><a href="view.php?id=">2021/01/01 00:00:00</a>
                [<a href="delete.php?id=" style="color: #F33;">削除</a>]
            </p>
        </div>
        <p>その投稿は削除されたか、URLが間違えています</p>
    </div>
</div>
</body>

</html>