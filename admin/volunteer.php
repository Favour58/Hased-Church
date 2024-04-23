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
     <title>Volunteers</title>
</head>
<body>
<table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>courses</th>
            <th>duration</th>
            <th>questions</th>
            <th>Reply</th>
            <th>Call</th>
            <th>Delete</th>
          </tr>
          <?php
           $arg0 = "SELECT * FROM `daat_bible_school`";
           $query0 = mysqli_query($connect, $arg0);
           while ($row = mysqli_fetch_assoc($query0)) {
               ?>
                     <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['courses']?></td>
                    <td><?php echo $row['duration']?></td>
                    <td><?php echo $row['questions']?></td>
                    <td>
                         <a href="mailto:/<?php echo $row['email']?>">Reply</a>
                    </td> 
                    <td>
                         <a href="tel:/<?php echo $row['phone']?>">Call</a>
                    </td> 
                    <td>
                      <a href="volunteer.php? delete_volunteer=<?php echo $row['id']?>">Delete</a>
                    </td> 
                </tr>
            <?php
        }
        
        ?>
     </table>
     <a href="dashboard.php"><button class="back">Go back</button></a>

</body>
</html>