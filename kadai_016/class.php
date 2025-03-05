<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題０１６</title>
</head>

<body>
    <p>
    <?php

class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
        public function show_price() {
            return $this->price;
}
    }
    class Animal {

        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        
        public function show_height() {
            return $this->height;
}
}

 $potato = new Food('ポテト', 250);
 $dog = new Animal('犬',60,5000);

 print_r($potato);
 print_r($dog);

 echo $potato->show_price();
 echo '<br>';
 echo $dog->show_height();

?>