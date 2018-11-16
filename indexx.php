<?php
 // INSERT IN DATABASE
//Connectie Details
$host ='localhost';
$user ='root';
$pass ='';
$dbse ='blog';
 
$conn= new mysqli($host, $user, $pass, $dbse);
 

$auteur = $_POST["auteur"];
$title = $_POST["title"];
$post = $_POST["comment"];

$sql = "INSERT INTO `posts`(`id`, `auteur`, `title`, `content`, `timestamp`) VALUES (NULL, '$auteur', '$title', '$post', CURRENT_TIMESTAMP)";

//captcha

if(isset($_POST['g-recaptcha-response'])){
   $captcha=$_POST['g-recaptcha-response'];
        }
if(!$captcha){
    echo '<h2>Helaas.. je bent de captcha vergeten.. erg spijtig!</h2>';
    exit;
}
$secretKey = "hier komt de geheime code van google";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);

 // connect to database  

if(!empty($_POST['title']) && $_POST['auteur']&& $_POST['comment']){
    mysqli_query($conn, $sql);
 header('Location:/invoegen.php'); 
                 }
    
    else{
        echo"fail";
}


mysqli_close($conn);   

?>