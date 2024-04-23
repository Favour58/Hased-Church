<?php
include"connection.php";
// error_reporting(0); 
session_start();


//post upcoming events//
if (isset($_POST['event'])) {
     $eventTitle = mysqli_real_escape_string($connect,$_POST['eventTitle']);
     $msg = mysqli_real_escape_string($connect,$_POST['msg']);
     $date = mysqli_real_escape_string($connect,$_POST['date']);
     $time = mysqli_real_escape_string($connect,$_POST['time']);
     $location = mysqli_real_escape_string($connect,$_POST['location']);

      if ($eventTitle == "" || $msg == "" || $date == "" || $time == "" || $location == "")  {
          $emptyerrormsg = 'These fields cannot be empty';
      }
      else{
          $arg0 = "INSERT INTO `events` (`eventTitle`,`msg`,`date`,`time`,`location`)
           VALUES ('$eventTitle','$msg','$date','$time','$location')";
           $query0 = mysqli_query($connect,$arg0);
           if ($query0) {
            $recievedmsg = 'Events posted successfullly';
            echo"<script>window.location.href = '../admin/postevent.php'</script>";
           }
           else{
            $recievedmsg = 'Something went wrong!';
            echo"<script>window.location.href = '../admin/postevent.php'</script>";
           }
      }
}
//delete upcoming events//
if (isset($_GET['delete-event'])) {
    $id = $_GET['delete-event'];
   $arg0 = "DELETE FROM `events` WHERE `id` = '$id'";
   $query0 = mysqli_query($connect, $arg0);
   if ($query0) {
          echo"<script>window.location.href = '../admin/edit.php'</script>";
   }
   else{
          echo"<script>alert('something went wrong!!')</script>";
   }
}

//contact-form//
 if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $message = mysqli_real_escape_string($connect,$_POST['message']);
    

    $arg0 = "INSERT INTO `contact` (`name`,`email`,`phone`,`message`) 
    VALUES('$name','$email','$phone','$message')";
    $query0 = mysqli_query($connect, $arg0);
    if ($query0) {
        echo"<script>alert('The Admins have recieved your message')</script>";
    }
    else{
        echo"<script>alert('something went wrong!!')</script>";
    }
 }

 //Daat bible school//
 if (isset($_POST['daat'])) {
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $courses = mysqli_real_escape_string($connect,$_POST['courses']);
    $duration = mysqli_real_escape_string($connect,$_POST['duration']);
    $questions = mysqli_real_escape_string($connect,$_POST['questions']);

    $arg0 = "INSERT INTO `daat_bible_school` (`name`,`email`,`phone`,`courses`,`duration`,`questions`) 
    VALUES('$name','$email','$phone','$courses','$duration','$questions')";
    $query0 = mysqli_query($connect, $arg0);
    if ($query0) {
        echo"<script>alert('The Admins have recieved your message')</script>";
    }
    else{
        echo"<script>alert('something went wrong!!')</script>";
    }
 }

