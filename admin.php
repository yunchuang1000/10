<!doctype html>
<?php  
require_once "header.php";
if(!empty($_POST['name'])){
       $fp=fopen("config.txt","w");
       $info="name:".$_POST['name']."@"."pass:".$_POST['password']."@"."des:".$_POST['description']."@"."ftitle:".$_POST['ftitle']."@"."guanzhu:".$_POST['guanzhu']."@"."tongcheng:".$_POST['tongcheng']."@"."dianzan:".$_POST['dianzan']."@"."weixin:".$_POST['weixin']."@"."user:".$_POST['user']."@"."word:".$_POST['word']."@"."dibu:".$_POST['dibu']."@"."link:".$_POST['link'];
       fwrite($fp,$info);

    echo '<script language="javascript">window.location= "admin.php";</script>';
   }else{
	   
	   $fp=fopen("config.txt","r");
       $info=fread($fp,10000);
       $listx=explode("@",$info);
       list($name,$pass,$des,$ftitle,$guanzhu,$tongcheng,$dianzan,$weixin,$user,$word,$dibu,$link)=$listx;
       $listx=explode(":",$name);
       $row[0]=$listx[1];
       $listx=explode(":",$pass);
       $row[1]=$listx[1];
       $listx=explode(":",$des);
       $row[2]=$listx[1];
	   $listx=explode(":",$ftitle);
       $row[3]=$listx[1];
	   $listx=explode(":",$guanzhu);
       $row[4]=$listx[1];
	   $listx=explode(":",$tongcheng);
       $row[5]=$listx[1];
	   $listx=explode(":",$dianzan);
       $row[6]=$listx[1];
	   $listx=explode(":",$weixin);
       $row[7]=$listx[1];
	   $listx=explode(":",$user);
       $row[8]=$listx[1];
	   $listx=explode(":",$word);
       $row[9]=$listx[1];
	   $listx=explode(":",$dibu);
       $row[10]=$listx[1];
	   $listx=explode(":",$link);
       $row[11]=$listx[1];
	   
   }

?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="static/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/main.css"/>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.php" target="_blank" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php" target="_blank">首页</a></li>
               
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">欢迎您,<?php echo $row[8]; ?></a></li>
              
                <li><a href="login.php">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
   
    <!--/sidebar-->
    <div class="main-wrap" style="margin-left:0px;">
        <div class="crumb-wrap" style="    text-align: center;">
            <div class="crumb-list"><span class="crumb-name">系统设置</span></div>
        </div>
        <div class="result-wrap">
            <form action="admin.php" method="post" id="myform" name="myform">
                <div class="config-items">
                   
                    <div class="result-content">
                        <table width="100%" class="insert-tab" >
                            <tbody>
							<tr>
                                <th width="30%"><i class="require-red">*</i>站点标题：</th>
                                <td><input type="text" id=""  value="<?php echo $row[0]; ?>" size="85" name="name"  class="common-text"></td>
                            </tr>
                              <tr>
                                    <th><i class="require-red">*</i>副标题：</th>
                                    <td><input type="text" id="" value="<?php echo $row[3]; ?>" size="85" name="ftitle" class="common-text"></td>
                                </tr>  
                                <tr>
                                    <th><i class="require-red">*</i>关键字：</th>
                                    <td><input type="text" id="" value="<?php echo $row[1]; ?>" size="85" name="password" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>描述：</th>
                                    <td><input type="text" id="" value="<?php echo $row[2]; ?>"  size="85" name="description" class="common-text"></td>
                                </tr>
								<!--<tr>-->
        <!--                            <th><i class="require-red">*</i>价格：</th>-->
        <!--                            <td><input type="text" id="" value="<?php echo $row[15]; ?>"  size="85" name="money" class="common-text"></td>-->
        <!--                        </tr>-->
								<tr>
                                    <th><i class="require-red">*</i>用户名：</th>
                                    <td><input type="text" id="" value="<?php echo $row[8]; ?>"  size="85" name="user" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>登录密码：</th>
                                    <td><input type="text" id="" value="<?php echo $row[9]; ?>"  size="85" name="word" class="common-text"></td>
                                </tr>
								 <tr>
                                    <th><i class="require-red">*</i>底部微信：</th>
                                    <td><input type="text" id="" value="<?php echo $row[7]; ?>"  size="85" name="weixin" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>关注连接：</th>
                                    <td><input type="text" id="" value="<?php echo $row[4]; ?>"  size="85" name="guanzhu" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>同城连接：</th>
                                    <td><input type="text" id="" value="<?php echo $row[5]; ?>"  size="85" name="tongcheng" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>点赞连接：</th>
                                    <td><input type="text" id="" value="<?php echo $row[6]; ?>"  size="85" name="dianzan" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>底部广告：</th>
                                    <td><input type="text" id="" value="<?php echo $row[10]; ?>"  size="85" name="dibu" class="common-text"></td>
                                </tr>
								<tr>
                                    <th><i class="require-red">*</i>底部连接：</th>
                                    <td><input type="text" id="" value="<?php echo $row[11]; ?>"  size="85" name="link" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td >
                                        <input type="submit" value="保存" class="btn btn-primary btn6 mr10">
                                       
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>