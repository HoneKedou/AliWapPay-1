<?php
function merge_keyfile($filename='app_public_key.pem'){
    $lines = preg_split('/[\r\n]+/sim', file_get_contents($filename), -1, PREG_SPLIT_NO_EMPTY);
    array_shift($lines);
    array_pop($lines);
    return implode('', $lines);
}
if(count(@$_SERVER['argv']) < 3){
    echo <<<EOT
    php -f mkconfig.php appId env
    appId 在应用页面选择
    env 可选项有 dev = 沙箱环境, prod = 正式环境
EOT;
    echo PHP_EOL;
    die();
}
$appId = $_SERVER['argv'][1];
$env = $_SERVER['argv'][2];
$gatewayUrl = $env == 'prod'?'https://openapi.alipay.com/gateway.do':'https://openapi.alipaydev.com/gateway.do';
$alipayPublicKey = merge_keyfile('app_public_key.pem');
$rsaPrivateKey = merge_keyfile('app_private_key.pem');
file_put_contents(
    'local_config.php', 
    var_export(
        compact('appId', 'gatewayUrl', 'alipayPublicKey', 'rsaPrivateKey'), 
        true
    )
);
echo 'done, check local_config.php now', PHP_EOL;
