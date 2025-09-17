<?php
    echo 'ユーザーエージェント: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
    echo 'リクエストメソッド: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
    echo 'クライアントIPアドレス: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
    echo 'ClientCertificate: ' . $_SERVER['HTTP_X_ARR_ClientCert'] . '<br>';
    echo 'DummyCertificate: ' . $_SERVER['HTTP_X_Hoge_ClientCert'] . '<br>';
?>