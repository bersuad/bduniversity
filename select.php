<?php  
	include("config.php");

	if( isset($_POST['user_name'])){

		$name= $_POST['user_name'];

		// mysqli_select_db('user');

		$selectdata = " SELECT * FROM batch WHERE department='$name' order by year desc";


		$query = mysqli_query($db,$selectdata);
	

		echo "<option>--select department--";
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			echo "<option>".$row['year']."</option>";
		}
	}
?>