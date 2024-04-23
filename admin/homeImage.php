<?php
include"../php/process.php";
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homeImage.css?<?php echo time()?>">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home image</title>
</head>
<body>
    <div class="container">
        <div class="midcontainer">
            <form action="" method="post" enctype="multipart/form-data">
                 <input type="file"  name="homeimage" id="image" accept="image/*" style="display:none;" onchange="showimage()">
                 <span id="upload" onclick="clickfile()"><i class="fa-solid fa-image"></i></span>
                  <img src="" alt="" id="selectedimage">
                  <div>
                  <button name="home" type="submit">Submit</button>
                  </div>
             </form>
        </div>
    </div>
    


    <script>
      var selectedimage = document.getElementById('selectedimage');

      function showimage(){
        selectedimage.src = URL.createObjectURL(event.target.files[0]);
      }

      function clickfile(){
      var image = document.getElementById("image");
     image.click();
     }
     </script>
</body>
</html>