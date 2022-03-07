<?php
//文字コード変換
function h($value)
{
    return htmlspecialchars($value, ENT_QUOTES);

}

function dbconnect(){
    $db = new mysqli("localhost:8889", 'root', 'root', 'min_bbs');
    if (!$db) {
        echo ("エラー１");
        die($db->error);
    }
    return $db;
}
