<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	echo "UTC时间：".date("Y-m-d H:i:s");
	date_default_timezone_set(PRC);
	echo "<br>";
	echo "北京时间：".date("Y年m月d日 H时i分s秒");
	echo "<br>";
	echo "当前时区：".date_default_timezone_get();
	//2017年8月19日
	//测试各种语句效果
	echo '<br>	<img src="images/top.jpg" width="92" height="92">';
	echo "<br>当前文件路径为：".__FILE__;
	echo "<br>当前行数为：".__LINE__;
	echo "<br>当前PHP版本信息为：".PHP_VERSION;
	echo "<br>当前操作系统为：".PHP_OS;
	//测试定义
	define("MESSAGE","能看到一次");
	echo "<br>".MESSAGE."<br>".Message;
	define("COUNT","能看到多次",true);
	echo "<br>".COUNT."<br>".Count."<br>".constant("Count")."<br>".(defined("MESSAGE"));
	//测试全局global
	$a="hello PHP";
	function example(){
		global $a;
		echo "<br>在函数内部a的值为：".$a."<br>";
	}
	example();
	//测试静态变量
	function example2(){
		static $a=10;
		$a+=1;
		echo"<br>静态变量a的值为：".$a;
	}
	example2();
	example2();
	example2();
	//可变变量
	$a="lqh";
	$$a="mmgdh";
	echo "<br>".$a."<br>";
	echo $$a."<br>";
	echo $lqh;
	?>
	
</body>
</html>