<?php
include ('connection.php');
$sql_insert = "INSERT INTO data (temperature, humidity, heat_index) VALUES
 ('".$_POST["temperature"]."', '".$_POST["humidity"]."', '".$_POST["heat_index"]."')";
if(mysqli_query($con,$sql_insert))
{
echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>