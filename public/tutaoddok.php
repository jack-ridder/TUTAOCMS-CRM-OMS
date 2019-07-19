<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>土淘网CRM在线订单管理系统</title>
<style type="text/css">
    *{margin:0;padding:0;}
    body{font:14px Microsoft YaHei,\5FAE\8F6F\96C5\9ED1,SimSun,\5B8B\4F53,Arial,Verdana;color:#000;text-align:left;padding-top:60px;background:#FFF;} 
    a:link,a:visited{color:#F00;text-decoration:none;}a:hover{color:#090;text-decoration:underline;}
    ul,li{list-style:none;display:block;}
    img{border:0 none;vertical-align:middle;}
    #head{width:100%;padding:0 0 30px;text-align:center;border-bottom:2px dotted #DDD;}
    #tutaook{width:100%;background:#FFF;}
    #tutaook ul{width:650px;height:auto;margin:20px auto;}    
    #tutaook li{width:650px;height:40px;line-height:40px;border-bottom:1px dotted #DDD;}    
    #tutaook li span.l{float:left;width:200px;text-align:right;margin-right:20px;}    
    #tutaook li span.r{float:left;width:430px;color:#BD0000;} 
    #foot{width:100%;padding:30px 0 0;text-align:center;border-top:2px dotted #DDD;}
    #foot p.go{font:12px SimSun,\5B8B\4F53,Arial,Verdana;color:#090;margin-bottom:20px;}
    #time{font:14px Arial,Verdana;color:#F90;font-weight:bold;}
</style>
<script type="text/javascript">
setInterval("settime()",1000);
    var i=15;
    function settime() {
       i--;
       time.innerHTML=i;
       if(i<=0) {
        window.location.href="<?php echo $_SERVER[HTTP_REFERER]; ?>";
       }
    }
</script>
</head>
<body>
<div id="head">
    <img src="../template/images/tutaook.gif" />
</div>
<div id="tutaook">
    <ul>
        <li>
            <span class="l">订单号：</span>
            <span class="r"><?php echo $_GET['out_trade_no']; ?></span>
        </li>
        <li>
            <span class="l">订购产品：</span>
            <span class="r"><?php echo $_GET['tutaoproduct']; ?></span>
        </li>
        <li>
            <span class="l">收货人姓名：</span>
            <span class="r"><?php echo $_GET['tutaoname']; ?></span>
        </li>
        <li>
            <span class="l">手机号码：</span>
            <span class="r"><?php echo $_GET['tutaomob']; ?></span>
        </li>
        
        <li>
            <span class='l'>所在地区：</span>
            <span class='r'><?php echo $_GET['tutaoprovince'].$_GET['tutaocity'].$_GET['tutaoarea']; ?></span>
        </li>        <li>
            <span class="l">详细地址：</span>
            <span class="r"><?php echo $_GET['tutaoaddress']; ?></span>
        </li>
        <li style="border:none;">
            <span class="l">付款方式：</span>
            <span class="r">
<?php
if($_GET['tutaopay'] == '货到付款'){
echo '<img src="../template/images/fka.gif" />';
}elseif($_GET['tutaopay'] == '其他'){
echo '<img src="../template/images/fkc.gif" />';
}
?></span>
        </li>
    </ul>
</div>
<div id="foot">
    <p class="go">温馨提示：本页面将在 <span id="time">15</span> 秒后自动返回，或者您也可以点击下面的返回图标立即返回。</p>
    <p><a href='<?php echo $_SERVER[HTTP_REFERER]; ?>' title="返回"><img src="../template/images/tutaogo.gif" alt="返回" /></a></p>
</div>
</body>
</html>
