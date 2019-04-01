<?php 
	

	$view=" select * from department where active='active' ";
	$ret=mysqli_query($db, $view);
	if ($db->query($view)==TRUE) {
		echo "";
	} else {
		$db->error;
	}
	

?>