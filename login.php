<?php  
    include("config.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername=stripslashes($_POST['username']);
        $mypassword=stripslashes($_POST['username']);
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = " select * from user where user_name= '$myusername' AND password = '$mypassword' ";
        $result= mysqli_query($db,$sql);

        if(!$result){
            printf("error: %s\n", mysqli_error($db));
            exit();
        }
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // $active=$row['active'];

        $count = mysqli_num_rows($result);
        if($count == 1){
            
            $_SESSION['login_user']=$myusername;
            header("location: welcome.php");

        }else{
            $error = "your login name or password is incorrect";
            echo $error;
        }
    }
?>