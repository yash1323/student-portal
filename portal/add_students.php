<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Student Portal</title>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Students Section</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
        <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
            <li>
                <a href="document.php">Documents</a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="events/report.php" class="dropbtn">Events &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="events/index.php">Add Events</a>
                    <a href="events/edit.php">Edit Events</a>
                    <a href="events/delete.php">Delete Events</a>
                </div>   
            </li> 
        </ul>
    </div>

    <div class="main">
        <form action="" method="post">
            <fieldset>
                <legend>Add Student</legend>
                <input type="text" name="student_name" placeholder="Student Name">
                <input type="text" name="roll_no" placeholder="Roll No">
                <input type="text" name="phone" placeholder="Phone Number">
                 <input type="text" name="age" placeholder="Age">
				 <input type="text" name="address" value="Shree Ganesh Vidhya Mandir School,Near Vishram Park Society,Vasna,Ahmedabad-380007. Phone No:- 079 3664 2822"/>
                <?php
                    include('init.php');
                    include('session.php');
                    
                    $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                        echo '<select name="class_name">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
                 <input type="password" name="password" placeholder="Password">
               
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

    <div class="footer">
    </div>
</body>
</html>

<?php

    if(isset($_POST['student_name'],$_POST['roll_no'],$_POST['phone'],$_POST['age'])) {
        $name=$_POST['student_name'];
        $rno=$_POST['roll_no'];
        $phone=$_POST['phone'];
        $age=$_POST['age'];
		$address=$_POST['address'];
        if(!isset($_POST['class_name']))
            $class_name=null;
        else
            $class_name=$_POST['class_name'];
    if(isset($_POST['password']))
    {
if(empty(trim($_POST["password"]))){
    echo '<script language="javascript">';
    echo 'alert("Enter a Password!!")';
    echo '</script>';  
    }  else{
        $password = trim($_POST["password"]);
    }
}
        // validation
        if (empty($name) or empty($password) or empty($phone) or empty($age) or empty($rno) or empty($class_name) or preg_match("/[a-z]/i",$rno) or !preg_match("/^[a-zA-Z ]*$/",$name)) {
            if(empty($name))
                echo '<p class="error">Please enter name</p>';
            if(empty($class_name))
                echo '<p class="error">Please select your class</p>';
                if(empty($password))
                echo '<p class="error">Please enter Password </p>';
                if(empty($phone))
                echo '<p class="error">Please enter Phone Number </p>';
                if(empty($age))
                echo '<p class="error">Please enter Age </p>';
            if(empty($rno))
                echo '<p class="error">Please enter your roll number</p>';
			if(empty($address))
                echo '<p class="error">Please enter your school address</p>';
                if(empty($password))
                echo '<p class="error">Please enter your password</p>';
            if(preg_match("/[a-z]/i",$rno))
                echo '<p class="error">Please enter valid roll number</p>';
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    echo '<p class="error">No numbers or symbols allowed in name</p>'; 
                  }
            exit();
        }
        
        $sql = "INSERT INTO `students` (`name`, `rno`, `class_name` , `password`,`phone`,`age`,`School_Address`) VALUES ('$name', '$rno', '$class_name', '$password', '$phone', '$age','$address')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Success!!")';
            echo '</script>';
        }

    }
?>