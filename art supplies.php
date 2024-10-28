<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Supplies</title>


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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
  <link rel="preload" as="image" href="./assets/images/logo-black.png">
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

     
    

   
<section class="section shop" id="shop" aria-label="shop" data-section>
    <div class="container">
        <?php
        include 'db_connect.php'; // Include the database connection file

        // Fetch the subcategory title from the database
        $subcategory_query = "SELECT DISTINCT product_subcategory FROM products LIMIT 1";
        $subcategory_result = $conn->query($subcategory_query);
        $section_title = ""; // Default title

        if ($subcategory_result->num_rows > 0) {
            $subcategory_row = $subcategory_result->fetch_assoc();
            $section_title = htmlspecialchars($subcategory_row['product_subcategory']);
        }

        // Fetch the products
        $products_query = "SELECT * FROM products LIMIT 6";
        $products_result = $conn->query($products_query);
        ?>

        <div class="title-wrapper">
            <h2 class="h2 section-title"><?php echo $section_title; ?></h2>
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
                    $discount = $product_special_offer ? "$product_special_offer%" : '';
                    $discounted_price = $product_special_offer ? $product_price * (1 - $product_special_offer / 100) : $product_price;
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
                                        <del class="del">₨ <?php echo number_format($discounted_price, 0); ?></del>
                                    <?php endif; ?>
                                    <span class="span">₨ <?php echo number_format($product_price, 0); ?></span>
                                </div>
                                <h3>
                                    <!-- Link to product detail page -->
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
        $subcategory = "Drawing Pads";

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
                                    <span class="span">$<?php echo htmlspecialchars($product_price); ?></span>
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
        $subcategory = "Art Accessories";

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
                                    <span class="span">$<?php echo htmlspecialchars($product_price); ?></span>
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








  

    - 
    
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
          <img src="./assets/images/logo-black.png" width="179" height="26" loading="lazy" alt="ARTS">
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



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
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