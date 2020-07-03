<?php
$servername = "10.10.170.153";
$username = "chandru";
$password = "chandru";
$dbname = "dam";

$conn = new mysqli($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{

$sql = 'select * from data order by id desc';
$result  = mysqli_query($conn, $sql);
 $values=array();

// if($result->num_rows>0)
// {
while($row = $result->fetch_array())
{

   
   
        array_push($values, array("id"=>$row['id'],"event"=>$row['event'],
        "distance"=>$row['distance'],"temperature"=>$row['temperature'],"humidity"=>$row['humidity'],"rain"=>$row['rain'],"flowlevel"=>$row['flowlevel']));
        
    }
   print(json_encode($values));
}
// else
// {
//     print(json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
// }
$conn->close();






?>