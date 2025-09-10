<?php
    echo 'ユーザーエージェント: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>'\\n;
    echo 'リクエストメソッド: ' . $_SERVER['REQUEST_METHOD'] . '<br>'\\n;
    echo 'クライアントIPアドレス: ' . $_SERVER['REMOTE_ADDR'] . '<br>'\\n;
    echo 'ClientCertificate: ' . $_SERVER['X-ARR-ClientCert'] . '<br>'\\n;
    echo 'DummyCertificate: ' . $_SERVER['X-Hoge-ClientCert'] . '<br>'\\n;
?>