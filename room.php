<?php  
	include("config.php");
	
	if( isset($_POST['batch']) && isset($_POST['dep']) && isset($_POST['sec'])){

		$name= $_POST['batch'];
		$dep= $_POST['dep'];
		$sec= $_POST['sec'];



		// mysqli_select_db('user');

		// $selectdata = " select * from section where batch='$name' order by year asc";
		$selectdata = " SELECT * FROM room WHERE batch='$name' and department='$dep' and section='$sec'  order by name asc";


		$query = mysqli_query($db,$selectdata);
	

		echo "<option>--select section--";
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			echo "<option>".$row['name']."</option>";
		}
	}
?>