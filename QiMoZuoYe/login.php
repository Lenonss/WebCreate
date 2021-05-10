<meta charset="utf-8">
<?php
$Uid = $_POST['uid'];
$Upwd = $_POST["upwd"];
JumpToMenu();
//根据输入账号密码的正确与否来判断是否跳转到menu页面
function JumpToMenu() 
{
	global $Uid;
	global $Upwd;
	if($Uid=="userid"&&$Upwd=="userpwd")
	{
		header('Location: menu.html');//跳转到主菜单
	}
	else
	{
		echo "<script> alert('账号密码错误');</script>";
		header('Location: index.php');
	}
}
?>
<body>
	<?php echo $Uid?>
</body>