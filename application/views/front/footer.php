  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Wisata</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
              Designed by <a href="https://www.linkedin.com/in/alfharizky-fauzi-20628817b/">Alfharizky Fauzi</a>
          </div>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>mamba/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/') ?>mamba/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/') ?>mamba/js/main.js"></script>


  <!-- Style -->
  <script>
$('#portofolio a').on('click', function(event) {
    event.preventDefault();

    $.ajax(this.href, {
        success: function(data) {
            $('#portofolio').html($(data).find('#potofolio *'));
            // $('#notification-bar').text('The page has been successfully loaded');
        },
        error: function() {
            // $('#notification-bar').text('An error occurred');
        }
    });
});
  </script>

  </body>

  </html>