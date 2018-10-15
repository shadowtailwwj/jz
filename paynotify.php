<?php
/**
 * ---------------------通知异步回调接收页-------------------------------
 * 
 * 此页就是您之前传给支付页的notifyURL页的网址
 * 支付成功，我们会根据您之前传入的网址，回调此页URL，post回参数
 * 
 * --------------------------------------------------------------
 */


file_put_contents('text.txt',print_r('nihao11', true));
//    $orderNo = $_POST["orderNo"];
//    $merchantOrderNo = $_POST["merchantOrderNo"];
//    $money = $_POST["money"];
//    $payAmount = $_POST["payAmount"];
//    $sign = $_POST["sign"];
//
//    //校验传入的参数是否格式正确，略
//
//
//    $token = "2DD1C89472127800234D841689B56CED"; //商户秘钥
//
//    //orderNo&merchantOrderNo&amount&payAmount&密钥
//    $key = md5($orderNo.'&'.$merchantOrderNo.'&'.$money.'&'.$payAmount.'&'.$token);
//
//    if ($key != $sign){
//
//        return jsonError("key值不匹配");
//    }else{
//        //校验key成功，是自己人。执行自己的业务逻辑：加余额，订单付款成功，装备购买成功等等。
//        return jsonSuccess("支付成功");
//    }
//
//    //返回错误
//    function jsonError($message = '',$url=null)
//    {
//        $return['msg'] = $message;
//        $return['data'] = '';
//        $return['code'] = -1;
//        $return['url'] = $url;
//        return json_encode($return);
//    }
//
//    //返回正确
//    function jsonSuccess($message = '',$data = '',$url=null)
//    {
//        $return['msg']  = $message;
//        $return['data'] = $data;
//        $return['code'] = 1;
//        $return['url'] = $url;
//
//        return json_encode($return);
//    }
    
  

?>