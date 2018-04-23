<?php 
	$conn = mysqli_connect('localhost','root','','md');
	
	if (isset($_POST['inti']) && isset($_POST['branch']) && isset($_POST['desig']) ) {
		
		$inti  = $_POST['inti'];
		$branch  = $_POST['branch'];
		$desig  = $_POST['desig'];

		if (!empty($inti) && !empty($branch) && !empty($desig) ) {
			
			$query = "INSERT INTO reg(`inti`,`branch`,`desig`) VALUES('".$inti."','".$branch."','".$desig."') ";
			echo $query;
			$res = mysqli_query($conn,$query);
			if ($res) {
				echo "done";
			}else{
				echo mysql_error();
			}

		}
	}

 ?>