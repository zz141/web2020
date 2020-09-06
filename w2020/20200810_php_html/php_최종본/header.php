<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>php</title>
	<style>
		/*reset*/
		*{padding: 0;margin: 0;}
		li{list-style:none}
		a:link,a:visited{color:#000;text-decoration: none;}
		.clearfix:after{content:"";display: block;clear: both;}

		/*header*/
		#header{
			width: 960px;margin: 0 auto;
			background:skyblue;
		}
		#header h1{
			width: 150px;margin: 0 auto;
			text-align: center;
			background: #ff0000;
		}
		.gnb{}
		.gnb>ul>li{float: left;width: 20%;}
		.gnb>ul>li>a{display: block;line-height: 40px;text-align: center;}
		.gnb>ul>li>a:hover{background-color:#ddd;}
		.gnb>ul>li>a.on{background-color:#f0f;color:white}
		/*visual slide*/
		.visual{height: 300px;background:pink;}

		/*section*/
		section#container_wr{
			width: 960px;height: 1000px;
			margin: 0 auto;background-color: #555;
		}
		

		.sub{height: 100px;text-align: center;line-height:100px;color:white}

		.sub.company{background-color:blue;}
		.sub.product{background-color:green;}

		/*footer*/
		footer#footer{
			height: 100px;background-color:skyblue;
		}



	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function active(i){
			$(".gnb>ul>li").eq(i).find("a").addClass("on");
		}
	</script>
	
</head>
<body>
	<header id="header">
		<h1><a href="index.php">LOGO</a></h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="company.php">menu1</a></li>
				<li><a href="product.php">menu2</a></li>
				<li><a href="#">menu3</a></li>
				<li><a href="#">menu4</a></li>
				<li><a href="#">menu5</a></li>
			</ul>
		</nav>
	</header>