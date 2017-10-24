<?php
$rel_dir = '/' . ltrim(substr(dirname(__file__), strlen($_SERVER['DOCUMENT_ROOT'])), '/');
return array_merge(array(
    'appId' => '2016081600258555',
    'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
    'notify_url' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'].$rel_dir.'/notify.php',
    'return_url' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'].$rel_dir . '/return.php',
    // 密钥 暂时只支持RSA加密，不支持RSA2
    // RSA签名验签工具生成密钥时请使用【PKCS1非JAVA】
    // 密钥暂时不支持读取文件   有需要可以改类里的  sign签名方式
    'alipayPublicKey' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCzdpNOMe9Ao0dOS6Y++44yWlETj10cL5m/hEgu0ebJjfnvfIWnxXcnSXn7Kregu3/7HlKNy5EEFoy1qGfkNbIvdq6ssUtf2+07HG3LHTbDUhRWPi9uVvOhI1qf17BThWQ/WimsPcoD50m+Hr4rmiV2eXxO3rb7qfIcOGLxLKSUlQIDAQAB',
    'rsaPrivateKey' => trim('
MIICXgIBAAKBgQCzdpNOMe9Ao0dOS6Y++44yWlETj10cL5m/hEgu0ebJjfnvfIWn
xXcnSXn7Kregu3/7HlKNy5EEFoy1qGfkNbIvdq6ssUtf2+07HG3LHTbDUhRWPi9u
VvOhI1qf17BThWQ/WimsPcoD50m+Hr4rmiV2eXxO3rb7qfIcOGLxLKSUlQIDAQAB
AoGBAK9kKZ74am1vpha9FGLlkxle73IAYO1VEBv+elVXywgc+7G0ryNCd6srwk1Y
eFJcLT4Nan0uADJQn4BCcBa268aYLiZKpTenPb6AeJZ3H/FvsNrYg0Kshw2xC/hZ
oZwifKJpng3ZZ0xEIh4DvYzoUh9pf2QcdZH98ti8hI+shM9BAkEA3eMsmRbdzJSn
XMPu0JhB6beXWqMzVXHzDL2fM78kA1iNV5H5Uf4U0pnNeEWkx485/w2KqeNPC5d2
COrjNkW03QJBAM8NtfQLF1l3bRL0Pya2DYgatQTjqVQbbEyg4cMaGTqgXA9tvegb
XoIOaN5x343FwptjQcnxkbKRI81Eu97FZxkCQQCWMTS592FxHlpfD30yky1ij1QT
FQ8lUjlrsVr3AvXUkfcyhGuYFX1wxIzxUWrlbcybGUZ4EpYpyX8rMBtWXD69AkEA
pxJ3Ka7xbl2xg8PWWVQ5YwO54XIapiVipAqFYTrj9KyE3GY/ANVk0yjxcd0M+IcE
2wGiimMEn8QB0ZaOydkbsQJAToQSMo1yVE9jqXB8ieCVXt/jOZzJVRXhvGlqv0DK
Wu6mJvgR9l7YnXuiJu4r2mlyJO9DqcgIN+/mjm6xhKngdA=='),
), file_exists('local_config.php')?include('local_config.php'):array());
