<?php
include_once 'AliWapPay.class.php';
$config = include(dirname(__file__) . '/config.php');
$wap_pay = new AliWapPay($config);
$data = array(
    'subject' => '测试订单' . date('YmdHis'),
    'out_trade_no' => time().rand(1, 200),
    'total_amount' => '0.01',
    // 'timeout_express' => '5m',
);
$wap_pay->pay($data);
