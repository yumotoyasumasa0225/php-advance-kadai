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
          public function show_price(string $name,int $price) {
            $this->name = $name;
            $this->price = $price;
            }
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }
 
         // インスタンス化する
         $Food = new Food('potato', 250);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($Food);
         ?>
     </p>

     <p>
         <?php
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;
          // メソッドを定義する
          public function show_price(string $name,int $height,int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }
             // コンストラクタを定義する
             public function __construct(string $name,int $height,int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         }
 
         // インスタンス化する
         $Animal = new Animal('dog', 60, 5000);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($Animal);

?>
     </p>
 </body>
 
 </html>