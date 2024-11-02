<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>合計点 </p> <p>平均点 </p>
         <?php
      $score1=80;
      $score2=60;
      $score3=55;
      $score4=40;
      $score5=100;
      $score6=25;
      $score7=80;
      $score8=95;
      $score9=30;
      $score10=60;
$total_point=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
echo $total_point;
echo '<br>';
$average=$total_point/10;   
echo $average;
         ?>
    
 </body>
 
 </html>