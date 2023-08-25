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
                <a href="display_details.php" class="displaybtn">Student Details &nbsp
                    
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
        $user_check1 = $_SESSION['login_user1'];
$user_class = $_SESSION['login_userclass'];
        $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$user_check1' and class_name='$user_class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `class`,`p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$user_check1'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
			$class=$row['class'];
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "<center><h2>no result</h2></center>";
            exit();
        }
    ?>

    <div class="container">
        <!-- <div class="details">
            <span>Name:</span> <?php echo $name ?> <br>
            <span>Class:</span> <?php echo $class; ?> <br>
            <span>Roll No:</span> <?php echo $rn; ?> <br>
        </div>

        <div class="main">
            <div class="s1">
                <p>Subjects</p>
                <p>Paper 1</p>
                <p>Paper 2</p>
                <p>Paper 3</p>
                <p>Paper 4</p>
                <p>Paper 5</p>
            </div>
            <div class="s2">
                <p>Marks</p>
                <?php echo '<p>'.$p1.'</p>';?>
                <?php echo '<p>'.$p2.'</p>';?>
                <?php echo '<p>'.$p3.'</p>';?>
                <?php echo '<p>'.$p4.'</p>';?>
                <?php echo '<p>'.$p5.'</p>';?>
            </div>
        </div>

        <div class="result">
            <?php echo '<p>Total Marks:&nbsp'.$mark.'</p>';?>
            <?php echo '<p>Percentage:&nbsp'.$percentage.'%</p>';?>
        </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div> -->


        <div class="main2">
		<center>
            <table>
                <thead>
                  <tr>
                    <td> S.N </td>
                    <td colspan="10">Subjects </td>
                    <td rowspan="2"> Obtained Marks </td>
                  </tr>   
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td colspan="10">Science </td>
                    <td> <?php echo '<p>'.$p1.' / 100</p>';?> </td>
                  </tr>
                
                  <tr>
                    <td> 2 </td>
                    <td colspan="10">Maths </td>
                    <td> <?php echo '<p>'.$p2.' / 100</p>';?></td>
                  </tr>
            
                  <tr>
                    <td> 3 </td>
                    <td colspan="10">English </td>
                    <td> <?php echo '<p>'.$p3.' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 4 </td>
                    <td colspan="10">Social Science </td>
                    <td> <?php echo '<p>'.$p4.' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 5 </td>
                    <td colspan="10">Gujarati </td>
                    <td> <?php echo '<p>'.$p5.' / 100</p>';?> </td>
                  </tr>
                </tbody>
            
                
                <tfoot>
                    
                    <tr>
                    <td>#</td>
                    <td colspan="10" class="footer">Total Marks Obtained</td>
                    <td colspan="2"> <?php echo $mark;?> / 500 </td>
                    </tr>
                    
                    <tr>
                    <td colspan="10" class="footer">Percentage</td>
                    <td colspan="2"><?php echo $percentage;?>% </td>
                    </tr>

                    <tr>
                        <td colspan="10" class="footer">Student's Name</td>
                        <td colspan="2"><?php echo $name;?> </td>
                        </tr>

                    <tr>
                        <td colspan="10" class="footer">Class</td>
                        <td colspan="2"><?php echo $class;?> </td>
                        </tr>
                
                        <tr>
                        <td colspan="10" class="footer">Roll</td>
                        <td colspan="2"><?php echo $user_check1;?> </td>
                        </tr>
                </tfoot>
              </table>
			</center>
              <div class="row">
                  <div class="container">
                  <div class="button">
                    <button class="button" onclick="window.print()">Print Result</button>
        </div>
                  </div>
              </div>
        </div>
    </div>
	</div>
  <footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>

<style>
  
  td {
    border: 1px solid #726E6D;
    padding: 7px;
  }
  
  thead{
    font-weight:bold;
    text-align:center;
    background: #625D5D;
    color:white;
  }

  .button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 3px 6px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  
  table {
    border-collapse: collapse;
  }
  
  .footer {
    text-align:right;
    font-weight:bold;
  }
  
  tbody >tr:nth-child(odd) {
    background: #D1D0CE;
  }
  
  </style>