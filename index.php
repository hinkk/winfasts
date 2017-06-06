<?php 
	include('include/function.php'); 
	session_start(); 
?>
<html>
<head>
<title><?php echo $lang['crmtitle']; ?></title>
<meta content="<?php echo $lang['crmtitle']; ?>" name="Description">
<meta content="<?php echo $lang['crmtitle']; ?>" name="Keywords">
<meta name="viewport" content="width=device-width, initial-scale=0.8"> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/style.css?v=<?php echo $cssVersion ;?>" type="text/css">
</head>
<frameset rows="*,18" frameborder="no" border="0" framespacing="0">
	<frameset rows="50,*" frameborder="no" border="0" framespacing="0" cols="*">
		<frame name="topFrame" scrolling="no" noresize src="top.php" > 
		<frame name="mainFrame" src="logon.php"> 
	</frameset>
	<frame src="bottom.php" name="bottom" scrolling="no" noresize>
</frameset>
<noframes>
<body bgcolor="#ffffff" text="#000000">
</body>
</noframes>
</html>