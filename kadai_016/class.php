<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
            }
            
            // メソッドを定義する
            public function show_price(string $name) {
              echo $this->price . '<br>';
            }
        }

        class Animal {
          // プロパティを定義する
          private $name;
          private $height;
          private $weight;

          // コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          // メソッドを定義する
          public function show_height(string $name) {
            echo $this->height . '<br>';
          }
        }

        // インスタンス化する
        $food = new Food('potato',250);
        $animal = new Animal('dog',60,5000);

        // print_r関数を使いそれぞれのインスタンスを出力します。
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';        

        // メソッドへのアクセス
        $food->show_price('potato');
        $animal->show_height('dog');

        ?>
    </p>
</body>

</html>
