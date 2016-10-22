<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   Product Page
                </div>
                <div class="links">
                  <a href="/"> Home </a>
                  <a href="/products"> Products </a>
                  <a href="/cart"> Cart </a>
                </div>

                <?php
                  class Product {
                    public $name;
                    public $price;

                    public function __construct($name, $price) {
                      $this->name = $name;
                      $this->price = $price;
                    }
                  }
                  $duck = new Product("Duck", 10.00);
                  $anteater = new Product("Anteater", 45.00);
                  $albatross = new Product("Albatross", 60.00);
                  $products = array($duck, $anteater, $albatross);
                ?>

                <div class="products">
                  <h4> Available Products: </h4>
                  <ul>
                    <?php
                      foreach($products as $product) {
                        echo "<li>" . $product->name . "</li>";
                      }
                     ?>
                  </ul>
                </div>
            </div>
        </div>
    </body>
</html>
