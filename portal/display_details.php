<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>Student Portal</title></head>
    <style>
     footer{
         margin-top:4%;
        padding:20px;
        text-align:center;
        font-size:25px;
        height:0%;
        background-color:skyblue;
       font-family:times;
       font-weight:bold;
        color:black;
    
    }
	.tb{ 
	margin: 0 auto 13px;
	} 
	
	.tb tr,td{
	border: 3px groove lightblue;
	}
    </style>
<body>
        
    <div class="title">
        <a href="Home.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Student Portal</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li class="details" onclick="toggleDisplay('1')">
                <a href="#" class="displaybtn">Student Details &nbsp
                    
                </a>
            </li>
			
			<li>
                <a href="home.php">Homepage</a>
            </li>
            
            <li class="result" onclick="toggleDisplay('2')">
                <a href="student.php" class="resultbtn">Result &nbsp
                    
                </a>
            </li>
            <li class="document" onclick="toggleDisplay('3')">
                <a href="documents_download.php" class="documentbtn">Documents &nbsp
                   
                </a>
            </li>
			<li class="aboutus" onclick="toggleDisplay('4')">
                <a href="aboutus/aboutus.php" class="aboutbtn">About us &nbsp
                    
                </a>
            </li>
			<li class="document" onclick="toggleDisplay('5')">
                <a href="contact_us.php" class="contactbtn">Contact us &nbsp
                    
                </a>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
			include("init.php");
            include('session1.php');
			$db = mysqli_select_db($conn,'simplestresult');
			$user_check1 = $_SESSION['login_user1'];
			  $user_class = $_SESSION['login_userclass'];
			$sql = "SELECT rno,name,class_name,phone,age,School_Address FROM students WHERE rno='$user_check1' and class_name='$user_class'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result))
			{
				?>
				<h2 style="border:white; border-width:5px;border-style:solid;">
				<center><h2>Student Details</h2><center>
				<table class="tb">
				<tr>
				<td><span>Roll Number</td><td>:-</td><td> <?php echo $row['rno']; ?></span></td>
				</tr>
				<tr>
				<td><br><span>Name</td><td>:-</td><td> <?php echo $row['name']; ?></span></td>
				</tr>
				<tr>
				<td><br><span>Class Name</td><td>:-</td><td> <?php echo $row['class_name']; ?></span></td>
                </tr>
				<tr>
				<td><br><span>Phone Number</td><td>:-</td><td> <?php echo $row['phone']; ?></span></td>
                </tr>
				<tr>
				<td><br><span>Age</td><td>:-</td><td> <?php echo $row['age']; ?></span></td>
				</tr>
				<tr>
				<td><br><span>School Address</td><td>:-</td><td> <?php echo $row['School_Address']; ?></span></td>
				</h2>
				</tr>
				</table>
				<?php
			}
			?>
    </div>

    <footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>