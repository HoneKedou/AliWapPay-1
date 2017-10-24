<?php
$rel_dir = '/' . ltrim(substr(dirname(__file__), strlen($_SERVER['DOCUMENT_ROOT'])), '/');
return array_merge(array(
    'appId' => '***',
    'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
    'notify_url' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'].$rel_dir.'/notify.php',
    'return_url' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'].$rel_dir . '/return.php',
    // 密钥 暂时只支持RSA加密，不支持RSA2
    // RSA签名验签工具生成密钥时请使用【PKCS1非JAVA】
    // 密钥暂时不支持读取文件   有需要可以改类里的  sign签名方式
    'alipayPublicKey' => '*****',
    'rsaPrivateKey' => '****',
), file_exists('local_config.php')?include('local_config.php'):array());
