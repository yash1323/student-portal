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
<center>

<h3 style="padding: 10px;">Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit.php' method='post'>
  <div class="form-group row">
    <label for="name" class="col-3">Name:</label>
    <input type="text" class="form-control col-8" id="name" name="name" placeholder="Enter name" required>
 
  </div>
  <br>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-3">Email address:</label>
    <input type="email" class="form-control col-8" id="email" name="email" placeholder="Enter email" required>
 
  </div>
  <br>
  <div class="form-group row">
    <label for="title" class="col-3">Event:</label>
    <input type="text" class="form-control col-8" id="title" name="title" placeholder="Enter event" required>
   
  </div>
  <br>
<div class="form-group row">
    <label for="Year" class="col-3">Class:</label>
    <input type="int" class="form-control col-8" id="Year" name="Year" placeholder="Enter Class" required>
   
  </div>
  <br>
  <!-- <div class="form-group row">
    <label for="title" class="col-3">Gender:</label>
     <label class="col-4">male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div> -->

    <div class="form-group row">
    <label for="title" class="col-3">From Date:</label>
    <input type="date" class="form-control col-8" id="fromdate" name='fromdate'  required>
   
  </div>
  <br>
  <div class="form-group row">
    <label for="title" class="col-3">To Date:</label>
    <input type="date" class="form-control col-8" id="todate" name='todate'  required>
   
  </div>
  <br>
  <div class="form-group row">
    <label for="Year" class="col-3">No. of People:</label>
    <input type="int" class="form-control col-8" id="people"  name='people' placeholder="Enter number of people" required>
   
  </div>
  <br>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" required>
      <a href data-toggle="modal" data-target=".bd-example-modal-lg"> Agree to terms and Condtions </div>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div style="color: white"><p>
   Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.

It’s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, and where you maintain your legal rights against potential app abusers, and so on.

Terms and Conditions are also known as Terms of Service or Terms of Use.

This type of legal agreement can be used for both your website and your mobile app. It’s not required (it’s not recommended actually) to have separate Terms and Conditions agreements: one for your website and one for your mobile app.
</p>

    </div>
  </div>
</a>
    </label>
  </div>
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  &nbsp;&nbsp;
  <button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>
</body>
</html>
<?php  include("dbconnect.php"); ?>
<!-- <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div> -->

    