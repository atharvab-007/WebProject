<?php

if(isset($_POST['name'])){
$conn=mysqli_connect(
  'localhost',
  'root','','mmit_trip'
);
if($conn){
  echo "Successfull";
}else{
  echo "unsuccessful";
}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql="INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($conn->query($sql)==true){
  //echo "Successfully Inserted";
  echo "<p class='submitMsg'>Thanks For Submitting The Form. See You At Trip.</p>";
  
}
else{
  echo "Error: $sql <br> $conn->error";
  
}
$conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&display=swap" rel="stylesheet">">
    <link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&family=Cherry+Cream+Soda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="travel.css">
</head>
<body>
    <img class="bg" src="pg.webp" alt="MMIT">
    <div class="container">
        <h1>Welcome to MMIT trip</h1>
        <h3>Enter your details and submit the form to confirm your participation in the trip</h3>
        
      
        <form action="conn.php" method="post">
          <input type="text" name="name" id="name" placeholder="Enter your name">
          <input type="text" name="age" id="age" placeholder="Enter your age">
          <input type="text" name="gender" id="gender" placeholder="Enter your gender">
          <input type="email" name="email" id="email" placeholder="Enter your email">
          <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
          <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
          <button class="btn">SUBMIT</button>
          
      </form>
    </div>
    <script src="travel.js"></script>
</body>
</html>