//det volunteer//
 if (isset($_GET['delete_volunteer'])) {
    $id = $_GET['delete_volunteer'];
    $arg0 = "DELETE FROM `daat_bible_school` where `id` = '$id'";
    $query0 = mysqli_query($connect,$arg0);
    if ($query0) {
       echo"<script>window.location.href = '../admin/volunteer.php'</script>";
    }
    else{
        echo"<script>alert('something went wrong!!')</script>";
       }
 }

 //delete contact//
 if (isset($_GET['delete-contact'])) {
   $id = $_GET['delete-contact'];
   $arg0 = "DELETE FROM `contact` WHERE `id` = '$id'";
   $query0 = mysqli_query($connect, $arg0);
   if ($query0) {
    echo"<script>window.location.href = '../admin/contact.php'</script>";
   }
   else{
    echo"<script>alert('something went wrong!!')</script>";
   }
 }


 //homeimage
    if(isset($_POST['home'])) {
        $homeimage = $_FILES['homeimage']['name'];
        $tempname = $_FILES['homeimage']['tmp_name'];
        $folder = "photos/".$homeimage;

        $arg0 = "SELECT * FROM `homeimage`";
        $query0 = mysqli_query($connect, $arg0);
        $count0 = mysqli_num_rows($query0);
        if ($count0 > 0 ) {
            $arg1 = "UPDATE `homeimage` SET `homeimage` = '$homeimage'";
            $query1 = mysqli_query($connect, $arg1);
            if (move_uploaded_file($tempname, $folder)) {
                echo"<script>alert('Home Image changed successful')</script>";
            //    echo"<script>window.location.href = '../view/music app.php'</script>";
            }
            else{
                echo"<script>alert('something went wrong')</script>";
                // echo"<script>window.location.href = '../view/music app.php'</script>";
            }
        }
        else{
                $arg0 = "INSERT INTO `homeimage` (`homeimage`) VALUES ('$homeimage')";
                $query0 = mysqli_query($connect, $arg0);
                if (move_uploaded_file($tempname,$folder)) {
                    echo"<script>alert('Home Image changed successful') </script>";
                }
                else{
                    echo"<script>alert('something went wrong!!') </script>";
                }
            }
        }



        //Aboutimage
    if(isset($_POST['about'])) {
        $aboutimage = $_FILES['aboutimage']['name'];
        $tempname = $_FILES['aboutimage']['tmp_name'];
        $folder = "photos/".$aboutimage;

        $arg0 = "SELECT * FROM `aboutimage`";
        $query0 = mysqli_query($connect, $arg0);
        $count0 = mysqli_num_rows($query0);
        if ($count0 > 0 ) {
            $arg1 = "UPDATE `aboutimage` SET `aboutimage` = '$aboutimage'";
            $query1 = mysqli_query($connect, $arg1);
            if (move_uploaded_file($tempname, $folder)) {
                echo"<script>alert('About Image changed successful')</script>";
            //    echo"<script>window.location.href = '../view/music app.php'</script>";
            }
            else{
                echo"<script>alert('something went wrong')</script>";
                // echo"<script>window.location.href = '../view/music app.php'</script>";
            }
        }
        else{
                $arg0 = "INSERT INTO `aboutimage` (`aboutimage`) VALUES ('$aboutimage')";
                $query0 = mysqli_query($connect, $arg0);
                if (move_uploaded_file($tempname,$folder)) {
                    echo"<script>alert('About Image changed successful') </script>";
                }
                else{
                    echo"<script>alert('something went wrong!!') </script>";
                }
            }
        }


       //admin login//
       if (isset($_POST['adminLogg'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
    
            if($userName == "" || $password == ""){
              $error = 'These fields cannot be empty!';
            }
            else{
                   $arg0 = "SELECT * FROM `adminlogin` WHERE `userName` = '$userName'";
                   $query0 = mysqli_query($connect, $arg0);
                   $count0 = mysqli_num_rows($query0);
                   if ($count0 > 0) {
                             $arg1 = "SELECT * FROM `adminlogin` WHERE `password` = '$password'";
                             $query1 = mysqli_query($connect, $arg1);
                             $count1 = mysqli_num_rows($query1);
                             if ($count1 > 0) {
                                  $arg2 = "SELECT * FROM `adminlogin` WHERE `userName`= '$userName' AND `password` = '$password'";
                                  $query2 = mysqli_query($connect, $arg2);
                                  $count2 = mysqli_num_rows($query2);
                                  if ($count2) {
                                       $row = mysqli_fetch_assoc($query2);
                                       $_SESSION['id'] = $row['id'];
                                       $_SESSION['status'] = 'true';
                                       echo"<script>window.location.href = 'dashboard.php'</script>";
                                  }
                             }
                             else{
                                  $error = "Incorrect Password";
                             }
                   }
                   else{
                        $error = "Incorrect Username";
                   }
              }
              }


?>

