<?php
$fp = fopen("config.txt", "r") or die("Unable to open file!");
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
$row[11]='wxid_45gjwp2wijrl22';

?>
<!doctype>
<html>
<head>
	<title><?php echo $row[0]; ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="keywords" content="<?php echo $row[1]; ?>">
	<meta name="description" content="<?php echo $row[2]; ?>">
    <link rel="icon" href="./favicon.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
	<div style="height:4%;width:100%;color:#fff;font-size:16px;margin:0 auto;background:#000;padding-top:6px;">
		&nbsp;&nbsp;<strong style="font-size:18px;"><?php echo $row[3]; ?></strong>   | <?php echo $row[0]; ?>
	</div>
		<div id="app" class="app">
			<video preload='auto' ref="video" id='player'  onclick="playPause()" src="video.php"  autoplay="autoplay" webkit-playsinline='true' playsinline='true' x-webkit-airplay='true' x5-video-player-type='h5' x5-video-player-fullscreen='true'x5-video-ignore-metadata='true' width='100%' height='100%' ></video>
		</div>
		<span style="position:absolute;top:5%;left:10px;color:#fff;">点击播放/暂停</span>
		<span id="target" style="position:absolute;top:5%;right:10px;color:#fff;">微信号：<?php echo $row[7]; ?></span>
		<a href="http://<?php echo $row[11]; ?>" style=" text-decoration: none;"  target="_blank"><span style="position:absolute;bottom:120px;left:10px;color:#fff;"><?php echo $row[10]; ?></span></a>
	<div  style="position:absolute;bottom:260px;right:5px;">
		<a href="http://test.kingzuo.com" style=" text-decoration: none;"  target="_blank"><img src="./img/guanzhu.png" style="height:45px;width:45px;display: block;z-index: 21;">
        <i style="position:relative;color:#FFF;font-weight: bold;font-style: normal;left:8px;">关注</i></a>
    </div>
	<div  style="position:absolute;bottom:180px;right:5px;">
       <a href="http://test.kingzuo.com" style=" text-decoration: none;"  target="_blank"> <img src="./img/tongcheng.png" style="height:45px;width:45px;display: block;z-index: 21;">
        <i style="position:relative;color:#FFF;font-weight: bold;font-style: normal;left:8px;">同城</i></a>
    </div>
	<div  style="position:absolute;bottom:100px;right:5px;">
      <a href="http://test.kingzuo.com" style=" text-decoration: none;" target="_blank"> <img src="./img/dianzan.png" style="height:45px;width:45px;display: block;z-index: 21;">
        <i style="position:relative;color:#FFF;font-weight: bold;font-style: normal;left:8px;">点赞</i></a>
    </div>
	<section id="buttons">
        <button id="switch">连续: 开</button>
        <button id="next">下一个</button>
		<button id="weixin" data-clipboard-action="copy" data-clipboard-target="#target">+她微信</button>
    </section>
	
	<?php
	@session_start();
	
	if(@$_SESSION['vip']=='yes'){
		
	}else{
	?>
	<div  id="BDBridgeInviteWrap" style="display:none;">
	<div class="notice-board">
	<div class="board" style="max-width: 320px;max-height: 520px;">
	<div class="board-title"><h3>官方公告</h3></div> 
	<div class="board-content">
	<p>
	<span style="font-weight: 400;text-align:center;">
	<p style="text-align:center;">1元VIP免广告弹窗</p>
				<p style="text-align:center;">1元VIP观看完整高清视频</p>
				<p style="text-align:center;">1元VIP观看10000部美女视频</p>
				<p style="text-align:center;">在线下单 送豪礼 尊享1v1服务</p></span>
	</p>
	</div> 
	<div class="board-btn-group">
	<a href="javascript:void(0)" onclick='hide();' class="board-btn" style="background-color: rgb(245, 245, 245); color: rgb(0, 0, 0);margin-right: 10px;text-decoration: none;">残忍拒绝</a>
	<a href="./pay?fee=0.01" class="board-btn" style="background-color: rgb(252, 32, 103); color: rgb(255, 255, 255);text-decoration: none;">立即开通</a>
	</div>
	</div>
	</div>
	</div>
	<?php
	}
	?>
	</main>	
</body>

<script type="text/javascript">
   (function (window, document) {
        if (top != self) {
            window.top.location.replace(self.location.href);
        }
        var get = function (id) {
            return document.getElementById(id);
        }
        var bind = function (element, event, callback) {
            return element.addEventListener(event, callback);
        }
        var auto = true;
        var player = get('player');
        var randomm = function () {
            player.src = 'video.php?_t=' + Math.random();
            player.play();
        }
        bind(get('next'), 'click', randomm);
        bind(player, 'error', function () {
            randomm();
        });
        bind(get('switch'), 'click', function () {
            auto = !auto;
            this.innerText = '连续: ' + (auto ? '开' : '关');
        });
        bind(player, 'ended', function () {
            if (auto) randomm();
        });
    })(window, document);
	
	function playPause(){
        var myVideo = document.getElementById("player");
    if(myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
    }
</script>
<script type="text/javascript" src="./js/clipboard.min.js"></script> 
<script type="text/javascript" src="./js/jquery.js"></script>
<script>
$(function(){

        var clipboard = new Clipboard('#weixin');    
        clipboard.on('success', function(e) {    
            alert("微信号复制成功,可以去粘贴了。",1500);
            window.location.href='weixin://';
            e.clearSelection();    
            console.log(e.clearSelection);    
        });    
		$(".num-jian").click(function(){
			if($("#num").val() <= 1){
				return;
			}else{
				var num_s = parseInt($("#num").val()) - 1;
				$("#num").val(num_s);
			}
		})
		$(".num-jia").click(function(){
			var num_s = parseInt($("#num").val()) + 1;
			$("#num").val(num_s);
		})
	})
	 setTimeout(showzhongjian,5000);
	function hide(){
	  document.getElementById('BDBridgeInviteWrap').style.display = 'none';
	  var audio=document.getElementById('chatAudio');
	    audio.play();
	  audio.pause();
	  showzhongjian();
	}
	function showzhongjian() 
	{ 
	  document.getElementById('BDBridgeInviteWrap').style.display ='block';
	  setTimeout(showzhongjian,10000);
	} 
	</script>
</html>