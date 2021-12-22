<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background: #f1f1f1;">

<div class="" style="width: 400px;min-height: 100px;background: #fff;margin: 10px auto;padding: 20px;">
<center><h1>Add Record</h1></center>
	<center><p><input type="text" id="fname" placeholder="name"></p></center>
	<center><p><input type="number" id="mob" placeholder="mobile No"></p></center>
	<center><p><input type="email" id="email" placeholder="email"></p></center>
	<center><p><input type="button" id="btn" value="add"></p></center>
</div>
<div  style="width: 400px;min-height: 100px;background: #fff;margin: 10px auto;padding: 20px;">
	<center><table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>mobile No</th>
			<th>Email</th>
		</tr>
		<tbody id="con">
			
		</tbody>
	</table></center>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			var fname=$('#fname').val();
			var mob=$('#mob').val();
			var email=$('#email').val();
			if(fname!="" && mob!="" && email!=""){
				$.post('lib/insert.php',{a:fname,b:mob,c:email},function(res){
				if(res="true"){
					alert("inserted successfuly");
					load_data();
					form_reset();

				}else{
					alert("insert failed");
				}
			});
			}else{
				alert("All fields are required");
			}
		});
		load_data();
		function load_data(){
			$('#con').html("");
			$.get('lib/view.php',{},function(res2){
			$('#con').append(res2);
		});
		}
		
		function form_reset(){
			$('#fname').val("");
			$('#mob').val("");
			$('#email').val("");
		}

		// $('.delete').click(function(){
		// 	alert("ok");
		// });
		$('#con').on("click",".delete",function(){
			var id=$(this).attr("data-id");
			if(confirm("Are you sure you want to delete this?")){
				$.post('lib/delete.php',{id:id},function(res3){
					if(res3="true"){
						alert("Deleted successfuly");
						load_data();
					}else{	
						alert("Delete failed");
					}
				});
			}else{

			}
		});

	});
</script>
</body>
</html>