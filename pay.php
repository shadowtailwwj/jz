<?php
/*
* 第一种接入表单方式 表单页index.html
*/
$money          = (int)$_POST['money']; //支付金额
$paytype        = 'QQ';
$type           = $_POST['type'];  //默认为表单模式。form：表单模式；json：返回json结构
$merchantId     = '6001024';//商户号
$timestamp      = time()*1000;//时间截
$goodsName      = '测试商品';//商品的名称，商户后台会展示该名称。
$notifyURL      = 'http://127.0.0.1/xiaoxiobao/paynotify.php'; //支付成功回调地址
$returnURL      = 'http://127.0.0.1/xiaoxiobao/payreturn.php';//支付成功跳转页面
$returnURL      = '';//支付成功跳转页面
$merchantOrderId= mt_rand(10000,99999);//商户自定的订单号，该订单号将后在后台展示。
$merchantUid    = 123;//商家用户的账号
$secretKey      ='2DD1C89472127800234D841689B56CED';//商家后台密钥
$sign           = md5($money.'&'.$merchantId.'&'.$notifyURL.'&'.$returnURL.'&'.$merchantOrderId.'&'.$timestamp.'&'.$secretKey);
$param = array(
        'money'             => $money,
        'paytype'           => $paytype,                            //支付方式
        'type'              => $type,                               //默认为表单模式。form：表单模式；json：返回json结构
        'merchantId'        => $merchantId,                         //必填。您的商户唯一标识，注册后在设置里获得
        'timestamp'         => $timestamp,                          //必填。精确到毫秒
        'goodsName'         => $goodsName,                          //选填。商品的名称，商户后台会展示该名称。
        'notifyURL'         => $notifyURL,                          //选填。支付成功后系统会对该地址发起回调，通知支付成功的消息。
        'returnURL'         => $returnURL,                          //选填。成功成功后系统会跳转页面到该地址上。
        'merchantOrderId'   => $merchantOrderId,                    //必填。商户自定的订单号，该订单号将后在后台展示。
        'merchantUid'       => $merchantUid,                        //选填。商户提交支付的用户Id，该ID会后台展示。
        'sign'              => $sign                                //必填。把参数，连Token一起，按指定的顺序。做md5-32位加密，取字符串小写。得到key。
    );

echo json_encode($param);

?>