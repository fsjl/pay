<?php
error_reporting(0);
$b = 1;
file_put_contents("zan.txt", $b);
echo $b;
?>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/AlipayClient/',$ua)){
header('location: https://qr.alipay.com/tsx01802t61yhnpipzcya75');
}else if(preg_match('/MicroMessenger/',$ua)){
$ys="#22A322";
$logo="w.jpg";
$logo2="w.png";
$pay="w2.jpg";
$alt="微信支付";
$alt2="微信";
}else if(preg_match('/QQ\//',$ua)){
$ys="#48B8FF";
$logo="q.jpg";
$logo2="q.png";
$pay="q2.jpg";
$alt="QQ支付";
$alt2="QQ";
}else{
echo'<title>请使用支付宝、微信、QQ扫描二维码付款</title><center><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes",target-densitydpi="device-dpi"/>
<div style="background-color:#48B8FF;width:100%;height:88%;color:#FFFFFF;font-size:20px;padding-top:20%;">请使用支付宝、微信、QQ扫描二维码付款<br><br><br><br><img width="68%" src="A_W_Q_Pay.jpg" alt="支付码"><br><br><br><br>
<img style="width:15%; padding:0px 22px 0px 23px;" src="a.png" alt="支付宝"><img style="width:15%; padding:0px 22px 0px 23px;" src="w.png" alt="微信"><img style="width:15%; padding:0px 22px 0px 23px;" src="q.png" alt="QQ"><br>
</div>';
exit();
}

echo'<center><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes",target-densitydpi="device-dpi"/>
<div style="border:3px solid '.$ys.';width:98%;height:85%;background-color:'.$ys.';"><img width="100%" height="103" src="'.$logo.'" alt="'.$alt.'"><br><br><br><br>
<img width="68%" src="'.$pay.'" alt="'.$alt.'"><br><br><br>
<font color="#FFF" size="4">长按二维码识别，向"复世姬凌"付款</font><br><br><br><img style="width:15%;" src="'.$logo2.'" alt="'.$alt2.'"><br><br><br></div><center>';

?>
