<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php
          if(!isset($_SESSION['userEmri'])){
              echo'Ju duhet te kyqeni per te rezervuar!';
          }elseif(isset($_SESSION['userEmri'])){
              echo 'Mire se erdhe '.$_SESSION['userEmri'];
          }

          ?>
      </div>

        <?php
        if(isset($_SESSION['userEmri'])){
          echo'  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
       
      </div> ';

        }
        ?>

    </div>
  </div>
</div>