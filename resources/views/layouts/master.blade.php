<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', start)
          var productsInCart = []
          var totalPrice = 0
          var numProductsInCart = 0

          class Product{

            constructor(name, price){
              this.name = name
              this.price = price
            }
          }

          var duck = new Product('Duck', 10.00)
          var anteater = new Product('Anteater', 45.00)
          var albatross = new Product ('Albatross', 60.00)

          function start() {
            var product;
            if(product = document.getElementsByClassName('Duck')[0]){
              product.children[2].addEventListener('click', () => addProductToCart(duck))
            } if(product = document.getElementsByClassName('Anteater')[0]){
              product.children[2].addEventListener('click', () => addProductToCart(anteater))
            } if(product = document.getElementsByClassName('Albatross')[0]){
              product.children[2].addEventListener('click', () => addProductToCart(albatross))
            }
          }

          function addProductToCart(product) {
            console.log('adding a ' + product.name + ' I guess');
            productsInCart.push(product)
            totalPrice += product.price
            numProductsInCart++
            var newProduct = document.createElement("div")
            newProduct.innerHTML = product.name + " $" + product.price
            document.getElementsByClassName('sidebar')[0].appendChild(newProduct)
          }
        </script>

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
                box-sizing: border-box;
                webkit-box-sizing: border-box;
                moz-box-sizing: border-box;
            }
            .sidebar {
              float: right;
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
                width: 80%;
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
            .products {
            }
            .product {
            }
            .product-name {
              float: left;
              display: inline;
              width: 33%;
            }
            .product-price {
              width: 33%;
              float: left;
              display: inline;
            }
            .add-to-cart-btn {
              width: 23%;
              margin: 0 5%;
              float: right;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
            </div>
            <div class="sidebar">
            </div>
        </div>
    </body>
</html>
