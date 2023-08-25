<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Student Portal</title></head>
	<style>


.container {
  max-width: 500px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 50px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  color: #888;
}



fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
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
		<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contact Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" name="message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
	<?php
	if (isset($_POST["name"],$_POST["email"],$_POST["message"]))
	{
		$name = $_POST['name'];
		$email= $_POST['email'];
		$message= $_POST['message'];
		$to = "yashthakkar139@gmail.com";
		$subject = "any subject name";
		$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
		
		if(mail($to, $subject, $txt, $email)) {
				//any send thanks for email
				echo '<script language="javascript">';
            echo 'alert("Your Response is Submited Successfully!")';
            echo '</script>';
			}
		else
		{
			echo '<script language="javascript">';
            echo 'alert("Failed!")';
            echo '</script>';
		}
	}
	?>
	
	</div>

  <footer>
&copy Copyrights - Student Portal
</footer>
</body>
</html>