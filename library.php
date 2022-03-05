<?php
//文字コード変換
function h($value)
{
    return htmlspecialchars($value, ENT_QUOTES);
}
?>