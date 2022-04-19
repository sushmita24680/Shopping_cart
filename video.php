<?php 
require_once ('php/CreateDb.php');
require_once ('./php/component.php');
$db = new CreateDb("Productdb", "Producttb");
$v_id=$_GET['product_id'];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Shopping </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <link rel="stylesheet" href="style.css">


<style>
      body {
        
        width: fit-content;
        position:fixed;
        margin:auto; 
  overflow: hidden; /* Hide scrollbars */
  
  


}
    .main {


    display: flex;
    flex-direction: row;
}

.main div {
    width: 50%;

}
</style>
</head>

<body>


<?php require_once ("php/header.php"); ?>
<div class="background">
<div class="home-container">
    <button  style="margin:1rem; margin-left:3rem; padding:0.5rem; background-color:green; border-radius:15%" ><a href="index.php" style="text-decoration:none;  color:white;" > <i class="fas fa-solid fa-hand-point-left"></i> Back </a></button>
<?php
            $row= $db->getProductData($v_id);
        
             moreview($row[ 'product_name'], $row['product_overview'], $row['point_1'], $row['point_2'], $row['point_3'], $row['product_video']);
                                
                            
                 
            ?>
    </div>

</div>

  


  <img src="./upload/shopBAGS.png" width="100%" alt="">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
