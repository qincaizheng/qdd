<?php
function con(){
	$con=mysqli_connect("localhost","root","qcz123654");
    if (!$con)
  	{
  	die('Could not connect: ' . mysqli_error());
  	}
    mysqli_select_db($con,"my");
  	return $con;
}  


  function select($z,$a,$b,$c){
  	$con=con();
  	$result = mysqli_query($con," SELECT * FROM ".$a." WHERE ".$b." = ".$c);
  	while($row = mysqli_fetch_array($result))
  		{
  			echo $row[$z];
  	}
  }
  function add($a,$b){
  	$con=con();
  	$ks=$vs="";
  	foreach ($b as $k => $v) {
  		if($ks == ""){
  			$ks=$k;
  			$vs=$v;
  		}else{
  			$ks.=",".$k;
  			$vs.=",".$v;
  		}
  		
  	}
  	$sql="INSERT INTO ".$a." (".$ks.") VALUES (".$vs.")";
	mysqli_query($con,$sql);
	$sql="SELECT * FROM ".$a;
	$result = mysqli_query($con,$sql);
  	while($row = mysqli_fetch_array($result))
  		{
  			echo $row[0];
  	}
  }
  function delete($a,$b,$c){
  	$con=con();
  	$sql="delete from ".$a." where ".$b." = ".$c;
  	mysqli_query($con,$sql);
  	$sql="SELECT * FROM ".$a;
	$result = mysqli_query($con,$sql);
   	while($row = mysqli_fetch_array($result))
  		{
  			echo $row[0];
  	}
  }
  function update($a,$b,$c,$d,$e){
  	$con=con();
  	$sql="update " .$a." set ".$b." = '".$c."' where ".$d." = '".$e."'";
  	mysqli_query($con,$sql);
	$sql="SELECT * FROM ".$a;
	$result = mysqli_query($con,$sql);
  	while($row = mysqli_fetch_array($result))
  		{
  			echo $row[0];
  	}
  }
  function sql($sql,$a){
  	$con=con();
  	mysqli_query($con,$sql);
	$sql="SELECT * FROM ".$a;
	$result = mysqli_query($con,$sql);
  	while($row = mysqli_fetch_array($result))
  		{
  			echo $row[0];
  	}
  }
?>