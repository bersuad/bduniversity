<?php  
	include("config.php");
	
	if( isset($_POST['dep'])){

		
		$dep= $_POST['dep'];
		



		// mysqli_select_db('user');

		// $selectdata = " select * from section where batch='$name' order by year asc";
		$selectdata = " SELECT * FROM course WHERE department='$dep' order by course asc";


		$query = mysqli_query($db,$selectdata);
	

		echo "<option>--select section--";
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			echo "<option>".$row['course']."</option>";
		}
	}
?>