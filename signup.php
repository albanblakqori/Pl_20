<?php
require "header.php";
?>





<div class="signup-container">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Adresa elektronike</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Adresa elektronike">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Fjalekalimi</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Fjalekalimi">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresa</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Rr Agim Ramadani">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Qyteti</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Shteti</label>
      <select id="inputState" class="form-control">
        <option selected>Zgjedh...</option>
        <option>Kosove</option>
        <option>Shqiperi</option>
        <option>Maqedoni</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Kodi Postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Pranoj termet dhe kushtet...
      </label>
    </div>
  </div>
<button type="submit" class="btn btn-primary">Regjistrohu</button>
</form>



</div>





<?php
require "footer.php";
?>
