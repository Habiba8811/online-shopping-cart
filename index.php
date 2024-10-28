<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARTS - One Stop For All</title>

 
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-3.jpg">

</head>

<body id="top">

   <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="alert">
      <div class="container">
        <p class="alert-text">Free Shipping On All Orders Above PKR5000</p>
      </div>
    </div>

    <div class="header-top" data-header>
      <div class="container">

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field">
          <a href="search.php">
          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
       </a>
        </div>

        <a href="./index.php" class="logo">
          <img src="./assets/images/logo-black.png" width="179" height="26" alt="ARTS">
        </a>

        <div class="header-actions">
      <a href="login-register form\login.php">
          <button class="header-action-btn" aria-label="user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
        </a>
        
          <a href="cart page\index.php">
          <button class="header-action-btn" aria-label="cart item">
            <data class="btn-text" value="0">$0.00</data>
            
            <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

            <span class="btn-badge">0</span>
          </button>
          </a>

        </div>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="categories.php" class="navbar-link has-after">Categories</a>
              
            </li>

            <li>
              <a href="sale.php" class="navbar-link has-after">Sale</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link has-after">Blog</a>
            </li>

            <li>
              <a href="exchange & refunds.php" class="navbar-link has-after">Returns & Refunds</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>





  <!-- 
    - #MOBILE NAVBAR
  -->

  <div class="sidebar">
    <div class="mobile-navbar" data-navbar>

      <div class="wrapper">
        <a href="index.php" class="logo">
          <img src="./assets/images/logo-black.png" width="179" height="26" alt="ARTS">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="index.php" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="categories.php" class="navbar-link" data-nav-link>Categories</a>
        </li>

        <li>
          <a href="sale.php" class="navbar-link" data-nav-link>Sale</a>
        </li>

        <li>
          <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
        </li>

        <li>
          <a href="exchang & refunds.php" class="navbar-link has-after">Returns & Refunds</a>
        </li>

      </ul>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero_banner_no_text.webp')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    NYX <br>
                    Professional Makeup
                  </h1>

                  <p class="hero-text">
                    Elevate Your Beauty, Illuminate Your Confidence! <br>
                  Shop Our NYX Collection.</p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero banner 2.gif')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    Discover Our <br>
                    New <br>Birthday Cards Collection
                  </h1>

                  <p class="hero-text">
                    </p>

                  <p class="price">Or Costumize Your Own</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero banner 3.webp')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                  Wonderland of Toys <br>
                  Where Imagination Comes to Play!
                  </h1>

                  <p class="hero-text">
                   <br>
                  Discover Fun for All Ages!</p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Summer Collection</h2>

                <p class="card-text">Starting From Rs.2000</p>

                <a href="handbags.php" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection 4.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">What’s New?</h2>

                <p class="card-text">Shop Our New Ballpoint Pens</p>

                <a href="#" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection 3.webp')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Buy 1 Get 1</h2>

                <p class="card-text">Butterfly Sticker Pack   </p>

                <a href="#" class="btn-link">
                  <span class="span">Shop Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection 5.webp')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SHOP
      -->
        

