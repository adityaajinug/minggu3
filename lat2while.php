<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Faktorial</title>
</head>
<body>
<h3>Faktorial</h3>
   <form action="coba1.php" method="post">
        <input type="text" name="bilangan">
        <input type="submit" name="hitung" value="hitung">
        <!-- <input type="text" name="faktorial" value="faktorial"> -->
    </form>

   <?php 
   
   if(isset($_POST['hitung'])){
      $i=1;
      $j=1;
      $k=$_POST['bilangan'];
      echo " $k! =";
      while($i<$k){
         $j=$j*$i;
         echo"  $i x ";
         $i++;
      }
      $j=$j*$i;
      echo "$i";
      echo " = $j";
   }
   
   
   
   
   ?>
</body>
</html>