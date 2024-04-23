<?php
include"../php/process.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="contacts.css?<?php echo time()?>">
    <title>edit homeimage</title>
</head>
<body>
<table>
        <tr>
            <th>Homeimage</th>
            <th>Delete</th>
        </tr>
        <?php
            $arg0 = "SELECT *  FROM `homeimage`";
            $query0 = mysqli_query($connect,$arg0);
            while ($row = mysqli_fetch_assoc($query0)) {
                ?>
                 <tr>
                 <td><img src="photos/<?php echo $row['homeimage']?>" style="width70px; height:70px;" alt=""></td>
                 <td>
                         <a href="contact.php? delete-contact=<?php echo $row['id']?>">Delete</a>
                    </td> 
                </tr>
            <?php
        }
        ?>
    
</body>
</html>