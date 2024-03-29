<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題016</title>
</head>

<body>
  <p>
    <?php
      class Food {
        // プロパティを定義
        private $name;
        private $price;

        // メソッドを定義       
        public function  show_price(){
          echo $this->price . '<br>';
        }
        // コンストラクタを定義する
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
        
      }
      // インスタンス化する
      $food = new Food('potato', 250);
      // インスタンス$userの各プロパティの値を出力する
      print_r($food);

      echo "<br>";

      class Animal {
        // プロパティを定義
        private $name;
        private $height;
        private $weight;
       
        // メソッドを定義        
        public function show_height(){
          echo $this->height .'<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }
      // インスタンス化する
      $animal = new animal('dog', 60, 5000);
      // インスタンス$userの各プロパティの値を出力する
      print_r($animal);
      
      echo "<br>";
      // メソッドにアクセスして実行する
      $food->show_price();
      $animal->show_height();

    ?>
  </p>
  
</body>

</html>