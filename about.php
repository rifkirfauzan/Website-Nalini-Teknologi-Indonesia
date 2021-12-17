
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Nalini Teknologi Indonesia | About</title>
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!-- //web fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <style>
    /* Styles for dialog window */
    #small-dialog {
      background: white;
      padding: 5px;
      max-width: 750px;
      margin: 40px auto;
      position: relative;
    }

    div#small-dialog iframe {
      width: 100%;
      height: 400px;
      display: block;
    }


    /**
 * Fade-zoom animation for first dialog
 */

    /* start state */
    .my-mfp-zoom-in .zoom-anim-dialog {
      opacity: 0;

      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;



      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
      opacity: 1;

      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);

      opacity: 0;
    }

    /* Dark overlay, start state */
    .my-mfp-zoom-in.mfp-bg {
      opacity: 0;
      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing.mfp-bg {
      opacity: 0;
    }



    /**
 * Fade-move animation for second dialog
 */

    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
      opacity: 0;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      -o-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;

      -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      transform: translateY(-20px) perspective(600px) rotateX(10deg);

    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
      opacity: 1;
      -webkit-transform: translateY(0) perspective(600px) rotateX(0);
      -moz-transform: translateY(0) perspective(600px) rotateX(0);
      -ms-transform: translateY(0) perspective(600px) rotateX(0);
      -o-transform: translateY(0) perspective(600px) rotateX(0);
      transform: translateY(0) perspective(600px) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
      opacity: 0;

      -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      transform: translateY(-10px) perspective(600px) rotateX(10deg);
    }

    /* Dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
      opacity: 0;

      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
      opacity: 0;
    }
  </style>
</head>

<body>
  <div class="w3l-bootstrap-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
      <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><img width="50px" src="assets/images/nalini-removebg-preview.png" /></a> -->
        <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </div>
  <section class="w3l-about1">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <!-- <h5>Tagline</h5> -->
          <div class="section-width">
            <h2>Kami selalu mengutamakan kepuasan klien dalam mengerjakan suatu aplikasi.</h2>
          </div>
          <div class="link-list-menu">
            <p>kami mempunyai sebuah komitmen untuk memberikan solusi dalam bidang teknologi kepada para pelaku bisnis. dalam memberikan sebuah kemudahan untuk mengelola bisnis mereka.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-about2">
    <div class="features-main py-5">
      <div class="container py-lg-3">
        <h3 class="stat-title">Kami selalu mempunyai semangat dan optimisme <br> dalam mengerjakan sesuatu</h3>
        <div class="row features">
          <div class="col-md-4 feature-1 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>2+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Project Finished</h3>
                <p class="feature-text">Kami telah berhasil menyelesaikan beberapa project aplikasi dan desain aplikasi.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 feature-2 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>2+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Klien</h3>
                <p class="feature-text">Kami mempunyai beberapa klien dari beberapa sektor usaha di indonesia</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 feature-3 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>2</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Project Running</h3>
                <p class="feature-text">Kami memiliki beberapa project yang sedang berjalan dari beberapa klien kami saat ini.</p>
                <div class="hover">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="w3l-index-block8 py-5">
  <div class="container py-md-3 text-center">
    <div class="heading text-center mx-auto">
      <h3 class="head">Tertarik untuk bekerjasama dengan kami? </h3>
    </div>
    <div class="buttons mt-4">
      <a href="contact.php" class="btn btn-outline-primary mr-2 btn-demo">Hubungi kami</a>
      <a href="contact.php" class="btn btn-primary btn-demo ml-2">Get started</a>
    </div>
  </div>
</section>
  <!-- / about-block6 -->
  <!-- footer-28 block -->
  <section class="w3l-market-footer">
  <footer class="footer-28">
          <div class="footer-bg-layer">
            <div class="container py-lg-3">
              <div class="row footer-top-28">
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Contact information</h6>
                  <ul>
                    <li>
                      <p><strong>Address</strong> : Jln Gumuruh No 176A/117 Gatot Subroto, Bandung</p>
                    </li>
                    <li>
                      <p><strong>Phone</strong> : <a href="tel:+62-895-3579-11-661">+62-895-3579-11-661</a></p>
                    </li>
                    <li>
                      <p><strong>Email</strong> : <a href="mailto:hello@nalinispace.my.id">hello@nalinispace.my.id</a></p>
                    </li>
                  </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">
                      <li class="facebook">
                        <a href="#link" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="instagram">
                        <a href="https://www.instagram.com/nalini_tekno/" title="Instagram">
                          <span class="fa fa-instagram" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="linkedin">
                        <a href="https://www.linkedin.com/company/nalini-teknoindo" title="linkedin">
                          <span class="fa fa-linkedin" aria-hidden="true"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Company</h6>
                      <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">FAQ</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Support</h6>
                      <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="tel:+62-895-3579-11-661">Chat us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
              <div class="container">
                <p class="copy-footer-28 text-center"> &copy; 2021 Nalini Teknologi Indonesia. All Rights Reserved</p>
              </div>
            </div>
          </div>
        </footer>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
      </section>
  <!-- //footer-28 block -->

  <!-- jQuery, Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->

  <script src="assets/js/owl.carousel.js"></script>

  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for owlcarousel -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

</body>

</html>