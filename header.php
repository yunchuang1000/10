
<?php
@session_start();
if(@$_SESSION['authorized']!='yes'){
	echo '<script language="javascript">alert("您还没有登录呢！");window.location= "login.php";</script>';
	exit();
}
?>
