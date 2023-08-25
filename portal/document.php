<?php
include('session.php');
$conn=new PDO('mysql:host=localhost; dbname=simplestresult', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:document.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<html>
<head>
<title>Upload and Download Files</title>
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
    </style>
	</head>
<body>
<div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
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
	
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<!-- <h1><p>Upload  And  Download Files</p></h1>	 -->
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
					<input type="file" name="file" id="file" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</form>
		<br />
		<br />
		<table border="1" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th colspan="2" align="center">Action</th>	
				</tr>
			</thead>
			<?php

$files = scandir("upload");
for ($a = 2; $a < count($files); $a++)
{
    ?>
			<tr>
			
				<td>
					&nbsp;<?php echo $files[$a];?>
				</td>
				<td>
					<a href="upload/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>&nbsp;&nbsp;
				</td>
				<td>
			
   
        

        

        <a href="delete.php?name=upload/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a>
   
    <?php
}

?>
				</td>
			</tr>
			
		</table>
	</div>
	</div>
	</div>
</body>
</html>