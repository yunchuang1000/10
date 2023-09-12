<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
    <title>网站系统后台登录页面</title>
	<link rel="stylesheet" type="text/css" href="login/css/style.css" />   
</head>
<body>
<?php
@session_start();
if(!empty($_POST['userName'])&&!empty($_POST['passWord'])){
	$fp=fopen("config.txt","r");
    $info=fread($fp,10000);
    $listx=explode("@",$info);
    list($name,$pass,$des,$ftitle,$guanzhu,$tongcheng,$dianzan,$weixin,$user,$word)=$listx;
    $listx=explode(":",$user);
    $row[8]=$listx[1];
    $listx=explode(":",$word);
    $row[9]=$listx[1];

	 if(($_POST['userName']==$row[8])&&($_POST['passWord']==$row[9])){
	 $_SESSION['authorized']="yes";
	 $_SESSION['name']=$_POST['userName'];
	 echo '<script language="javascript">alert("OK!");window.location= "admin.php";</script>';
	
	 }else{
	 $_SESSION['authorized']="no";
	 echo '<script language="javascript">alert("账号或密码错误！");window.location= "login.php";</script>';
	
	 }
	
}else{
?>
    <div class="main">
    	<div class="mainin">
        	
            <div class="mainin1">
			<form action="login.php"  method="post" >
            	<ul>
                	<li><span>用户名：</span><input name="userName" type="text" id="userName" placeholder="登录名" value="" class="SearchKeyword"></li>
                    <li><span>密码：</span><input type="password" name="passWord" value="" id="passWord" placeholder="密码"/ class="SearchKeyword2"></li>
                    <li><button class="tijiao">提交</button></li>
                </ul>
				</form>
            </div>
			
            <div class="footpage">
			<p id="siteCopyRight" style="color:#fff;font-size:15px;text-align:center;">请正确输入密码或用户名！</p>
			<span>Copyright ?</span>2023 － King资源网</div>
        </div>
    </div>
	
</body>
<?php
unset($_SESSION['authorized']);
unset($_SESSION['name']);

}
?>


</html>
