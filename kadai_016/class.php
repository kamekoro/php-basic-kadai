<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題16</title>
</head>
<body>
  <p>
    <?php
      class Food {
        public $name;
        public $price;

        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
        public function show_price() {
          return $this->price;
        }
      }
      class Animal {
        public $name;
        public $height;
        public $weight;

        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
        public function show_height() {
          return $this->height;
        }
      }

      $price = new Food('potato', 250);
      $height = new Animal('dog', 60, 5000);

      print_r($price);
      echo '<br>';
      print_r($height);
      echo '<br>';

      echo $price->show_price();
      echo '<br>';
      echo $height->show_height();
     ?>
  </p>  
</body>
</html>