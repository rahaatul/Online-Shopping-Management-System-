<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="../view/js/SellProduct.js"></script>
</head>
<body>
<?php include "includes/header.php" ;?>
    <?php 
    include "index.php";
        

    ?>

<form action="controller/createReceipt.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br>
  
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createReceipt" value="Create">
  <input type="reset"> 
</form>
<table>
  <tr>
  	<th>1000.00 TK</th>
    <th>1000.00 TK</th>
    <th></th>
    
     <tr>
            <td align="left"; width="500px"><img src="image/Sell1.jpg" alt=""></td>
             <td align="left"; width="500px"><img src="image/Sell2.jpg" alt=""></td>
       </tr>
  </tr>


 

</table>

<?php include "includes/footer.php" ;?>
</body>
</html>

