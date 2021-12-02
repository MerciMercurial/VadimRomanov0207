<?php
$nam=$_GET["nam"];
$email=$_GET["email"];
$txt=$_GET["txt"];
$db_host = http://f0601807.xsph.ru/;
$db_name = "albert";
$db_user = "root";
$db_pass = "root";
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
mysqli_query ($db, "SET NAMES utf8"); 
$sql = "INSERT INTO otziv SET nam='$nam', email='$email', txt='$txt'";
mysqli_query($db, $sql);
$res = mysqli_query($db, "SELECT * FROM otziv ORDER BY id");
$arPosts = array();
if ($res){
    while($row = mysqli_fetch_assoc($res)){
        $arPosts[] = $row;
    }   
}
foreach ($arPosts as $article): 
    echo '<br>Имя: '.$article['nam'].'<br>email: '.$article['email'].'<br>';
      echo 'Отзыв: '.$article['txt'].'<br><br>';
    endforeach; 
?> 