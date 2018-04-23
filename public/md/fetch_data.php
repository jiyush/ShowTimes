<?php 
 $conn = mysqli_connect('localhost','root','','md');
if(isset($_POST['get_branch']))
{
 

 $inti = $_POST['get_branch'];
 $res= mysqli_query($conn,"SELECT DISTINCT  `branch` from `reg` where `inti` ='".$inti."'");
 			while ($row = mysqli_fetch_assoc($res)) {
				    $row =  $row['branch'];
				    echo "<option value='".$row."'> $row </option>";
				   
				}
 
}


if(isset($_POST['get_desig']) && $_POST['inti'] )
{


 $state = $_POST['get_desig'];
 $inti = $_POST['inti'];
 $res= mysqli_query($conn,"SELECT DISTINCT  `desig` from `reg` where `branch` ='".$state."' AND `inti` = '".$inti."' ");
 			while ($row = mysqli_fetch_assoc($res)) {
				    $row =  $row['desig'];
				    echo "<option value='".$row."'> $row </option>";
				   
				}
 
}

if (isset($_POST['keyword'])) {
	
	$keyword = $_POST['keyword'];

	if(!empty($keyword)){
		$query = "SELECT * FROM `search` WHERE `keyword` LIKE '%".$keyword."%' ";
	$res = mysqli_query($conn,$query);
	// echo $query;
	while($row = mysqli_fetch_assoc($res)){
		$row = $row['keyword'];
		echo "$row </br>";
	}
	}
}


 ?>