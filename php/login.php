<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
$username=$_POST['username'];
$password=$_POST['password'];
if ($username=='小乔'&$password=='小乔') {
	echo "亲亲宝贝"
}elseif ($username=='qdd'&$password=='qdd') {
	echo "<script> window.open('../html/kaifa.html','_self') </script>";
}else{

echo "未开发";
}

?>
</body>

</html>

