<?php  
	include("config.php");
	
	if( isset($_POST['dep']) && isset($_POST['course'])){

		$dep= $_POST['dep'];
		$course= $_POST['course'];
		
		// mysqli_select_db('user');

		// $selectdata = " select * from section where batch='$name' order by year asc";
		$selectdata = " SELECT * FROM instructor WHERE department='$dep' and course='$course' order by name asc";


		$query = mysqli_query($db,$selectdata);
	

		echo "<option>--select section--";
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			echo "<option>".$row['name']."</option>";
		}
	}
?>