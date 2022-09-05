<?php 

$db_name = "mysql:host=localhost;dbname=person";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);
$name = "Rahul";
$city= "Dhaka"; 
$dob = 2020;

// $sql = $conn->prepare("SELECT * FROM user WHERE City = :City AND  ID > :ID");
 $sql = $conn->prepare("INSERT INTO user (Name, City, DOB) VALUES (:Name, :City, :DOB)");

// $sql->bindValue(':City', $city, PDO::PARAM_STR);
// $sql->bindValue(':ID', $id, PDO::PARAM_INT);

$sql -> execute(array(':Name' => $name, ':City' => $city, ':DOB' => $dob ));

$result = $sql->fetchAll(PDO::FETCH_NUM);
//    echo "<pre>";
//    print_r($result);
//    echo "</pre>";

if(count($result)){
    foreach($result as $row){
        echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} <br>";
    }
    
}
else{
    
    echo "No Data Found"; 
}
   
// while($row = $sql->fetch(PDO::FETCH_OBJ)){
//     echo "{$row->ID} - {$row->Name} - {$row->City} - {$row->DOB} </br>";
//     // echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} </br>";
    
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
    
// }