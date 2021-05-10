<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>导航</title>
</head>
<script>
	var PlayStatus = false;
	function onbgmBD()
	{
		var audio = document.getElementById("backAudio");
		if(!audio)
		{
			alert("音频组件未找到。");
			return;
		}
		var img;
		//处于播放状态时获取的应该是
		//"playbgm"状态
		if(PlayStatus)
		{
			img = document.getElementById("playbgm");
			if(!img)
			{
				alert("图像id未找到。");
				return;
			}
			//修改id，暂停css动画的播放
			img.id = "pausebgm";
			//停止音乐播放
			audio.pause();
			//设置播放状态
			PlayStatus=false;
		}
		else
		{
			img = document.getElementById("pausebgm");
			if(!img)
			{
				alert("图像id未找到。");
				return;
			}
			//修改id，暂停css动画的播放
			img.id = "playbgm";
			//播放背景音乐
			audio.play();
			//设置播放状态
			PlayStatus=true;			
		}
	}
</script>
<style>
	/*背景设置*/
	.BodyBack
	{
		width: 1050px;
		height: 1500px;
		background-image: url("image/backImg1.jpg");
		background-size: cover;
	}
	/*中间部分排布设置*/
	#UserID
	{
		position: absolute;
		display: block;
		color: #0015FF;
		font-size: 24px;
		top: 100px;
		left: 300px;
	}
	#UidInput
	{
		position: absolute;
		display: block;
		top: 130px;
		left: 400px;
	}
	#UserPwd
	{
		position: absolute;
		display: block;
		color: #0015FF;
		font-size: 24px;
		top: 160px;
		left: 300px;
	}
	#UpwdInput
	{
		position: absolute;
		display: block;
		top: 190px;
		left: 400px;
	}
	#LoginBtn
	{
		position: absolute;
		display: block;
		width: 100px;
		left: 434px;
		top: 250px;
	}
	/*右上角的光盘相关*/
	#pausebgm
	{
		position: absolute;
		display: block;
		width: 100px;
		height: 100px;
		top: 10px;
		right: 10px;
	}
	#playbgm
	{
		position: absolute;
		display: block;
		width: 100px;
		height: 100px;
		top: 10px;
		right: 10px;	
		/*动画设置*/
		animation-name: turn;
		animation-duration: 1s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
	}
	@keyframes turn
	{
		0%{-webkit-transform:rotate(0deg);}
		10%{-webkit-transform:rotate(36deg);}
		20%{-webkit-transform:rotate(72deg);}
		30%{-webkit-transform:rotate(108deg);}
		40%{-webkit-transform:rotate(144deg);}
		50%{-webkit-transform:rotate(180deg);}
		60%{-webkit-transform:rotate(216deg);}
		70%{-webkit-transform:rotate(252deg);}
	    80%{-webkit-transform:rotate(288deg);}
		90%{-webkit-transform:rotate(324deg);}
		100%{-webkit-transform:rotate(360deg);}
	}	
</style>
<body class="BodyBack">


<h2>PHP 验证实例</h2>
<form method="post" action="login.php"> 
	<p id="UserID">账号：</p>
	<input type="text" name="uid" id="UidInput">
   <br><br>
	<p id="UserPwd">密码：</p>
	<input type="text" name="upwd" id="UpwdInput">
   <br><br>
	<input type="submit" id="LoginBtn" value="登入"/>
</form>
	<audio id="backAudio" src="sounds/bgm_tuanzi.flac"></audio>
	<img id="pausebgm" onClick="onbgmBD()" src="image/GuanPan.png"/>
</body>
</html>
