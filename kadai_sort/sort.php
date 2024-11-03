<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
    <p> 昇順にソートします。</p>
        <?php
        // 数値の準備、配列
            $array_nums=[15, 4, 18, 23, 10];
            // 昇順にソート
            sort($array_nums);
            //出力
           foreach ($array_nums as $value){
        echo$value.'<br>';
           }
          ?>
           <p>降順にソートします </p>
           <?php
           // 数値の準備、配列
           $array_nums=[15, 4, 18, 23, 10];
             // 降順にソート
            rsort($array_nums);
             //出力
             foreach ($array_nums as $value){
                echo$value.'<br>';}
        ?>
  </p>  
</body>

</html>
