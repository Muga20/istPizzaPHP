<?php
error_reporting(1);
 if (isset($_POST['submit'])) {
   $product_name = $_POST['product_name'];
   $product_image= $_POST['product_image'];
   $product_price= $_POST['product_price'];
   $product_description= $_POST['product_description'];
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!-- Font awesome 5 -->
    <script src="https://kit.fontawesome.com/f0ca0f5ff6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style media="screen">
      .images_type{
        width: 120px;
        height: 120px;
        border-radius:8px;
      }
      .texts_size{
        font-size: 20px;
      }
      .texts-dark{
        color: black;
        font-size: 24px;
        font-weight: bold;

      }
      .cart_buttons{
        color: black;
        font-weight: bold;
        font-size: 25px


      }
    </style>

  </head>
  <body>
    <!-- section-header.// -->
    <?php include("includes/navbar.php");?>

<section class="section-content padding-y bg">
<div class="container">

<!-- ============================ COMPONENT 1 ================================= -->

<div class="row">
	<aside class="col-lg-9">
<div class="card">
<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Pice </th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside align-items-center">
			<div class="aside"><img class="images_type"src="./images/products/<?php echo $product_image;?>"class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="texts-dark"><?php echo $product_name;?></a>
				<p class="texts_size"><?php echo $product_description ?></p>
			</figcaption>
		</figure>
	</td>
	<td>
		<!-- col.// -->
					<div class="col">
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <span class="cart_buttons">+</span>  </button>
							</div>
              <br/>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <span
                class="cart_buttons">-</span> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">ksh<?php echo $product_price;?></var>

		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a href="" class="btn btn-danger"> Remove</a>
	</td>
</tr>

</tbody>
</table>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-lg-3">

		<div class="card">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Total price:</dt>
			  <dd class="text-right">$69.97</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Tax:</dt>
			  <dd class="text-right"> $10.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Total:</dt>
			  <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
			</dl>
			<hr>
			<p class="text-center mb-3">
				<img src="./images/misc/payments.png" height="26">
			</p>
			<a href="./place-order.html" class="btn btn-primary btn-block"> Checkout </a>
			<a href="./store.html" class="btn btn-light btn-block">Continue Shopping</a>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

</aside> <!-- col.// -->


</div> <!-- row.// -->
<!-- ============================ COMPONENT 1 END .// ================================= -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</body>
</html>
