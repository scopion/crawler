
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>tff字体数字转换</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi, minimal-ui">
  </head>
  
  <body>
  <div id="app" data-server-rendered="true">
    <div class="index-page">
		<div style="min-height: 350px">
			<div class="special-course-view" data-v-294d1676>
				<div class="course__title" data-v-2c02addf>
				<h3 data-v-2c02addf>tff字体数字转换</h3>
				</div> 
				<div class="subject-teacher" data-v-2c02addf>
					<div class="xue-card-info" data-v-2c02addf>
						<div class="xue-card-subject-avatar xue-avatar-style1" data-v-2c02addf>
							<span data-v-2c02addf>
								<img src="111.png" data-v-2c02addf>
							</span>
						</div> 
					</div> 
				</div>
				<div class="xue-course-start" data-v-2c02addf>
				<style type="text/css">@font-face {font-family: test; src:url(test.ttf) format('truetype'); }
				.test{ font-family: test!important; };</style>				
<?php
header('Content-type:text/html; charset=UTF-8');
$servername = "localhost";
$username = "crawler";
$password = "hV1l0Sol";
 
function n2n($input) {
$s=array('1','2','3','4','5','6','7','8','9','0');
$r=array("3","1","5","2","4","7","6","8","9","0");
$length=strlen($input);
for($i=0;$i<$length;$i++){
for($j=0;$j<10;$j++){
if($s[$j]==$input[$i]){
$input[$i]= str_replace($s[$j], $r[$j], $input[$i]);
break;
}
}
}
return $input;
}

// 创建连接
$mysqli = new mysqli($servername, $username, $password,'crawler');
// 检测连接
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
} 
echo "<!--连接成功-->";
//    define('DB_HOST','localhost');
//    define('DB_USER','root');
//    define('DB_PWD','345823');//密码
//    define('DB_NAME','trigkit');
//
//    //连接数据库
//    $connect = mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysql_error());
//
//    //选择指定数据库，设置字符集
//    mysql_select_db(DB_NAME,$connect) or die('数据表连接错误，错误信息：'.mysql_error());
//    mysql_query('SET NAMES UTF8') or die('字符集设置出错'.mysql_error());
// Get input
$id = $_REQUEST[ 'id' ];
//mysql_query('SET NAMES UTF8') or die('字符集设置出错'.mysql_error());
mysqli_set_charset($mysqli,utf8);
//mysqli_query('SET NAMES UTF8') or die('字符集设置出错'.mysqli_error());; 
// Check database
$query  = "SELECT classnum, price FROM crawler WHERE pageid = '$id';";
$result = mysqli_query($mysqli,  $query ) or die( '<pre>' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );
//echo $result;
// Get results
while( $row = mysqli_fetch_assoc( $result ) ) {
    // Get values
    //echo $row;
    $classnum = n2n($row["classnum"]);
    $price  = n2n($row["price"]);

    // Feedback for end user
    echo '
		<div class="xue-course-start__time" data-v-2c02addf><span class="test" data-v-2c02addf>共'.$classnum.'讲</span>
					</div> 
					<div class="xue-course-start__course-price" data-v-2c02addf>
						<span class="discount-price" data-v-2c02addf>
						    优惠价:<span class="price-unit" data-v-2c02addf>￥</span><span class="test" data-v-2c02addf>'.$price.'</span>
						</span>					
					</div>
				
				';
}
mysqli_close($mysqli);
?>

				</div>
<?php
$s = $id-1;
$x = $id+1;

echo '				
<a href="test7.php?id='.$s.'">上一篇</a>
<a href="test7.php?id='.$x.'">下一篇</a>				
'
?>				
	
		
 <!----></div> <div class="footer" data-v-622986ff><div class="page-footer" data-v-622986ff><div class="foot" data-v-622986ff><span class="left" data-v-622986ff><span data-v-622986ff>使用字体文件对数字进行改写，后端进行相关处理以较正</span><br> <span data-v-622986ff>注册</span></span> <span class="right" data-v-622986ff><a href="/index/" data-xeslog-params="key=xeslog-index-touch&amp;action=click-index-touch&amp;click_id=3.11.1&amp;api_id=&amp;target_id=3.1.0" class="router-link-exact-active router-link-active" data-v-622986ff>首页</a>
        |
        |
    </div></div></div> <!----></div>
  </body>
</html>

