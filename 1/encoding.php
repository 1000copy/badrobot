<?
$u = $_POST["url"];
if ($u){
	$file = file_get_contents($u);
	// $file ="wod打开";
	// echo $file;
	$r =  mb_detect_encoding ($file);
	if (FALSE==$r)
		echo "error";
	else
		echo $r ;
	die("signed by 1000copy !");
}

?>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <!-- <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />  -->
 <title>encoding guess</title>
</head>
<body>
	<form method="post" action="<?echo $_SERVER["PHP_SELF"];?>">
		<div style="padding-left:50px;">
		    <br/>URL<br/>
		    <input name="url" type="text" size="24" maxlength="60" value="http://125.69.76.113/zhang"/><br/><br/>		   
		    <input name="user_login" class="butt" type="submit" value="Guess"/>
		</div>
	</form>
</body>
</html>