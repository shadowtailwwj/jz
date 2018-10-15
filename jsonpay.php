<?php
/**
 * 模拟post进行url请求
 * @param string $url
 * @param string $param
 */
function request_post($url = '', $param = '') {
    if (empty($url) || empty($param)) {
        return false;
    }
    
    $postUrl = $url;
    $curlPost = $param;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    
    return $data;
}

//第二种JSON方式调用
$json_url = 'https://api.shaimeixiong.com/api/receive?type=json';

$money          = '100';
$type           = 'ALIPAY';
$merchantId     = '6001024';//商户号在平台中申请
$timestamp      = time()*1000;//时间截
$goodsName      = '测试商品';//商品名称
$notifyURL      = 'http://127.0.0.1/xiaoxiobao/paynotify.php'; //支付成功回调地址
$returnURL      = 'http://127.0.0.1/xiaoxiobao/payreturn.php';//支付成功跳转页面
$merchantOrderId=mt_rand(10000,99999);//商家自定义订单号
$merchantUid    = 123; //商家用户的账号
$secretKey='2DD1C89472127800234D841689B56CED';//商家密钥

$sign           = md5($money.'&'.$merchantId.'&'.$notifyURL.'&'.$returnURL.'&'.$merchantOrderId.'&'.$timestamp.'&'.$secretKey);
$param = array(
        'money'             => $money,
        'type'              => $type,                               //默认为表单模式。form：表单模式；json：返回json结构
        'merchantId'        => $merchantId,                         //必填。您的商户唯一标识，注册后在设置里获得
        'timestamp'         => $timestamp,                          //必填。精确到毫秒
        'goodsName'         => $goodsName,                          //选填。商品的名称，商户后台会展示该名称。
        'notifyURL'         => $notifyURL,                          //选填。支付成功后系统会对该地址发起回调，通知支付成功的消息。
        'returnURL'         => $returnURL,                          //选填。成功成功后系统会跳转页面到该地址上。
        'merchantOrderId'   => $merchantOrderId,                    //必填。商户自定的订单号，该订单号将后在后台展示。
//        'merchantUid'       => $merchantUid,                        //选填。商户提交支付的用户Id，该ID会后台展示。
        'sign'              => $sign                                //必填。把参数，连Token一起，按指定的顺序。做md5-32位加密，取字符串小写。得到key。
    );
$res =  request_post($json_url,$param);
echo $res;
?>