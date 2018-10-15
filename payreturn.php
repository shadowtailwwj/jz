<? header("content-Type: text/html; charset=UTF-8");?>
<?php

/**
 * ---------------------支付成功，用户会跳转到这里-------------------------------
 * 
 * 此页就是您之前传给支付页的returnURL页的网址
 * 支付成功，我们会把用户跳转回这里。
 * 
 * --------------------------------------------------------------
 */

    $merchantOrderNo = $_GET["merchantOrderNo"];

    //此处在您数据库中查询：此笔订单号是否已经异步通知给您付款成功了。如成功了，就给他返回一个支付成功的展示。
//    echo "恭喜，支付成功!，订单号：".$merchantOrderNo;
    

?>
<html>
<head>
    <meta charset="utf-8">
    <title>支付成功</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <link rel="shortcut icon" href="/rd/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/rd/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" >
    <script type='text/javascript' src="/rd/assets/plugins/jquery-1.12.1.min.js" ></script>
    <script type="text/javascript" src="/rd/assets/plugins/qrcode/jquery.qrcode-1.min.js" ></script>
    <script type="text/javascript" src="/rd/assets/plugins/jquery.base64.js" ></script>
    <script type="text/javascript" src="/rd/assets/js/displayQrcode.js?v=1512541073916" ></script>

    <style>
        .box{ animation: change 1s  ease-in  infinite ; font-size: 36px; color:#f00; font-weight: bold}
        @keyframes change {
            0%{ text-shadow: 0 0 4px #f00}
            50%{ text-shadow: 0 0 40px #f00}
            100%{ text-shadow: 0 0 4px #f00}
        }
    </style>

    <script type="text/javascript">
        var qrcodeFile = '';
        var qrcode = 'aHR0cHM6Ly9teXVuLnRlbnBheS5jb20vbXFxL3BheS9xcmNvZGUuaHRtbD9fd3Y9MTAyNyZfYmlkPTIxODMmdD01VjA0NDI0MjU4ZjUzODA5Y2Y4ZTlhM2UxNDIyNTZlMg==';
        var responseDesc = '通讯成功';
        var responseCode = '0';
        var orderNo = '201712060160000038';

        $(function(){
            //DisplayQrcode.init(qrcodeFile, qrcode, responseDesc, 'pc', orderNo);
            DisplayQrcode.init2('pc', orderNo,  qrcode, responseCode, responseDesc, qrcodeFile);
        });


    </script>

</head>

<body class="bg-f">
<header id="m-pay"></header>
    <p>恭喜，支付成功!，订单号：<?php echo $merchantOrderNo ?></p>
</body>
</html>
