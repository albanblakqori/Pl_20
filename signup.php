<?php
require "header.php";
?>


<div class="signup-container">
<form action="include/signup.inc.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Emri</label>
      <input type="text" name="emri" class="form-control" id="inputName" placeholder="Emri juaj">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSureame">Mbiemri</label>
      <input type="text" name="mbiemri" class="form-control" id="inputSurname" placeholder="Mbiemri juaj">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Adresa elektronike</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Adresa elektronike">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Fjalekalimi</label>
      <input type="password" name="pwd" class="form-control" id="inputPassword4" placeholder="Fjalekalimi">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Numri i telefonit</label>
      <input type="tel" name="tel" class="form-control" id="inputCity" placeholder="Numri juaj i telefonit">
    </div>
    <div class="form-group col-md-6">
    <button style="position:fixed;right:100px;margin-top:20px;" type="submit" name="signup-button" class="btn btn-success">Regjistrohu</button>
    </div>
  </div>

</form>
</div>



<?php
require "footer.php";
?>
