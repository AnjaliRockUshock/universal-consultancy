<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.html">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/image.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/image.png">
  <!-- Include Font Awesome (v6 CDN example) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <link href="assets/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/swiper.min.css">

  <link rel="stylesheet" href="assets/css/magnific-popup.css">

  <link rel="stylesheet" href="assets/css/common.css">

  <link rel="stylesheet" href="assets/css/nav-1.css">

  <link rel="stylesheet" href="assets/css/footer-1.css">

</head>

<body>
  <div class="main">
    <header class="header">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between align-items-center text-light">
                <a href="mailto:Contact@theuniversalconsultinggroup.com">Contact@theuniversalconsultinggroup.com
                  <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                      <path
                        d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                        fill="white" />
                    </svg>
                  </span>
                </a>
                <p>Empowering Global Leaders and Organizations to Achieve Excellence.</p>
                <div>
                  <!-- <div class="dropdown">
                    <button class="btn dropdown-toggle text-light" type="button" id="dropdownMenuButton1"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="flag-icon flag-icon-us me-1"></span>
                      <span>English</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                        <a class="dropdown-item active" href="#"><span class="flag-icon flag-icon-us me-1"></span>
                          <span>English</span></a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr me-1"></span>
                          <span>French</span></a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es me-1"></span>
                          <span>Spanich</span></a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-sa me-1"></span>
                          <span>Arabic</span></a>
                      </li>
                    </ul>
                  </div> -->
                  <ul class="social-icon">
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                      </a>
                    </li>
                    <!-- <li>
                      <a href="#">
                        <i class="fa-brands fa-x"></i>
                      </a>
                    </li> -->
                    <li>
                      <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                        <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/theuniversalconsultinggroup?igsh=MWswb3c4cDZqazQ1cg==">
                        <i class="fa-brands fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="banner">
        <div class="banner-img" style="background-image: url('{{ asset($bannerImage ?? 'assets/images/about-us/banner.png') }}')">
          <div class="overlay">
            <div class="container">
              <!-- navbar -->
              <nav class="navbar navbar-expand-lg header--sticky">
                <div class="container">
                  <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="assets/images/logo.png" alt="">
                  </a>
                  <div class="navbar-toggler" aria-expanded="false" role="navigation">
                    <!-- <button class="nav-link search-btn" type="button" data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                        <path
                          d="M12.8223 11.873C13.0508 12.127 13.0508 12.5078 12.7969 12.7363L12.0859 13.4473C11.8574 13.7012 11.4766 13.7012 11.2227 13.4473L8.70898 10.9336C8.58203 10.8066 8.53125 10.6543 8.53125 10.502V10.0703C7.61719 10.7812 6.5 11.1875 5.28125 11.1875C2.36133 11.1875 0 8.82617 0 5.90625C0 3.01172 2.36133 0.625 5.28125 0.625C8.17578 0.625 10.5625 3.01172 10.5625 5.90625C10.5625 7.15039 10.1309 8.26758 9.44531 9.15625H9.85156C10.0039 9.15625 10.1562 9.23242 10.2832 9.33398L12.8223 11.873ZM5.28125 9.15625C7.05859 9.15625 8.53125 7.70898 8.53125 5.90625C8.53125 4.12891 7.05859 2.65625 5.28125 2.65625C3.47852 2.65625 2.03125 4.12891 2.03125 5.90625C2.03125 7.70898 3.47852 9.15625 5.28125 9.15625Z"
                          fill="white" />
                      </svg>
                    </button> -->
                    <button class="toggle-btn" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
                      aria-label="Toggle navigation">
                      <i class="fa-solid fa-bars" style="color: red;"></i>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a href="/" class="nav-link"> Home </a>
                      </li>
                      <li class="nav-item">
                        <a href="/honorary-doctorate" class="nav-link"> Honorary Doctorate</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/service"> Services </a>
                      </li>
                      <li class="nav-item">
                        <a href="/about-us" class="nav-link"> About Us </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contact-us">Contact Us</a>
                      </li>
                      <!-- <li class="nav-item">
                        <button class="nav-link search-btn" type="button" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="../../../www.w3.org/2000/svg.html">
                            <path
                              d="M12.8223 11.873C13.0508 12.127 13.0508 12.5078 12.7969 12.7363L12.0859 13.4473C11.8574 13.7012 11.4766 13.7012 11.2227 13.4473L8.70898 10.9336C8.58203 10.8066 8.53125 10.6543 8.53125 10.502V10.0703C7.61719 10.7812 6.5 11.1875 5.28125 11.1875C2.36133 11.1875 0 8.82617 0 5.90625C0 3.01172 2.36133 0.625 5.28125 0.625C8.17578 0.625 10.5625 3.01172 10.5625 5.90625C10.5625 7.15039 10.1309 8.26758 9.44531 9.15625H9.85156C10.0039 9.15625 10.1562 9.23242 10.2832 9.33398L12.8223 11.873ZM5.28125 9.15625C7.05859 9.15625 8.53125 7.70898 8.53125 5.90625C8.53125 4.12891 7.05859 2.65625 5.28125 2.65625C3.47852 2.65625 2.03125 4.12891 2.03125 5.90625C2.03125 7.70898 3.47852 9.15625 5.28125 9.15625Z"
                              fill="white" />
                          </svg>
                        </button>
                      </li> -->
                    </ul>
                    <a href="/contact-us" class="button primary-link-btn">
                      Get Started
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                        <path
                          d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                          fill="white" />
                      </svg>
                    </a>
                  </div>
                </div>
              </nav>
              <!-- offcanvas-navbar -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header d-flex align-items-center justify-content-between">
                  <div class="offcanvas-title" id="offcanvasExampleLabel">
                    <span class="navbar-brand">
                      <img class="img-fluid" src="assets/images/logo.png" alt="">
                    </span>
                  </div>
                  <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="/" role="button" aria-expanded="false">
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/honorary-doctorate" role="button" aria-expanded="false">
                        Honorary Doctorate
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/service"> Services </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about-us">
                        About Us
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contact-us">Contact Us</a>
                    </li>

                  </ul>
                  <a href="#" class="button primary-link-btn">
                    Get Started
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                      <path
                        d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>
              </div>
              <!-- Search Modal -->
              <div class="search-modal modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Search</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search..."
                          aria-describedby="button-addon2">
                        <button class="btn" type="button" id="button-addon2">
                          <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- banner -->
              @yield('banner')
              <!-- line animation -->
              <div class="section">
                <span class="hscroll-line"></span>
                <span class="hscroll-line"></span>
                <span class="hscroll-line"></span>
                <span class="hscroll-line"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

    </header>
    <!-- navbar ends -->

    @yield('content')
    <!-- footer -->
    <footer class="footer">
      <div class="left-img">
        <img src="assets/images/footer-left-img.png" alt="">
      </div>
      <div class="right-img">
        <img src="assets/images/footer-right-img.png" alt="">
      </div>
      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3" style="margin-left: -2%;margin-right: 4%;">
            <div class="logo">
              <img src="assets/images/logo.png" alt="logo">
            </div>
            <p style="text-align: justify;">
              The Universal Consulting Group is a global consulting firm offering
              end-to-end strategic, leadership, and recognition consulting. We
              empower individuals and organizations to achieve success, growth, and
              international recognition.
            </p>
            <ul class="social-link">
              <li>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/the-universal-consulting-group/posts/?feedView=all"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <h2 class="footer-title">Our Services</h2>
            <ul class="footer-link">
              <li>
                <a href="/business-consulting">
                  ● Business Consulting</a>
              </li>
              <li>
                <a href="/leadership-executive-coaching">
                  ● Leadership & Executive Coaching</a>
              </li>
              <li>
                <a href="/branding-advisory">
                  ● Branding & PR Advisory</a>
              </li>
              <li>
                <a href="/academic-honorary-recognition">
                  ● Academic & Honorary Recognition</a>
              </li>
              <li>
                <a href="/global-partnerships">
                  ● Global Partnerships</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <h2 class="footer-title">Useful Links</h2>
            <ul class="footer-link">
              <li>
                <a href="/about-us">
                  ● About Us
                </a>
              </li>
              <li>
                <a href="/service">
                  ● Our Services
                </a>
              </li>
              <li>
                <a href="#">
                  ● News &amp; Media
                </a>
              </li>
              <li>
                <a href="#">
                  ● Testimonials
                </a>
              </li>
              <li>
                <a href="/contact-us">
                  ● Contact
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3" style="margin-left: -4%;">
            <h2 class="footer-title">Contact Info:</h2>
            <ul class="footer-link">
              <li>
                <a href="mailto:Contact@theuniversalconsultinggroup.com"><i class="fa-solid fa-envelope"></i>
                  contact@theuniversalconsultinggroup.com
                </a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-link"></i>
                  www.theuniversalconsultinggroup.com
                </a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-phone"></i>
                  +91 7575884020
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- tiny-footer -->
      <div class="tiny-footer">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <p>© 2025 Universal Consulting Group. All Rights Reserved.</p>
            </div>
            <div class="col-12 col-lg-6">
              <ul>
                <li>
                  <a href="#">Privacy Policy</a>
                </li>
                <li>
                  <a href="#">Terms &amp; Conditions </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- tiny-footer -->

    </footer>
    <!-- footer -->
    <!-- progress area start -->
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
              transition: stroke-dashoffset 10ms linear 0s;
              stroke-dasharray: 307.919, 307.919;
              stroke-dashoffset: 307.919;
            "></path>
      </svg>
    </div>
    <!-- progress area end -->
  </div>
  <!-- main -->

  <!-- pre loader start -->
  <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- pre loader end -->

  <!-- jquery -->
  <script defer src="assets/js/jquery-3.6.0.min.js"></script>

  <!-- bootstrap js -->
  <script defer src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- gsap js -->
  <script defer src="assets/js/swiper.js"></script>

  <!-- gsap js -->
  <script defer src="assets/js/gsap.min.js"></script>

  <!-- split-text js -->
  <script defer src="assets/js/split-text.js"></script>

  <!-- split-text js -->
  <script defer src="assets/js/scrolltigger.js"></script>

  <!-- split-type js -->
  <script defer src="assets/js/split-type.js"></script>

  <!-- waw js -->
  <script defer src="assets/js/waw.js"></script>

  <!-- counter-up js -->
  <script defer src="assets/js/counter-up.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/metismenu.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/magnific-popup.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/waypoint.js"></script>

  <!-- main js -->
  <script defer src="assets/js/main.js"></script>

</body>


<!-- Mirrored from devsaidul.com/html3/new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Oct 2025 06:47:00 GMT -->

</html>