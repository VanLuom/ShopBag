<?php require_once './core/boot.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/productcontainer.css">
        

</head>

<body>
<?php include 'inc/header.php'; ?>
<?php $product = get_product($_GET['id']); ?>
  <div class="grid product">
    <div class="column-xs-12 column-md-7">
      <div class="product-gallery">
        <div class="product-image">
          <img class="active" src="<?php echo $product['img']; ?>">
        </div>
        <ul class="image-list">
          <li class="image-item"><img src="<?php echo $product['img']; ?>"></li>
          <li class="image-item"><img src="<?php echo $product['img']; ?>"></li>
          <li class="image-item"><img src="<?php echo $product['img']; ?>"></li>
        </ul>
      </div>
    </div>
    <div class="column-xs-12 column-md-5">
      <h1><?php echo $product['name']; ?></h1>
      <h2><?php echo $product['price']; ?> </h2>
      <div class="description">
        <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
      </div>
      <button class="add-to-cart">Buy Now</button>
      <button class="add-to-cart">Add To Cart</button>
    </div>
  </div>
  <div class="grid related-products">
    <div class="column-xs-12">
      <h3>You may also like</h3>
    </div>
    <div class="column-xs-12 column-md-4">
      <img src="<?php echo $product['img']; ?>">
      <h4>Succulent</h4>
      <p class="price">$19.99</p>
    </div>
    <div class="column-xs-12 column-md-4">
      <img src="<?php echo $product['img']; ?>">
      <h4>Terranium</h4>
      <p class="price">$19.99</p>
    </div>
    <div class="column-xs-12 column-md-4">
      <img src="<?php echo $product['img']; ?>">
      <h4>Cactus</h4>
      <p class="price">$19.99</p>
    </div>
  </div>
</div>
  </main>
  <?php include 'inc/footer.php'; ?>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
    <script src="productcontainer.js"></script>
</body>

</html>