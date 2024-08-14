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
         public function show_price() {
            echo $this->price . '<br>';
         }
    }
         // インスタンス化する
         $potato = new Food('potato',250);
 
         // メソッドにアクセスして実行する
         print_r($potato);    
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

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;//this  
                $this->height = $height;//this
                $this->weight = $weight;//this
        }
         // メソッドを定義する
         public function show_height() {
            echo $this->height;
         }
    }
         // インスタンス化する
         $dog = new Animal('dog',50, 5000);
 
         // メソッドにアクセスして実行する
         print_r($dog);    
         ?> 
     </p>

     <p>
     <?php
     $potato->show_price();
     $dog->show_height();
     ?>   
     </p>





 </body>
 
 </html>