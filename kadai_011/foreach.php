<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         $about_vages = ['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
 
         //  連想配列$about_vagesの要素を1つずつ順番に出力する
         foreach ($about_vages as $key=>$value) {
             echo "{$key}:{$value}<br>";
         }
         ?>
     </p>
 </body>
 
 </html>