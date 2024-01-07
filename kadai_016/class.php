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
        // メソッドを定義する
          public function show_price() {
            echo $this->price;
            }
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;
          // メソッドを定義する
          public function show_height() {
            echo $this->height;
            }
             // コンストラクタを定義する
             public function __construct(string $name,int $height,int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         }
         // インスタンス化する
         $Food = new Food('potato', 250);

         $Animal = new Animal('dog', 60, 5000);
 
         // インスタンス$Foodの各プロパティの値を出力する
         print_r($Food);
         //改行
         echo '<br>';
        // インスタンス$Animalの各プロパティの値を出力する
         print_r($Animal);
        //改行
         echo '<br>';
        //show_priceメソッドの実行
         $Food->show_price();
        //改行
         echo '<br>';
        //show_heightメソッドの実行
         $Animal->show_height();
        ?>
     </p>
 </body>
 
 </html>