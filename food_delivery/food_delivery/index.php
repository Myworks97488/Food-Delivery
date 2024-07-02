<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>FoodPlaza | Home </title>

  <!-- Web-Fonts -->
  <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
  <!-- //Web-Fonts -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<!--header-->
<?php include("include/header.php"); ?>
<!--/header-->

<section class="w3l-banner" id="banner">
    <div class="new-block py-5">
        <div class="container">
            <div class="row middle-section">
                <div class="col-lg-7 section-width align-self">
                    <h5>No extra costs here, Your health is our priority, Healthy food for a healthy body</h5>
                    <a href="#url" class="btn btn-warning btn-outline-style mt-md-5 mt-4"> 
                        <span class="fa fa-shopping-cart mr-2"></span> Order Online</a>
                </div>
                <div class="col-lg-5 history-info mt-lg-0 mt-5 pt-lg-0 pt-md-4">
                    <img src="assets/images/pizza-full.png" class="img-fluid" alt="image">
                    <div class="cost">
                        <h5>Only</h5>
                        <h3>$25</h3>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- iphone home block -->
<section class="w3l-about py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-6">
                <h3>We believe in good</h3>
                <h5 class="mt-lg-3 mt-2"> When we say good, we don’t just mean good food. We also mean the goodness that good food leads to.
                </h5>
                <p class="mt-sm-4 mt-3 mb-sm-0 mb-2"> Good memories, a good temper, a good day, a good burp. And we know that when our food leaves our kitchens, we’re creating all that. It’s rewarding, this belief in good. Now take a look at how we go about it.</p>
                <a href="about.php" class="btn-style btn-danger btn mt-lg-5 mt-4">Know more about us</a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-6 features-with-17-left1">
                        <a href="#url" class="icon"><img src="assets/images/pizza.png" alt="" /></a>
                        <h4><a href="#url">Right food baked with natural ingredient</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1">
                        <a href="#url" class="icon"><img src="assets/images/burger.png" alt="" /></a>
                        <h4><a href="#url">The use of natural best quality products</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1 mt-5 pt-lg-3">
                        <a href="#url" class="icon"><img src="assets/images/drink.png" alt="" /></a>
                        <h4><a href="#url"> World’s best Chef and Nutritionist!</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1 mt-5 pt-lg-3">
                        <a href="#url" class="icon"><img src="assets/images/fries.png" alt="" /></a>
                        <h4><a href="#url">Fastest delivery on your door step</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //iphone home block -->
<section class="w3l-block py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 align-self">
                <h3>Choose what you want, select a pick up time</h3>
                <p class="mt-md-4 mt-3 mb-0">Because in less than an hour, your command will be fulfilled, and you’ll be devouring the delicious goodness our chefs have sent you.</p>
                <a href="#url" class="btn-style btn-danger btn mt-lg-5 mt-4"><span class="fa fa-shopping-cart mr-2"></span> Order Online</a>
            </div>
            <div class="col-lg-4 col-md-6 align-self mt-md-0 mt-5">
                <h3>Earn points every time you order online</h3>
                <p class="mt-md-4 mt-3 mb-0"> We’ll deliver to you wherever you are. We have even delivered to a customer who was in the park and decided on an impromptu picnic. True story. Try it.</p>
                <a href="#url" class="btn-style btn-danger btn mt-lg-5 mt-4"><span class="fa fa-book mr-2"></span> Learn More</a>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <img src="assets/images/10.jpg" class="img-fluid radius-image" alt="image">
            </div>
        </div>
    </div>
</section>


<div class="container">
<div class="row">
<?php 
include("admin/include/db.php");
$select = "SELECT * FROM product";
$result = $connection->query($select);
while($row = $result->fetch_assoc()){ ?>
<div class="col-md-3">
<div class="card" >
  <img class="card-img-top" src="admin/product_image/<?php echo $row['image'];?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['name']; ?></h4>
    <p class="card-title">Category :<?php echo $row['category']; ?></p>
    <p class="card-title">Price :<?php echo $row['price']; ?></p>
    <p class="card-text"><?php echo $row['description']; ?></p>
    <p class="orderbutton"><a  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#booknow<?php echo $row['id']; ?>" style="color: #fff;">Book Now</a></p>

<!-- modal start -->
<!-- The Modal -->
<div class="modal" id="booknow<?php echo $row['id']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Now </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="book_order.php" method="post">
<fieldset>

    <p style="color: #f00;" ><b>Books Name : <i><?php echo $row['name']; ?></i></b></p> 
    <p style="color: #f00;" ><b>Category : <i><?php echo $row['category']; ?></i></b></p> 
    <p style="color: #f00;" ><b>Price : <i><?php echo $row['price']; ?></i></b></p>  
    <p style="color: #f00;" ><b>Description : <i><?php echo $row['description']; ?></i></b></p> 

    <hr>

    <input type="hidden" value="<?php echo $row['name']; ?>" name="pname">

    <input type="hidden" value="<?php echo $row['category']; ?>" name="category">

    <input type="hidden" value="<?php echo $row['price']; ?>" name="price">

    <input type="hidden" value="<?php echo $row['description']; ?>" name="description">

    <p style="color: #f00;"><b>Name</b></p>
    <p><input type="text" name="cname" placeholder="name .." class="form-control"></p>

    <p style="color: #f00;"><b>Contact No</b></p>
    <p><input type="text" name="cnumber" placeholder="contact no .." class="form-control"></p>

    <p style="color: #f00;"><b>Address</b></p>
    <p><textarea name="address"  cols="13" class="form-control"></textarea></p>

    <input type="hidden" value="<?php echo $row['price']; ?>" name="price">
    <hr>
    <p ><input type="submit" name="submit" value="Book Now" class="btn" style="background-color: #f00;color: #fff;" /></p>
</fieldset>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- modal end -->

</div>
</div>
</div>
<?php } ?>
</div>
</div>



<section class="w3l-portfolio-8 py-5">
    <div class="portfolio-main py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h3 class="title-big">For Pizza Lover</h3>
            </div>
            <div class="row galler-top mt-lg-5 mt-4">
                <div class="col-md-3 col-6 protfolio-item hover14 align-self">
                    <a href="assets/images/g6.jpg" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g6.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14">
                    <a href="assets/images/g1.jpg" data-lightbox="example-set" class="mb-4"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g1.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                    <a href="assets/images/g2.jpg" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g2.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14">
                    <a href="assets/images/g3.jpg" data-lightbox="example-set" class="mb-4"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g3.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                    <a href="assets/images/g6.jpg" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g6.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14 align-self">
                    <a href="assets/images/g1.jpg" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="assets/images/g1.jpg" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--/testimonials-->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-5">
			<div class="container py-lg-5 py-md-4">
				<div class="title-content text-center">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="title-big">What our Clients say</h3>
				</div>
				<div class="row mt-lg-5 mt-4">
					<div class="col-md-12 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Phillip Hunt</h4>
											<p>CEO, Zomato</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/client1.jpg" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Sara Grant</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/client2.jpg" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Luke Jacobs</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/client3.jpg" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Claire Olson</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/client4.jpg" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
  <!-- footers 20 -->
  <?php include("include/footer.php"); ?>