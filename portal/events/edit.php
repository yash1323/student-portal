<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * FROM   symbols ORDER BY email";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["name"].'</td>  
<td>'.$row["title"].'</td>  
<td>'.$row["email"].'</td>  
<td>'.$row["year"].'</td>

<td>'.$row["fromdate"].'</td>  
<td>'.$row["todate"].'</td> 
<td>'.$row["people"].'</td> 
</tr>  
';
    }
    return $output;
}
 ?>
   <link rel="stylesheet" href="../css/home.css">
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
<h3 style="padding: 20px;">Records In Database:</h3>
<div class="table-responsive table-hover table-bordered col-10" >

     <table border="1" class="table" >
  <thead > 
    <tr class="table-primary">
                <th width="1%">Id</th>
              
                <th width="1%">Name</th>
                <th width="1%">Event</th>
                <th width="1%">Email</th>
                <th width="1%">Class</th>
                <!-- <th width="1%">Gender</th> -->
                <th width="1%">From date</th>
                <th width="1%">To date</th>
                <th width="1%">No of people</th>
            </tr>


    <tbody>
            <?php
            echo fetch_data();
            ?>
        </tbody>
    </table>
        </thead>
        </table>
    </div>
    </div>
<h3 style="padding: 20px;">Edit Registration:</h3>

<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='doedit.php' method='post'>
<div class="form-group row">
    <label for="name" class="col-4">ID:</label>
    <input type="int" class="form-control col-7" id="id" name="id" placeholder="Enter id to be edit" required>
 
  </div>
  <br>
  <div class="form-group row">
    <label for="name" class="col-4">Name:</label>
    <input type="text" class="form-control col-7" id="name" name="name" placeholder="Enter name" required>
 
  </div>
  <br>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-4">Email address:</label>
    <input type="email" class="form-control col-7" id="email" name="email" placeholder="Enter email" required>
 
  </div>
  <br>
  <div class="form-group row">
    <label for="title" class="col-4">Event:</label>
    <input type="text" class="form-control col-7" id="title" name="title" placeholder="Enter event" required>
   
  </div>
  <br>
<div class="form-group row">
    <label for="Year" class="col-4">Class:</label>
    <input type="int" class="form-control col-7" id="Year" name="Year" placeholder="Enter Class" required>
   
  </div>
  <br>
  

    <div class="form-group row">
    <label for="title" class="col-4">From Date:</label>
    <input type="date" class="form-control col-7" id="fromdate" name='fromdate'  required>
   
  </div>
  <br>
  <div class="form-group row">
    <label for="title" class="col-4">To Date:</label>
    <input type="date" class="form-control col-7" id="todate" name='todate'  required>
   
  </div>
  <br>
  <div class="form-group row">
    <label for="Year" class="col-4">No. of People:</label>
    <input type="int" class="form-control col-7" id="people"  name='people' placeholder="Enter number of people" required>
   
  </div>
  <br>
 
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  &nbsp;&nbsp;
  <button class="btn btn-warning" type="reset"  value='Reset' >Reset</button>
</form>
</div>
</div>

</center>

<?php include('footer.php'); ?>

