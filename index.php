<?php
//GET FROM DATABASE
//Connectie Details
$host ='localhost';
$user ='root';
$pass ='';
$dbse ='blog';

$conn= new mysqli($host, $user, $pass, $dbse);
if($conn->connect_errno){
    echo "Connection failed".$conn->connect_error;
    exit();
}

$query = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo"<p>";
        echo $row['auteur']."<br>";
        echo $row['title']. "<br>"; 
        echo $row['content'].'<br>';
        echo $row['timestamp'];
        
    }
}   else {
    echo "No data :()";
    }

?>