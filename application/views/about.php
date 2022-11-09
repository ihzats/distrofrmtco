<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="<?= base_url() ?>assets/onsite.css">
<style>
  .cms-sp-lg-img {
    width: 658px;
    height: 500px;
    overflow: hidden
  }

  .cms-sp-sm-img {
    width: 323px;
    height: 500px;
    overflow: hidden
  }

  .cms-third-lfloat {
    float: left;
    width: 32%;
  }

  .cms-third-pl {
    padding-left: 2%;
  }
</style>

<head>
  <?php $this->load->view('produk/_partials-heda.php') ?>
</head>

<body>
  <?php $this->load->view('produk/_partials-nav.php') ?>
  <main style="margin-top: 100px;">
    <div class="cms-row">
      <div class="cms-full mbxl" style="margin-top: 40px;">
        <center><img src="<?= base_url() ?>/assets/images/about.png" alt="img"></center>
      </div>
    </div>


    <div mbxl="" style="text-align: center; width:800px; margin:auto;">
      <h2>TENTANG FRMT.CO</h2>

      <p>
        FRMT.CO didirikan pada tahun 2020. Saat ini, FRMT.CO
        Indonesia merupakan retail online fashion dengan perkembangan paling
        pesat di Asia. Situs di setiap negara memastikan bahwa produk fashion
        disesuaikan dengan selera negara masing-masing dan mengadaptasi
        preferensinya. Dengan pilihan lebih dari 500 brand lokal dan
        internasional, kami membawa fashion ke dalam dimensi yang lebih baik
        dari sebelumnya. Kami menawarkan,dan banyak lagi!
        Hal inilah yang membuat kami menjadi tujuan utama fashion online di Indonesia.
        Hanya dalam beberapa tahun, kami telah
        merevolusi skena mode di Asia, dimulai dari kebiasaan berbelanja Anda
        hingga membentuk gaya personal Anda. Lebih dari 30.000 produk online dan
        ratusan produk baru setiap minggunya, kami sangat ambisius dan akan
        terus berkembang. Kabar baiknya adalah, kami memberikan Anda banyak
        sekali pilihan untuk tetap menjadi seseorang yang stylish. Kami adalah
        sarana penyedia fashion yang diimbangi dengan teknologi terkini yang
        akan memberikan Anda pengalaman berbelanja online yang tak tertandingin.
        Mengapa berbelanja di tempat lain ketika FRMT.CO adalah toko fashion
        online yang melayani segala keperluan fashion Anda. Hubungi kami melalui
        Facebook, ikuti Twitter atau Instagram untuk informasi terbaru seputar
        fashion dan tren terkini.</p>
      <br>
      <p>Temukan ribuan brand lokal dan internasional original dan berkualitas
        untuk melengkapi kebutuhan fashion Anda. Jika nanti pesanan tidak
        memuaskan Anda, nikmati gratis 30 hari pengembalian dengan mudah di
        seluruh Indonesia.
      </p><br>

    </div>
    </div>
    </div>
    </div>

  </main>
  <div style="margin-top: 250px">
    <?php $this->load->view('produk/_partials-footer.php') ?>
  </div>
  <!--Footer-->
  <!--  <footer class="page-footer text-center font-small mt-4 wow fadeIn fixed-bottom">-->
  <!---->
  <!--    <div class="footer-copyright py-3">-->
  <!--      © --><? //= date('Y') 
                  ?>
  <!-- Copyright:-->
  <!--      <a href="https://www.instagram.com/rahmaap__/" target="_blank"> rahmaap__ </a>-->
  <!--    </div>-->
  <!---->
  <!---->
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