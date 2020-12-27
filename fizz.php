<?php 
$fizz = $_POST['fizz'];
$buzz = $_POST['buzz'];

$fi = (int)$fizz;
$bu = (int)$buzz;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>FizzBuzz問題</title>
  <meta name="description" content="。">
</head>
<body>
   <h1>FizzBuzz問題</h1>
   <p>FizzNum:</p>
   <form method="post" action="">
   <input type="text" name="fizz" placeholder="整数値を入力してください">

   
   <p>BuzzNum:</p>
   <form method="post" action="">
   <input type="text" name="buzz" placeholder="整数値を入力してください">

   
   <input type="submit" value="実行">
   
   <p>【出力】</p>
   <?php 
     if($fi == 0 || $bu == 0){
       echo "整数値を入力してください";
     } elseif((int)$fizz != (float)$fizz || (int)$buzz != (float)$buzz){
       echo "整数値を入力してください";
     } else{
     
      for($i = 1; $i <= 100; $i++){
    
        if($i % $fizz == 0 && $i % $buzz == 0){
          echo "FizzBuzz$i<br>";
          continue;
        } elseif($i % $fizz == 0){
          echo "fizz$i<br>";
          continue;
        } elseif($i % $buzz == 0){
          echo "buzz$i<br>";
          continue;
        }  
   }
  } 

   
   ?>
</body>
</html>