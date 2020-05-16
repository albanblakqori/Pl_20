<!DOCTYPE html>
<html>
<head>
</head>
<body>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline" action="include/search.inc.php" method="get">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Kerko ketu eventin qe ju deshironi"
            aria-label="Search">
            <button type="submit" class="btn btn-secondary" name="logout-submit">Kerko</button>
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">
    <?php
      if(isset($_SESSION['userEmri'])){
        echo '<p class="login-status alert alert-success">You are logged in.</p>';

    }else{
        echo'<p class="login-status alert alert-warning"> You are logged out, please sign in!</p>';
    }?>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Projekti:
    <a href="https://fiek.uni-pr.edu/">Universiteti i Prishtines</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>