<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/shop.css">


</head>

<body>

    <body class="main-layout">
        <!-- header section start -->
        <?php include 'inc/header.php'; ?>



        <div class="collection_text">ShoppingCart</div>
        <div class="layout_padding contact_section">

            <section class="shoping-cart spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping-cart-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-shoes">Product Shoes</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <?php $cart_list = get_cart(); ?>
                                        <?php foreach ($cart_list as $order_detail) {; ?>

                                            <tbody>
                                                <tr>
                                                    <td class="shoping-cart-item">
                                                        <img src="<?php echo $order_detail['img']; ?>" alt="">
                                                        <h5><?php echo $order_detail['name']; ?></h5>
                                                    </td>
                                                    <td class="shoping-cart-price">
                                                        <?php echo $order_detail['price']; ?>
                                                    </td>
                                                    <td class="shoping-cart-quantity">
                                                        <div class="quantity">
                                                            <form action="cart.php" method="post">
                                                                <input type="hidden" name="action" value="update">
                                                                <input type="hidden" name="value" value="-1">
                                                                <input type="hidden" name="productId" value="">
                                                                <button class="dec">-</button>
                                                            </form>
                                                            <?php echo $order_detail['quantity']; ?>
                                                            <form action="cart.php" method="post">
                                                                <input type="hidden" name="action" value="update">
                                                                <input type="hidden" name="value" value="-1">
                                                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                                                <button class="inc">+</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="shoping-cart-total">
                                                        "$210.00"
                                                    </td>
                                                    <td class="shoping-cart-item-close">
                                                        <form action="cart.php" method="POST">
                                                            <input type="hidden" name="action" value="delete">
                                                            <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                                            <button tyle="sumit" class="fa-solid fa-xmark">


                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <?php } ?>
                                    </tr>
                            </div>



                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping-cart-btns">
                                <a href="" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                                <a href="" class="primary-btn cart-btn cart-btn-right">
                                    <span class="icon_loading">
                                        <i class="fa-solid fa-spinner"></i>
                                    </span>
                                    "Update cart"
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="shoping-continue">
                                <div class="shoping-discount">
                                    <h5>Discount Codes</h5>
                                    <form action="#">
                                        <input type="text" placeholder="Enter you coupon code">
                                        <button type="submit" class="site-btn">APPLY COUPON</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shoping-chekout">
                                <h5>Cart Total</h5>
                                <ul>
                                    <li>
                                        "Subtotal"
                                        <span>$<?php echo total_cart(); ?></span>
                                    </li>
                                    <li>
                                        "Total"
                                        <span>$<?php echo total_cart(); ?></span>
                                    </li>
                                </ul>
                                <a href="" class="primary-btn">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    </body>

</html>