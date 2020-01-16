<?php if(isset($_SESSION) && array_key_exists('success',  $_SESSION) && $_SESSION['success'] != null): ?>
    <div  class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['success'] ?>        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION) && array_key_exists('error', $_SESSION) && $_SESSION['error'] != null): ?>
    <div id="alert-error"  class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['error'];?>           
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

