<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
if(!empty($_GET['mock']) && file_exists('mock.php')){
    error_log('loaded mock data');
    $_GET = include('mock.php');
}
$s = $wap_pay->check($_GET);
AliWapPay::writeLog('return result is: '. var_export($s, true));
if($s){
    echo '验证成功';
    //订单处理
}else{
    echo '验签失败';
}
