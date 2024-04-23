<?php
include"../php/process.php";
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upcoming Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css?<?php echo time();?>" class="css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body style=" font-family: 'Libre Franklin', sans-serif;
font-family: 'Varela Round', sans-serif;background-color:#ffffff; ">
        <div class="conatiner-fluid, text-center">
          <div class="row, text-center" class="main1">
            <div class="mycontent1">
              <form action="" method="post">
              <img src="bloghive.png" class="img1" alt="">
              <h4 style="color: rgb(251, 251, 255);" id="bg">Events Schedule</h4><br>
              <input type="text" class="forminput" placeholder="Event Title" name="eventTitle"><br>
              <textarea name="msg" id=""  placeholder="Enter Your Message"></textarea><br>
              <input type="text" class="forminput" placeholder="Day/Month/Date/Year" name="date"><br>
              <input type="text" class="forminput" placeholder="TimeBegin to TimeStop" name="time"><br>
              <input type="text" class="forminput" placeholder="Location" name="location"><br><br>
              <p style="color:red;"><?php echo $emptyerrormsg;?></p>
              <p style="color:green;"><?php echo $recievedmsg;?></p>
              <button type="submit" name="event">Submit</button>
            </div>
            </form>
          <button class="back"><a href="dashboard.php">Back to dashboard</a></button>
              </div>
            </div>
  


 
  








 
</body>
</html>