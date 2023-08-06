<?php 
require_once 'includes/frontend_header.php';
?>
    <!-- header section -->
    <header id="header" class="header">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.html" class="navbar-brand">
          <img src="img/logo.png" alt="company logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2 nav-active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a href="products.html" class="nav-link">Products</a>
            </li>
            <li class="nav-item mx-2">
              <a href="singleproduct.html" class="nav-link">Single Product</a>
            </li>
            <li class="nav-item mx-2">
              <a href="store.html" class="nav-link">Store</a>
            </li>
          </ul>
        </div>
        <div class="navbar-icons d-none d-lg-flex">
          <!-- single icon -->
          <div class="navbar-icon mx-2"><i class="fas fa-search"></i></div>
          <!-- end of single icon -->
          <!-- single icon -->
          <a href="store.html" class="navbar-icon mx-2 navbar-cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <div class="cart-items">2</div>
          </a>
          <!-- end of  single icon -->
        </div>
      </nav>
      <!-- end of navbar -->
      <div class="banner d-flex align-items-center pl-3 pl-lg-5">
        <div>
          <h1 class="text-slanted text-capitalize mb-0">
            Minimalist
          </h1>
          <h1 class="text-lowercase font-weight-bold">
            interior style
          </h1>
          <a href="#" class="btn btn-yellow"> view collection </a>
        </div>
      </div>
    </header>
    <!-- end of header section -->

    <!-- services section -->
    <section id="services" class="services py-5 text-center">
      <div class="container">
        <div class="row">
          <!-- single service --> 
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-parachute-box"></i>
            </span>
            <h5 class="text-uppercase font-weight-bold">
              free shipping
            </h5>
            <p class="text-muted text-capitalize">
              free shipping on all order over 100.00
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service --> 
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-phone-volume"></i>
            </span>
            <h5 class="text-uppercase font-weight-bold">
              ONLINE SUPPORT 24/7
            </h5>
            <p class="text-muted text-capitalize">
              We Will Assist You With Your Inquiries
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service --> 
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-dollar-sign"></i>
            </span>
            <h5 class="text-uppercase font-weight-bold">
              MONEY BACK GURANTEE
            </h5>
            <p class="text-muted text-capitalize">
              Free 100% Refund For 30 Da
            </p>
          </div>
          <!-- end of single service -->
        </div>
      </div>
    </section>
    <!-- end of services section -->

    <!-- home categories -->
    <section id="home-categories" class="home-categories py-5">
      <div class="container">
        <div class="row">
          <!-- categories title -->
          <div class="col-10 mx-auto col-md-6 col-lg-3 align-self-center">
            <h5 class="text-uppercase">
              product categories
            </h5>
            <p class="text-muted text-capitalize">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore neque minus in error sunt laudantium totam nemo accusamus iure placeat.
            </p>
            <a href="" class="categorie-link text-weight-bold text-capitalize">
              view all categories
            </a>
            <div class="categorie-underline">
            </div>
          </div>
          <!-- end of categories title -->
          <!-- main categories -->
          <div class="col-10 mx-auto col-md-6 col-lg-9 my-3">
            <div class="row">
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img src="img/cagetogoryImg/bathroom-category.jpeg" class="img-fluid category-img" alt="">
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">
                      bathroom
                    </h6>
                    <p class="text-yellow mb-0">
                      50 items
                    </p>
                  </a>
                </div>
              </div>
              <!-- end of single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img src="img/cagetogoryImg/kitchen-category.jpeg" class="img-fluid category-img" alt="">
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">
                      kitchen
                    </h6>
                    <p class="text-yellow mb-0">
                      20 items
                    </p>
                  </a>
                </div>
              </div>
              <!-- end of single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img src="img/cagetogoryImg/livingroom-category.jpeg" class="img-fluid category-img" alt="">
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">
                      livingroom
                    </h6>
                    <p class="text-yellow mb-0">
                      25 items
                    </p>
                  </a>
                </div>
              </div>
              <!-- end of single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img src="img/cagetogoryImg/patio-category.jpeg" class="img-fluid category-img" alt="">
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">
                      patio
                    </h6>
                    <p class="text-yellow mb-0">
                      10 items
                    </p>
                  </a>
                </div>
              </div>
              <!-- end of single category -->
            </div>
          </div>
          <!-- end of main categories -->
        </div>
      </div>
    </section>
    <!-- end of home categories -->

    <!-- home filler -->
    <section id="home-filler">
      <div class="container-fluid">
        <div class="row home-filler align-items-center">
          <div class="col-10 mx-auto text-center text-white">
            <h4 class="text-uppercase font-weight-bold">
              smart furniture collection
            </h4>
            <p class="text-capitalize">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, accusantium
            </p>
            <a href="#" class="text-capitalize collection-link text-yellow">
              view collection
            </a>
            <div class="collection-underline"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of home filler -->

    <!-- featured section -->
    <section id="featured" class="featured py-5">
      <div class="container">
        <div class="row my-3">
          <div class="col-10 mx-auto text-center">
            <h1 class="text-uppercase">
              featured products
            </h1>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, deleniti?
            </p>
          </div>
        </div>
        <div class="row">
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-1.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-6.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-2.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-3.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-4.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">
              <img src="img/img-products/product-5.png" alt="" class="img-fluid">
              <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-capitalize">add to cart</a>
            </div>
            <h6 class="text-capitalize text-center my-2">
              special product
            </h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end of single product -->
        </div>
      </div>
    </section>
    <!-- end of featured section -->

    <!-- partners -->
    <section class="partners py-5">
      <div class="container">
        <div class="row">
          <!-- compnay carousel -->
          <div class="col-6 col-md-6 col-lg-4 mx-auto">
            <div
              id="partnerCarousel"
              class="carousel slide "
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <!-- single item -->
                <div class="carousel-item active">
                  <img
                    src="img/company-logos/company-logo-1.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
                <!-- single item -->
                <div class="carousel-item ">
                  <img
                    src="img/company-logos/company-logo-2.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
                <!-- single item -->
                <div class="carousel-item ">
                  <img
                    src="img/company-logos/company-logo-3.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
                <!-- single item -->
                <div class="carousel-item ">
                  <img
                    src="img/company-logos/company-logo-4.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
                <!-- single item -->
                <div class="carousel-item ">
                  <img
                    src="img/company-logos/company-logo-5.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
                <!-- single item -->
                <div class="carousel-item">
                  <img
                    src="img/company-logos/company-logo-6.png"
                    class="d-block w-100"
                    alt="partner company"
                  />
                </div>
                <!-- end single item -->
              </div>
              <a
                href="#partnerCarousel"
                class="carousel-control-prev"
                role="button"
                data-slide="prev"
              >
                <i class="fas fa-arrow-left"></i>
              </a>
              <a
                href="#partnerCarousel"
                class="carousel-control-next"
                role="button"
                data-slide="next"
              >
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of  partners -->

    <!-- newsletter section -->
    <section id="newsletter" class="newsletter py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto text-center">
            <h2 class="text-uppercase">
              newsletter
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti blanditiis similique eum, aut culpa maiores cupiditate alias exercitationem error nesciunt.
            </p>
            <form action="">
              <div class="input-group mt-5 mb-4">
                <input type="text" class="text-capitalize form-control" placeholder="enter your email">
                <div class="input-group-append">
                <div class="input-group-text form-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                </div>
              </div>
              <button type="submit" class=" btn btn-yellow">subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end of newsletter section -->

    <!-- skills section -->
    <section id="skills" class="skills py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
            <div class="skill-icon mr-3">
              <i class="fas fa-truck"></i>
            </div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">
                free shipping
              </h3>
              <p class="text-capitalize text-muted">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
              </p>
            </div>
          </div>
          <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
            <div class="skill-icon mr-3">
              <i class="fas fa-comment-dollar"></i>
            </div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">
                price promise
              </h3>
              <p class="text-capitalize text-muted">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
              </p>
            </div>
          </div>
          <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
            <div class="skill-icon mr-3">
              <i class="fas fa-award"></i>
            </div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">
                lifetime warranty
              </h3>
              <p class="text-capitalize text-muted">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of skills section -->

    <!-- footer section -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto text-center">
            <h1 class="text-uppercase font-weight-bold text-yellow d-inline-block footer-title">
              comfy sloth
            </h1>
            <!-- footer icons -->
            <div class="footer-icons d-flex justify-content-center my-5">
              <!-- single icon -->
              <a href="" class="footer-icon mx-2">
                <div class="fab fa-facebook"></div>
              </a>
              <!-- end of single icon -->
              <!-- single icon -->
              <a href="" class="footer-icon mx-2">
                <div class="fab fa-twitter"></div>
              </a>
              <!-- end of single icon -->
              <!-- single icon -->
              <a href="" class="footer-icon mx-2">
                <div class="fab fa-youtube"></div>
              </a>
              <!-- end of single icon -->
              <!-- single icon -->
              <a href="" class="footer-icon mx-2">
                <div class="fab fa-google-plus"></div>
              </a>
              <!-- end of single icon -->
              <!-- single icon -->
              <a href="" class="footer-icon mx-2">
                <div class="fab fa-instagram"></div>
              </a>
              <!-- end of single icon -->
            </div>
            <!-- footer icons -->
            <p class="text-muted text-capitalize w-75 mx-auto text-center">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore illum illo exercitationem ex porro consequuntur quae mollitia qui accusamus! Molestiae.
            </p>
            <div class="footer-contact d-flex justify-content-around mt-5">
              <!-- single contact -->
              <div class="text-capitalize">
                <span class="contact-icon mr-2">
                  <i class="fas fa-map"></i>
                </span>
                123 Main Street, Los Angeles
              </div>
              <!-- end of single contact -->
              <!-- single contact -->
              <div class="text-capitalize">
                <span class="contact-icon mr-2">
                  <i class="fas fa-phone"></i>
                </span>
                Phone : + (310) 111 2222
              </div>
              <!-- end of single contact -->
              <!-- single contact -->
              <div class="text-capitalize">
                <span class="contact-icon mr-2">
                  <i class="fas fa-envelope"></i>
                </span>
                Email : Eamil@Email.Com
              </div>
              <!-- end of single contact -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer section -->
    <!-- modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <h5 class="modal-title text-capitalize">product info</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--end of  modal header -->
          <!-- modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col text-center">
                <img src="img/img-products/product-1.png" class="img-fluid" alt="" />
                <!-- ratings -->
                <div class="ratings">
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="far fa-star"></i></span>
                  <span class="text-capitalize">(25 customer reviews)</span>
                </div>
                <!-- end of ratings -->
                <h2 class="text-uppercase my-2">premium office armchair</h2>
                <h2>$10.00 - $200.00</h2>
                <p class="lead text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
                  porro.
                </p>
                <!-- colors -->
                <h5 class="text-uppercase">
                  colors :
                  <span class="d-inline-block products-color products-color-black mr-2"></span>
                  <span class="d-inline-block products-color products-color-red mr-2"></span>
                  <span class="d-inline-block products-color products-color-blue mr-2"></span>
                </h5>
                <!-- end of colors -->
                <!-- sizes -->
                <h5 class="text-uppercase">
                  sizes : <span class="mx-2">xs</span> <span class="mx-2">s</span>
                  <span class="mx-2">m</span> <span class="mx-2">l</span>
                  <span class="mx-2">xl</span>
                </h5>
                <div class="d-flex flex-wrap">
                  <!-- cart buttons -->
                  <div class="d-flex my-2">
                    <span class="btn btn-black mx-1">-</span>
                    <span class="btn btn-black mx-1">4</span>
                    <span class="btn btn-black mx-1">+</span>
                  </div>
                  <button class="btn btn-black my-2 mx-2">wishlist</button>
                  <button class="btn btn-yellow my-2 mx-2">add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
  <?php require_once 'includes/frontend_footer.php';
  ?>