<?php 
$conn = mysqli_connect('localhost','root','','md');

	$query = "SELECT DISTINCT `inti` FROM `reg`  ";
	$res = mysqli_query($conn,$query);
	// echo $query;
	// $row = mysqli_fetch_row($res);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"  >
 	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" ></script>
 </head>
 <script type="text/javascript">
 	function fetch_branch(val)
	{
	 $.ajax({
	 type: 'POST',
	 url: 'fetch_data.php',
	 data: {
	  get_branch:val
	 },
	 success: function (response) {
	  document.getElementById("branch").innerHTML=response; 
	 }
	 });
	}
	
	function fetch_desig(val)
	{
		var inti = document.getElementById('inti').value;
		console.log(inti);
	 $.ajax({
	 type: 'POST',
	 url: 'fetch_data.php',
	 data: {
	  get_desig:val,
	  inti:inti,
	 },
	 success: function (response) {
	  document.getElementById("desig").innerHTML=response; 
	 }
	 });
	}
	function search(){
		var key = document.getElementById('st').value;
		$.ajax({
			type:'POST',
			url:'fetch_data.php',
			data:{
				keyword:key,
			},
			success:function(response){
				document.getElementById('res').innerHTML=response;
			}
		});
	}
 </script>
 <body>
 <div class="container">
 	<div class="card">
 		<div class="card-header">
 			Search
 		</div>
 		<div class="card-body">
 			<select class="custom-select" id="inti" onchange="fetch_branch(this.value);">
 				<?php 

 				while ($row = mysqli_fetch_assoc($res)) {
				    $row =  $row["inti"];
				    echo "<option value='".$row."'> $row </option>";
				   
				}


 				 ?>
			 
			</select>
			<hr>
			<select id="branch" class="custom-select" onchange="fetch_desig(this.value);" >
				
			</select>
			<hr>
			<select id="desig" class="custom-select"  >
				
			</select>
 		</div>
 	</div>
 </div>
<div class="container">
	<div class="card">
		<div class="card-header">
			seach keyword
		</div>
		<div class="card-body">
			<input type="text" name="st" id="st" class="form-control" onkeyup="search();">
			<div id="res" ></div>
		</div>
	</div>
	
</div>
 </body>
 </html>