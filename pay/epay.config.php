<?php
/* *
 * 配置文件
 */

$alipay_config['partner']		= '1000';//商户id
$alipay_config['key']			= 'nNofNdqtkQOdngv3gr3nfZRaTNGVNU3K';///商户key
$alipay_config['sign_type']    = strtoupper('MD5');
$alipay_config['input_charset']= strtolower('utf-8');
$alipay_config['transport']    = 'http';
$alipay_config['apiurl']    =  'https://pay.kingzuo.com/'; //改成你要对接的易支付网关地址
//易支付免签支付（微信支付宝免挂支付）：https://pay.kingzuo.comt
?>