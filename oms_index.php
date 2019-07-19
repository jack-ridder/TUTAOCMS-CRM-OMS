session_start();
require_once 'public/tutaonet.php';
$mail->Subject = "客户『".$tutaoname."』提交了新订单，请注意查收！";
$mail->Body = "
<div style='width:50%;margin: 0 auto;padding:30px;border:2px dotted #bd0a01;background:#FFC;'>
	<p align='center' style='height:40px;line-height:40px;font-size:28px;font-

weight:bold;color:#bd0a01;border-bottom:2px dotted #bd0a01;'>".$FromName."订单详情</p>
	<p>【订单编号】：<font color='#BD0000'>".$out_trade_no."</font></p>
	<P>【下单时间】：".$dddate."</P>
	<P>【订购产品】：".$tutaoproduct."</P>
	<P>【数量总价】：".$tutaomun." / ".$tutaoprice."</P>
	<P>【收货姓名】：".$tutaoname."</P>
	<P>【所在地区】：".$tutaoprovince.$tutaocity.$tutaoarea."</P>
	<P>【联系电话】：".$tutaophone."</P>
	<P>【详细地址】：".$tutaoaddress."</P>
	<P>【付款方式】：".$tutaopay."</P>
	<P>【留言备注】：".$tutaoguest."</P>
</div>";

if(empty($_POST['tutaoname'])||empty($_POST['tutaomob'])||empty($_POST['tutaocode'])||$_POST['tutaocode'] != 

$_SESSION['wfcode']){
    echo "<p style='font-size:12px;color:#BD0000;'>错误：验证码不正确！<a href='"."$_SERVER[HTTP_REFERER]"."'>>返回重新填写!>>></a></p>";
    exit(0);
}

if (isset($_SESSION["post_sep"])){
    if (time() - $_SESSION["post_sep"] < $allow_sep){
	    exit("<script>alert('$sepmsg');javascript:history.go(-1);</script>");
	}
	else{
	    $_SESSION["post_sep"] = time();
	} 
} 
else{
    $_SESSION["post_sep"] = time(); 
}
if(!$mail->Send()){
    echo '邮箱发送失败';
}
?>
