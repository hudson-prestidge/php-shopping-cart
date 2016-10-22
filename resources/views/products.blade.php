@extends('layouts.master')

@section('sidebar')
<div class="sidebar">
  <h2 class="cartProducts"> Products In Cart </h2>
  <h2 class="totalPrice"> Total Price: 0 </h2>
</div>


@section('content')
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
              echo "<div class='product $product->name'>
                      <div class='product-name'>" .
                      $product->name .
                      "</div>
                      <div class='product-price'> Price: $" . $product->price .
                      "</div> <button class='add-to-cart-btn'> Add To Cart </button>
                    </div>";
            }
           ?>
        </ul>
      </div>
  </div>
