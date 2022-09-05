<?php 

$db_name = "mysql:host=localhost;dbname=person";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);
$sql = $conn->query("SELECT * FROM user ");

$result = $sql->fetchAll(PDO::FETCH_NUM);
//    echo "<pre>";
//    print_r($result);
//    echo "</pre>";

if(count($result)){
    foreach($result as $row){
        echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} <br>";
    }
}
   
// while($row = $sql->fetch(PDO::FETCH_OBJ)){
//     echo "{$row->ID} - {$row->Name} - {$row->City} - {$row->DOB} </br>";
//     // echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} </br>";
    
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
    
// }