<section class="section shop" id="shop" aria-label="shop" data-section>
    <div class="container">
        <?php
        include 'db_connect.php'; // Include the database connection file

        // Define the subcategory for the section title
        $subcategory = "Our Bestsellers";

        // Fetch the products for the specified subcategory
        $products_query = "SELECT * FROM products WHERE product_subcategory = ? LIMIT 6";
        $stmt = $conn->prepare($products_query);
        $stmt->bind_param("s", $subcategory); // Bind the subcategory parameter
        $stmt->execute();
        $products_result = $stmt->get_result();
        ?>

        <div class="title-wrapper">
            <h2 class="h2 section-title"><?php echo htmlspecialchars($subcategory); ?></h2>
            <a href="#" class="btn-link">
                <span class="span">Shop All Products</span>
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
        </div>
        <ul class="has-scrollbar">
            <?php
            if ($products_result->num_rows > 0) {
                // Output data for each row
                while ($row = $products_result->fetch_assoc()) {
                    $product_id = $row['product_id'];
                    $product_name = $row['product_name'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    $product_special_offer = $row['product_special_offer'];
                    $discount = $product_special_offer ? "-$product_special_offer%" : '';
                    ?>
                    <li class="scrollbar-item">
                        <div class="shop-card">
                            <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                <img src="./assets/images/<?php echo htmlspecialchars($product_image); ?>" width="540" height="720" loading="lazy"
                                    alt="<?php echo htmlspecialchars($product_name); ?>" class="img-cover">
                                <?php if ($discount): ?>
                                    <span class="badge" aria-label="<?php echo htmlspecialchars($discount); ?>"><?php echo htmlspecialchars($discount); ?></span>
                                <?php endif; ?>
                                <div class="card-actions">
                                    <button class="action-btn" aria-label="add to cart">
                                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                    <button class="action-btn" aria-label="add to wishlist">
                                        <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                    <button class="action-btn" aria-label="compare">
                                        <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="price">
                                    <?php if ($discount): ?>
                                        <del class="del">$<?php echo htmlspecialchars($product_price * (1 + $product_special_offer / 100)); ?></del>
                                    <?php endif; ?>
                                    <span class="span">Rs.<?php echo htmlspecialchars($product_price); ?></span>
                                </div>
                                <h3>
                                    <a href="product-page/productdetail.php?id=<?php echo htmlspecialchars($product_id); ?>" class="card-title"><?php echo htmlspecialchars($product_name); ?></a>
                                </h3>
                                <div class="card-rating">
                                    <div class="rating-wrapper" aria-label="5 star rating">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="rating-text">5170 reviews</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            } else {
                echo "<li>No products found</li>";
            }

            $stmt->close();
            $conn->close();
            ?>
        </ul>
    </div>
</section>


<section class="section shop" id="shop" aria-label="shop" data-section>
    <div class="container">
        <?php
        include 'db_connect.php'; // Include the database connection file

        // Define the subcategory for the section title
        $subcategory = "Under Rs.1000";

        // Fetch the products for the specified subcategory
        $products_query = "SELECT * FROM products WHERE product_subcategory = ? LIMIT 6";
        $stmt = $conn->prepare($products_query);
        $stmt->bind_param("s", $subcategory); // Bind the subcategory parameter
        $stmt->execute();
        $products_result = $stmt->get_result();
        ?>

        <div class="title-wrapper">
            <h2 class="h2 section-title"><?php echo htmlspecialchars($subcategory); ?></h2>
            <a href="#" class="btn-link">
                <span class="span">Shop All Products</span>
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
        </div>
        <ul class="has-scrollbar">
            <?php
            if ($products_result->num_rows > 0) {
                // Output data for each row
                while ($row = $products_result->fetch_assoc()) {
                    $product_id = $row['product_id'];
                    $product_name = $row['product_name'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    $product_special_offer = $row['product_special_offer'];
                    $discount = $product_special_offer ? "-$product_special_offer%" : '';
                    ?>
                    <li class="scrollbar-item">
                        <div class="shop-card">
                            <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                                <img src="./assets/images/<?php echo htmlspecialchars($product_image); ?>" width="540" height="720" loading="lazy"
                                    alt="<?php echo htmlspecialchars($product_name); ?>" class="img-cover">
                                <?php if ($discount): ?>
                                    <span class="badge" aria-label="<?php echo htmlspecialchars($discount); ?>"><?php echo htmlspecialchars($discount); ?></span>
                                <?php endif; ?>
                                <div class="card-actions">
                                    <button class="action-btn" aria-label="add to cart">
                                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                    <button class="action-btn" aria-label="add to wishlist">
                                        <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                    <button class="action-btn" aria-label="compare">
                                        <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="price">
                                    <?php if ($discount): ?>
                                        <del class="del">$<?php echo htmlspecialchars($product_price * (1 + $product_special_offer / 100)); ?></del>
                                    <?php endif; ?>
                                    <span class="span">Rs.<?php echo htmlspecialchars($product_price); ?></span>
                                </div>
                                <h3>
                                    <a href="product-page/productdetail.php?id=<?php echo htmlspecialchars($product_id); ?>" class="card-title"><?php echo htmlspecialchars($product_name); ?></a>
                                </h3>
                                <div class="card-rating">
                                    <div class="rating-wrapper" aria-label="5 star rating">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="rating-text">5170 reviews</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            } else {
                echo "<li>No products found</li>";
            }

            $stmt->close();
            $conn->close();
            ?>
        </ul>
    </div>
</section>





      <!-- 
        - #BANNER
      -->

      <section class="section banner" aria-label="banner" data-section>
        <div class="container">

          <ul class="banner-list">

            <li>
              <div class="banner-card banner-card-1 has-before hover:shine">

                <p class="card-subtitle">New Collection</p>

                <h2 class="h2 card-title">Discover Our Autumn Skincare</h2>

                <a href="#" class="btn btn-secondary">Explore More</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/pexels-hngstrm-1939485.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">

                <h2 class="h2 card-title">25% off Everything</h2>

                <p class="card-text">
                  Makeup with extended range in colors for every human.
                </p>

                <a href="#" class="btn btn-secondary">Shop Sale</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/pexels-steve-1484759.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">

          <h2 class="h2-large section-title">Why Shop with ARTS?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/fast-delivery.png" width="204" height="236" loading="lazy" alt="Guaranteed PURE"
                  class="card-icon">

                <h3 class="h3 card-title">Fast Delivery</h3>

                <p class="card-text">
                  Shop now for lightning-fast delivery! Get your favorite products delivered to your door in no time!
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/credit-card.png" width="204" height="236" loading="lazy"
                  alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Secure Payments</h3>

                <p class="card-text">
                  Our platform ensures secure payment processing with end-to-end encryption, protecting your sensitive data every step of the way.
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/live-chat.png" width="204" height="236" loading="lazy"
                  alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">24/7 Chat Support</h3>

                <p class="card-text">
                  Enjoy 24/7 chat support for a seamless shopping experience. We're here to assist anytime!
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFER
      -->

      <section class="section offer" id="offer" aria-label="offer" data-section>
        <div class="container">

          <figure class="offer-banner">
            <img src="./assets/images/offer .jpg" width="305" height="408" loading="lazy" alt="offer products"
              class="w-100">

            <img src="./assets/images/offer 2.webp" width="450" height="625" loading="lazy" alt="offer products"
              class="w-100">
          </figure>

          <div class="offer-content">

            <p class="offer-subtitle">
              <span class="span">Special Offer</span>

              <span class="badge" aria-label="20% off">-20%</span>
            </p>

            <h2 class="h2-large section-title">YSTUDIO - Glamour Evolve Ocean Sustainable Ballpoint Pen (Teal Green)</h2>

            <p class="section-text">
              Made using clean, non-toxic ingredients, our products are designed for everyone.
            </p>

            <div class="countdown">

              <span class="time" aria-label="days">15</span>
              <span class="time" aria-label="hours">21</span>
              <span class="time" aria-label="minutes">46</span>
              <span class="time" aria-label="seconds">08</span>

            </div>

            <a href="#" class="btn btn-primary">View Details</a>

          </div>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog" data-section>
        <div class="container">

          <h2 class="h2-large section-title">More to Discover</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-1.jpg" width="700" height="450" loading="lazy" alt="Find a Store"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Find a Store</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-2.jpg" width="700" height="450" loading="lazy" alt="From Our Blog"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">From Our Blog</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-3.jpg" width="700" height="450" loading="lazy" alt="Our Story"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Our Story</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" data-section>
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <p class="footer-list-text">
              Find a location nearest you. See <a href="#" class="link">Our Stores</a>
            </p>
          </li>

          <li>
            <p class="footer-list-text bold">+391 (0)35 2568 4593</p>
          </li>

          <li>
            <p class="footer-list-text">hello@domain.com</p>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful links</p>
          </li>

          <li>
            <a href="#" class="footer-link">New Products</a>
          </li>

          <li>
            <a href="#" class="footer-link">Best Sellers</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bundle & Save</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Gift Card</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Infomation</p>
          </li>

          <li>
            <a href="#" class="footer-link">Start a Return</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="newsletter-title">Good emails.</p>

          <p class="newsletter-text">
            Enter your email below to be the first to know about new collections and product launches.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email address" required
              class="email-field">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <div class="wrapper">
          <p class="copyright">
            &copy; 2024 E-Project
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>
        </div>

        <a href="#" class="logo">
          <img src="./assets/images/logo-black.png" width="179" height="26" loading="lazy" alt="Glowing">
        </a>

        <img src="./assets/images/pay.png" width="313" height="28" alt="available all payment method" class="w-100">

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>