<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php

// Foodクラスの定義
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price;
    }
}

// Animalクラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo $this->height;
    }
}

// Foodクラスのインスタンスを作成
$food = new Food("potato", 250);

// Animalクラスのインスタンスを作成
$animal = new Animal("dog", 60, 5000);

// インスタンスの内容を出力
echo "Food instance:\n";
print_r($food);
$food->show_price();

echo "\nAnimal instance:\n";
print_r($animal);
$animal->show_height();

?>
     </p>
 </body>
 
 </html>