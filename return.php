<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
$s = $wap_pay->check($_POST);
if($s){
    echo '验证成功';
    //订单处理
}else{
    echo '验签失败';
}
