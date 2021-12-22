<?php 
require_once("connect.php");
$id=$_POST['id'];
$sql="DELETE FROM user WHERE id='$id'";
$res=mysqli_query($db,$sql);
if($res){
echo "true";
}else{
echo "false";
}
?> 