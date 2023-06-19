<?php
include 'header.php'
?>
<?php
include 'admin/db.php'
?>

        <title>Restaurant</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="css2/bootstrap.css" />
    <link rel="stylesheet" href="./fonts/icon-font/css/style.css" />
    <link rel="stylesheet" href="./fonts/typography-font/typo.css" />
    <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="./plugins/aos/aos.min.css" />
    <link rel="stylesheet" href="./plugins/slick/slick.min.css" />
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="css2/main.css" />
    <!-- Custom stylesheet -->
  </head>

  <section class="showcase-area">
        <div class="showcase-container">
            <h1 class="main-title" id="home">BEST MP NAGAR RASTAURANT</h1>
            <p>Eat Healty, it is good for our health.</p>
            <!-- <a href="menu.php" class="btn btn-primary">Menu</a> -->
        </div>
    </section>

    <!-- <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've beem making healthy food last for 10 years</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab
                    eos omnis, nobis dignissimos perferendis et officia architecto,
                    fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
                    maiores praesentium soluta alias asperiores saepe commodi
                    consequatur? Perferendis est placeat facere aspernatur!
                </p>
            </div>
            <div class="about-img">
                <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food" />
            </div>
        </div>
    </section> -->
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                <h3>Fast Food</h3>  
                    <img src="img/menu/fasyfood.jpeg" alt="error" />
                    <div class="img-content">
                        <h3>Fast Food</h3>
                        <!-- <a href="https://en.wikipedia.org/wiki/Fruit" class="btn btn-primary" target="blank">learn
                            more</a> -->
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                <h3>Shakes</h3>  
                    <img src="img/menu/shakes.jpeg" alt="error" />
                    <div class="img-content">
                        <h3>Shakes</h3>
                        <!-- <a href="https://en.wikipedia.org/wiki/Vegetable" class="btn btn-primary" target="blank">learn
                            more</a> -->
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                <h3>South Indian</h3>
                    <img src="img/menu/southindian.jpeg" alt="error" />
                    <div class="img-content">
                        <h3>South Indian</h3>
                        <!-- <a href="https://en.wikipedia.org/wiki/Grain" class="btn btn-primary" target="blank">learn
                            more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Aaj Kya Khana Bana Hai?</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/dosa.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Masala Dosa</h2>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 85</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/lbutterroti.jpg" alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Butter Roti</h2>
                    <p>
                    Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377;12</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/paneer.JPG" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Panner</h2>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 160</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/parathe.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Allo Parathe</h2>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 50</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/noodles.jpeg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Crispy Noodles</h2>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 95</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/pizza.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Pizza</h2>
                    <p>
                       Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 160</p>
                </div>
            </div>


            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/rasgulla.jpeg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Rasgulla</h2>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 55</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="img/menu/chole.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Chole Khulche</h2>
                    <p>
                       Lorem ipsum dolor sit amet.
                    </p>
                    <p class="food-price">Price: &#8377; 140</p>
                </div>
            </div>

        </div>
    </section>
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="img/review/varun.png" alt="" />
                        <p class="customer-name">Varun Gohe</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Guys Fried Rice test is really Amazing please one time go to the restaurant with your group thank You 
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="img/review/deependra.jpeg" alt="" />
                        <p class="customer-name">Deependra Patel</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                   The Food Qulity really good And and quantity is also more than other restaurant please visit atleast one at your birthday
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="img/review/karan.jpeg" alt="" />
                        <p class="customer-name">Karan choudhary</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                   Food 
                </p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="img/restaurant.jpeg" alt="" />
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Name" type="text" name="first_name" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Email" type="text" name="email" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Phone" type="number" name="contact_datail" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Address" type="text" name="address1" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <textarea class="textarea" placeholder="Message" type="text" name="Message" required></textarea>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button name="submit" type="submit" class="btn btn-warning">Submit</button>
                  
                </form> 
            </div>
        </div>
        
        <?php
        
if(isset($_POST['submit']))
{
            $newUser="INSERT INTO contact( Fname, Email,cdetail	,	Addresss	 , Message_1) VALUES ('$_POST[first_name]','$_POST[email]','$_POST[contact_datail]','$_POST[address1]','$_POST[Message]')";
            if (mysqli_query($con,$newUser))
            {
                echo "<script type='text/javascript'> alert('Your Details has been sent')</script>";
                
            }
            else
            {
                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
          }
        }
$msg="Your code is correct";

?>
</form>
    </section>
    <footer id="footer">
        <h2>Restraunt &copy; all rights reserved</h2>
    </footer>
</body>
<!-- 
    .................../ JS Code for smooth scrolling /...................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="app.js"></script>

<?php
include 'footer.php'
?>

