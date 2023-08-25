<?php
$conn=new PDO('mysql:host=localhost; dbname=demo', 'root', '') or die(mysql_error());
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
	header("location:index.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<html>
<head>
<link rel="stylesheet" href="./css/home.css">
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
        footer{
         margin-top:28%;
        padding:30px;
        text-align:center;
        font-size:25px;
      
        background-color:skyblue;
       font-family:times;
       font-weight:bold;
        color:black;
    
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
                <a href="#" class="documentbtn">Documents &nbsp
                   
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
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<!-- <h1><p>Upload  And  Download Files</p></h1>	
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
					<input type="file" name="file" id="file" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</form>
		<br />
		<br /> -->
		<table border="1" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
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
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
	</div>
    <footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>