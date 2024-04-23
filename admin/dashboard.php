<?php
include"../php/process.php";

if ($_SESSION['status'] !== 'true') {
  session_destroy();
  echo "<script>window.location.href = 'adminlogin.php'</script>";
}

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css" class="css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style=" font-family: 'Libre Franklin', sans-serif;
font-family: 'Varela Round', sans-serif;background-color:black;">


<div class="text-center" style="margin-top: 5%;">

</div>

<div class="container-fluid,text center">
  <div class="row,text-center" style="margin-top: 5%;">
    <div class="col-md-4 col-sm-6">
    <a href="postevent.php" class="btn btn-block box">
        <h3 class="text-center">POST EVENTS</h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="edit.php" class="btn btn-block box">
        <h3 class="text-center">EDIT POSTED EVENTS</h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="contacts.php" class="btn btn-block box">
        <h3 class="text-center"> CONTACT</h3>
      </a>
    </div>
    <!-- //SECOND// -->
    <div class="col-md-4 col-sm-6">
    <a href="volunteer.php" class="btn btn-block box">
        <h3 class="text-center">VOLUNTEER </h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="homeImage.php" class="btn btn-block box">
        <h3 class="text-center">HOME IMAGE</h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="edithomeimage.php" class="btn btn-block box">
        <h3 class="text-center">EDIT HOME IMAGE</h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="aboutimage.php" class="btn btn-block box">
        <h3 class="text-center">ABOUT IMAGE</h3>
      </a>
    </div>
    <div class="col-md-4 col-sm-6">
    <a href="editaboutimage.php" class="btn btn-block box">
        <h3 class="text-center">EDIT ABOUT IMAGE</h3>
      </a>
    </div>
    
    <!-- <form class="logout" action="" method="post">
  <button type="submit" name="logout">logout</button>
  </form> -->
  </div>
</div>

</body>
</html>