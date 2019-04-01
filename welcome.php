<?php  
	include('session.php');
	include('view.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		function loaddata()
		{
			var name=document.getElementById( "department" ).value;
			
			console.log(name);
			if(name)
			{
				$.ajax({
					type: 'post',
					url: 'select.php',
					data:{
						user_name:name,
					},
					success: function(data){
						console.log(data);
						$('#batch').html(data);
					}
				});
			}else{
				$('#batch').html("<option>please enter correct word</option>");
			}
		}
	</script>
	<script type="text/javascript">
		function bsection()
		{
			var batch=document.getElementById( "batch" ).value;
			var department=document.getElementById( "department" ).value;
			console.log(department);

			if(batch)
			{
				$.ajax({
					type: 'post',
					url: 'section.php',
					data:{
						batch:batch,
						dep:department,
					},
					success: function(data){
						console.log(data);
						$('#section').html(data);
					}
				});
			}else{
				$('#batch').html("<option>please enter correct word</option>");
			}
			
		}
	</script>
	<script type="text/javascript">
		function calcroom()
		{
			var batch=document.getElementById( "batch" ).value;
			var department=document.getElementById( "department" ).value;
			var sec=document.getElementById( "section" ).value;

			if(batch)
			{
				$.ajax({
					type: 'post',
					url: 'room.php',
					data:{
						batch:batch,
						dep:department,
						sec:sec,
					},
					success: function(data){
						console.log(data);
						$('#room').html(data);
					}
				});
			}else{
				$('#batch').html("<option>please enter correct word</option>");
			}
		}
	</script>
	<script type="text/javascript">
		function caurses()
		{
			
			var department=document.getElementById( "department" ).value;
			

			if(batch)
			{
				$.ajax({
					type: 'post',
					url: 'course.php',
					data:{
						dep:department,

					},
					success: function(data){
						console.log(data);
						$('#course').html(data);
					}
				});
			}else{
				$('#batch').html("<option>please enter correct word</option>");
			}
		}
	</script>
	<script type="text/javascript">
		function instructors()
		{
			var department=document.getElementById( "department" ).value;
			var course=document.getElementById( "course" ).value;
			
			if(batch)
			{
				$.ajax({
					type: 'post',
					url: 'instructor.php',
					data:{
						dep:department,
						course:course,
					},
					success: function(data){
						console.log(data);
						$('#instructor').html(data);
					}
				});
			}else{
				$('#batch').html("<option>please enter correct word</option>");
			}
		}
	</script>
</head>
<body>
	<h2>welcome <?php echo $login_session;?></h2>
	<h3><a href="logout.php">Logout</a></h3><br>
	<hr>
	<form action="add.php" method="post">
		<label>Semister:</label>
		<select name="semister">
			<option value="empty">--Select Semister--</option>
			<option>1<sup>st</sup> Semister</option>
			<option>2<sup>st</sup> Semister</option>
		</select>
		
		<span> | </span>
		<label>Department:</label>
		<select name="department" id="department" onchange="loaddata();">
			<?php  
				echo "<option>--select department--";
				while ($row=mysqli_fetch_array($ret)) {
					$name=$row['name'];
					echo "<option>".$name."</option>";
				}
			?>
		</select>
		<span> | </span>
		<label>Batch:</label>
		<select id="batch" name="batch" onchange="bsection();">
				<!-- <?php //print("$output");?> -->
		</select>
		<span> | </span>
		<label>Section:</label>
		<select id="section" name="section" onchange="calcroom();">
			
		</select>
		<span> | </span>
		<label>Room:</label>
		<select id="room" name="room" onchange="caurses();">
			<option value="empty">--Select Room--</option>
		</select>
		<span> | </span>
		<label>Course:</label>
		<select name="course" id="course" onchange="instructors();">
						
		</select><br><br>
		<span> | </span>
		<label>Instructor:</label>
		<select id="instructor" name="instructor">
			
		</select>
		<span> | </span>
		<label>Date:</label>
		<select name="date">
			<option value="empty">--Select Date--</option>
			<option>monday</option>
			<option>tusday</option>
			<option>wdensday</option>
		</select>
		<span> | </span>
		<label>Opening Hour</label>
		<input type="time" name="o_h">
		<span> | </span>
		<label>Closing Hour</label>
		<input type="time" name="c_h">
		<input type="submit" name="" value="save">
	</form>
	
</body>
</html>