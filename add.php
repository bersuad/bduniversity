<?php
include("config.php");
	if (isset($_POST['semister'])) {
		$semister=$_POST['semister'];
		$department=$_POST['department'];
		$batch=$_POST['batch'];
		$section=$_POST['section'];
		$room=$_POST['room'];
		$course=$_POST['course'];
		$instructor=$_POST['instructor'];
		$date=$_POST['date'];
		$o_h=$_POST['o_h'];
		$c_h=$_POST['c_h'];
	}

	if ($db->connect_error) {
		die("connection faild".$db->connect_error);
	}

	$sql="insert into programm (semister,department,batch,section,room,course,instructor,date,o_h,c_h) values ('$semister','$department', '$batch', '$section', '$room', '$course', '$instructor', '$date', '$o_h', '$c_h')";
	if ($db->query($sql)===TRUE) {
		echo "inserted";
	}else{
		echo "error";
	}
	$db->close();
?>