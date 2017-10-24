<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
$s = $wap_pay->check($_POST);//解密
if($s){
    echo '支付成功';
}else{
    echo '验签失败';
}
