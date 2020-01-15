<?php if(array_key_exists('success',  $_SESSION)): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <ul style="margin-bottom: 0px;">
            <?php foreach( $_SESSION['success'] as $succ ): ?>
               <li><?php echo $suc; ?></li>                
            <?php endforeach; ?>
            </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(array_key_exists('error', $_SESSION)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul style="margin-bottom: 0px;">
            <?php foreach( $_SESSION['error'] as $erro ): ?>
               <li><?php echo $erro;?></li>                
            <?php endforeach; ?>
            </ul>            
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
