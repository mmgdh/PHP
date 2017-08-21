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
//2017年8月21日
	//单引号、双引号、界定符
	$a="Hello!";
	echo "<br>$a"."<br>";
	echo '$a'."<br>";
	echo <<<std
	$a 
std;
	//八进制、十进制、十六进制
	$str1=1234;
	$str2=01234;
	$str3=0x1234;
	echo"<br>十进制：$str1<br>";
	echo"八进制:$str2<br>";
	echo"十六z进制:$str3<br>";
	//数组
	$array[0]="One";
	$array[1]="Two";
	$array[2]="Three";
	$Number=array(0=>'1',1=>'2',2=>'3');
	echo "<br>".$array[0]."<br>";
	echo $Number[1]."<br>";
	//检测数据类型
	$a=true;
	$b="Hello PHP";
	$c=123;
	echo"变量是否为布尔型:".is_bool($a)."<br>";
	echo"是否为字符串型:".is_string($b)."<br>";
	echo"是否为整形：".is_int($c)."<br>";
	echo"是否为浮点型：".is_float($c)."<br>";
	//三元运算符
	$a="MMGDH";
	echo(is_string($a))?$a:"LQH";
	?>
	<!--加法计算器-->
	<?php
	   if(isset($_POST['Submit']) and $_POST['number1']!=null and $_POST['number2']!=null and $_POST['Submit']=="等于"){
		   $number3=$_POST['number1']+$_POST['number2'];
	   }else{
		   $number3="空";
	   }
	?>
	<br>
	<form method="post">
		<label>
	    <input name="number1" type="text" id="number1" size="10">+
	    <input name="number2" type="text" id="number2" size="10">
	    <input name="Submit"  type="submit" id="Submit" value="等于" size="3">
		<input name="number3" type="text" id="number3" size="10" value="<?php echo $number3;?>">
	    </label>
	</form>
	
	
</body>
</html>