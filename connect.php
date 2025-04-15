<?php
   $con = mysqli_connect('localhost','root','Riar@2004','riardb');
   if(isset($_POST['sb'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gmail = $_POST['gmail'];
    $slot = $_POST['slot'];
    $area = $_POST['area'];
   }

    $query = "INSERT INTO 'mydata' ('name', 'phone', 'gmail', 'slot', 'area') values ('$name','$phone','$gmail','$slot','$area')";
    $execute=mysqli_query($con,$query); 
    $con->close();  
?>