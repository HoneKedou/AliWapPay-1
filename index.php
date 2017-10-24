<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
$data = array(
    'productCode' => 'QUICK_WAP_PAY',
    'body' => 'test',
    'subject' => '测试订单',
    'out_trade_no' => time().rand(1,200),
    'total_amount' => '0.01',
    'timeout_express' => '5m',
);
$s = $wap_pay->pay($data);
print_r($s);
die;
