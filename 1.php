<?php
$db_host = "localhost";
$db_name = "albert";
$db_user = "root";
$db_pass = "root";
$tek=$_GET["tek"];
$count=0;
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
mysqli_query ($db, "SET NAMES utf8"); 
$res = mysqli_query($db, "SELECT * FROM zadanie ORDER BY id");
$arPosts = array();
if ($res){
    while($row = mysqli_fetch_assoc($res)){
        $arPosts[] = $row;
    } }
foreach ($arPosts as $article): 
    $count++;
     echo '<h3>'.$article['title'].'</h3>';
      echo '<p>'.$article['text'].'</p>';
      echo '<img src="'.$article['img'].'"  width="300px"><br>';
      if($count==$tek)break;
     endforeach; 
?> 