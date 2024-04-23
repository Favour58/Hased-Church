<?php
include"../php/process.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="contacts.css?<?php echo time()?>">
     <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>EditUpcomingEvents</title>
</head>
<body>
<table>
        <tr>
        <th>Id</th>
            <th>Event-Title</th>
            <th>Message</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Delete</th>
          </tr>
          <?php
           $arg0 = "SELECT * FROM `events`";
           $query0 = mysqli_query($connect, $arg0);
           while ($row = mysqli_fetch_assoc($query0)) {
               ?>
                   <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['eventTitle']?></td>
                    <td><?php echo $row['msg']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><?php echo $row['time']?></td>
                    <td><?php echo $row['location']?></td>
                    <td>
                      <a href="edit.php? delete-event=<?php echo $row['id']?>">Delete</a>
                    </td> 
                </tr>
            <?php
        }   
        ?>
     </table>
     <a href="dashboard.php"><button class="back">Go back</button></a>

</body>
</html>