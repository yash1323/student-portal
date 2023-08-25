<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
footer{
      
        padding:30px;
        text-align:center;
        font-size:25px;
      
        background-color:skyblue;
       font-family:times;
       font-weight:bold;
        color:black;
    
    }
</style>
<body>
    <div class="title">
        <span>Student Portal</span>
    </div>

    <div class="main">
        <div class="login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Admin Login</legend>
                    <input type="text" name="userid" placeholder="Username" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <input type="submit" value="Login">
                </fieldset>
            </form>    
        </div>
        <div class="student_login">
            <form action="" method="post" name="slogin">
                <fieldset>
                    <legend class="heading">Student Login</legend>

                    <input type="text" name="rno" placeholder="Roll No" autocomplete="off">
                    <input type="password" name="s_password" placeholder="Password" autocomplete="off">
					<?php
                        include('init.php');

                        $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                            echo '<select name="class">';
                            echo '<option selected disabled>--Select Class--</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>
                    <input type="submit" value="Login">
                </fieldset>
            </form>
        </div>
    </div>
    <footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $password = md5($_POST["password"]);
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
	
    
	if (isset($_POST["rno"],$_POST["s_password"],$_POST["class"]))
    {
        $rno=$_POST["rno"];
        $s_password=$_POST["s_password"];
		$class=$_POST["class"];
        $sql1 = "SELECT rno,password,class_name FROM students WHERE rno='$rno' and password = '$s_password' and class_name='$class'";
        $result1=mysqli_query($conn,$sql1);

       $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
        $count1=mysqli_num_rows($result1);
        
        if($count1==1) {
		$_SESSION['login_user1']=$rno;        
		$_SESSION['login_userclass']=$class;
		header("Location: home.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Rollno , password and class!")';
            echo '</script>';
        }
        
    }
?>

