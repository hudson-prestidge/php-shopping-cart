<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testing PHP!</title>
  </head>
  <body>
    <?php
        class Product {
          public $name;
          public $price;

          public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
          }
        }
        $duck = new Product("Duck", 10.00);
        $anteater = new Product("Anteater", 45.00);
        $albatross = new Product("Albatross", 60.00);

        $products = array($duck, $anteater, $albatross);

        echo "<h1> Hello World! </h1>";
        echo "<ul>";
        foreach($products as $product){
          echo "<li>" . $product->name . "</li>";
        }
        echo "</ul>";
     ?>
  </body>
</html>
