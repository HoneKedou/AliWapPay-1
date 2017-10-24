<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
if(!empty($_GET['mock']) && file_exists('mock.php')){
    $_POST = include('mock.php');
    error_log('loaded mock data');
}
$s = $wap_pay->check($_POST);
AliWapPay::writeLog('notify result is: '. var_export($s, true));
if($s){
    echo 'success';
    die();
}else{
    echo '验签失败';
}
