<?php 
require_once("connect.php");
$fname=$_POST['a'];
$mob=$_POST['b'];
$email=$_POST['c'];
$sql="INSERT INTO user VALUES('','$fname','$mob','$email')";
$res=mysqli_query($db,$sql);
if($res){
echo "true";
}else{
echo "false";
}
?>