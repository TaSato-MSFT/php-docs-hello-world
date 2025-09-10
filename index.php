<?php
    echo 'ユーザーエージェント: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
    echo 'リクエストメソッド: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
    echo 'クライアントIPアドレス: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
    echo 'ClientCertificate: ' . $_SERVER['X-ARR-ClientCertificate'] . '<br>';
?>