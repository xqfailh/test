<?php
include("./fffffffflag.php");
error_reporting(0);
if (isset($_GET['a']) and isset($_GET['b'])) {
	if ($_GET['a'] == $_GET['b']) {
		die('a can\'t be b');
	}
	elseif (md5($_GET['a']) === md5($_GET['b'])) {
		die('Flag:'.$flag.'
		Pri:'.$Pri);
	}
	elseif (md5($_GET['a']) == md5($_GET['b'])) {
		die('Pri:'.$Pri);
	}
}
else
{
	print '无参数';
	//隐藏注释
}
?>
