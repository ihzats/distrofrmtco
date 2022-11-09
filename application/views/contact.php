<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('produk/_partials-heda.php') ?>
  <link rel="stylesheet" href="stylecn.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
  </style>
</head>

<body>
  <?php $this->load->view('produk/_partials-nav.php') ?>

  <main style="margin-top: 100px;">

    <body>
       <?php if ($this->session->flashdata('message')) : ?>
    <?= $this->session->flashdata('message'); ?>
  <?php endif; ?>

      <!-- alert messages start -->
      <!-- <div class="alert-success">
        <span>Message Sent! Thank you for contacting us.</span>
      </div>
      <div class="alert-error">
        <span>Something went wrong! Please try again.</span>
      </div> -->
      <!-- alert messages end -->

      <!--contact section start-->
      <div class="contact-section">
        <div class="contact-info">
          <div><i class="fas fa-map-marker-alt"></i><small>Ds. Trucuk, Kabupaten Bojonegoro, Jawa Timur 62155</small></div>
          <div><i class="fas fa-envelope"></i>mihza44@gmail.com</div>
          <div><i class="fas fa-phone"></i>+62 85 645 322 285</div>
        </div>
        <div class="contact-form">
          <h2>Contact Us</h2>
          <form class="contact" action="" method="post">
            <input type="text" name="nama" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="pesan" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
          </form>
        </div>
      </div>
      <!--contact section end-->

    </body>
  </main>
  </div>
  <!--Footer-->
  <div style="margin-top: 250px">
    <?php $this->load->view('produk/_partials-footer.php') ?>
  </div>
  <!-- <footer class="page-footer text-center font-small mt-4 wow fadeIn fixed-bottom">-->
  <!---->
  <!--    <div class="footer-copyright py-3">-->
  <!--      © --><? //= date('Y') 
                  ?>
  <!-- Copyright:-->
  <!--      <a href="https://www.instagram.com/r.ihzaaa/" target="_blank"> R.ihzaaa </a>-->
  <!--    </div>-->
  <!---->
  <!-- -->
  <!--  </footer>-->
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>