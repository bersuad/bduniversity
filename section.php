<?php  
	include("config.php");
	
	if( isset($_POST['batch']) && isset($_POST['dep'])){

		$name= $_POST['batch'];
		$dep= $_POST['dep'];



		// mysqli_select_db('user');

		// $selectdata = " select * from section where batch='$name' order by year asc";
		$selectdata = " SELECT * FROM section WHERE batch='$name' and departmemt='$dep' order by batch desc";


		$query = mysqli_query($db,$selectdata);
	

		echo "<option>--select section--";
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			echo "<option>".$row['section']."</option>";
		}
	}
?>