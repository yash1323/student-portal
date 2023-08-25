<?php
    include("init.php");
    //display home deatails in homepage
    
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>Student Portal</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
        .maindiv{
            margin-top:17%;
            margin-left:50%;
        width: 70%;
        height: 500px;
      
     
      
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        animation: slider 9s infinite linear;
        box-shadow: 1px 2px 10px 5px white;
        }
        @keyframes slider {
        0%{ background: url('1.jpg'); background-size: 100% 100%; }
        10%{ background: url('2.jpg'); background-size: 100% 100%; }
        20%{ background: url('3.jpg'); background-size: 100% 100%; }
        30%{ background: url('1.jpg'); background-size: 100% 100%; }
        40%{ background: url('2.jpg'); background-size: 100% 100%; }
        50%{ background: url('3.jpg'); background-size: 100% 100%; }
        60%{ background: url('1.jpg'); background-size: 100% 100%; }
        7%{ background: url('2.jpg'); background-size: 100% 100%; }
        80%{ background: url('3.jpg'); background-size: 100% 100%; }
        90%{ background: url('1.jpg'); background-size: 100% 100%; }
        100%{ background: url('2.jpg'); background-size: 100% 100%; }
    }
    footer{
        padding:20px;
        text-align:center;
        font-size:25px;
        height:0%;
        background-color:skyblue;
       font-family:times;
       font-weight:bold;
        color:black;
        margin-top:10%;
    }
    </style>
</head>
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
<center>
    <div class="maindiv">
</center>
</div>
<center>
  
<?php include('events/createpdf.php') ?>

<h2 style="padding: 15px;"><marquee bgcolor="white" direction="right"><font color="red">Events</font></marquee></h2>

   <div class="table-responsive table-hover table-bordered col-12 " >

    <table border="1" class="table " >
 <thead > 
   <tr class="table-primary">
          
               <th width="1%">Name</th>
               <th width="4%">Event</th>
               <th width="2%">Email</th>
               <th width="1%">Class</th>
           
               <th width="4%">From date</th>
               <th width="4%">To date</th>
               <th width="4%">No of people</th>
           </tr>


       <tbody>
           <?php
           echo fetch_data();
           ?>
       </tbody>
       </table>
       <div class="col-md-12 " align="right">
           
       </div>
       </thead>
       </table>
   </div>
   </div>
</center>
</div>
    </div>

<footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>

