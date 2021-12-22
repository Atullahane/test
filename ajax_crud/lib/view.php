<?php 
require_once("connect.php");
$sql="SELECT * FROM user";
$res=mysqli_query($db,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	# code...
	extract($row);
	echo "<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$mobile</td>
			<td>$email</td>
			<td><a href='#' class='edit' data-id='".$id."'>edit</a> | <a href='#'  class='delete' data-id='".$id."'>delete</a></td>
		  </tr>";
} 
?>