<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
<div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="../logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li>
                <a href="../dashboard.php">Dashboard</a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="../add_classes.php">Add Class</a>
                    <a href="../manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="../add_students.php">Add Students</a>
                    <a href="../manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="../add_results.php">Add Results</a>
                    <a href="../manage_results.php">Manage Results</a>
                </div>   
            </li>
            <li>
                <a href="../document.php">Documents</a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="report.php" class="dropbtn">Events &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="index.php">Add Events</a>
                    <a href="edit.php">Edit Events</a>
                    <a href="delete.php">Delete Events</a>
                </div>   
            </li> 
        </ul>
    </div>
    <?php include('createpdf.php') ?>



<div class="container">
<center>

<h3 style="padding: 15px;">Events</h3>

   <div class="table-responsive table-hover table-bordered col-12 " >

    <table border="1" class="table " >
 <thead > 
   <tr class="table-primary">
          
               <th width="6%">Name</th>
               <th width="4%">Event</th>
               <th width="2%">Email</th>
               <th width="1%">Class</th>
               <!-- <th width="1%">Gender</th> -->
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
<?php include('footer.php'); ?>
</body>
</html>




