<?php include('view/includes/header.php'); ?>
<?php include('view/includes/menu.php'); ?>

<?php include('controller/PessoaController.php'); ?> 

<main role="main" class="container" style="padding-top: 80px;">

    <?php include('view/includes/message.php'); ?>
    <div class="tabulation">
    <?php include('view/form.php'); ?>

    <?php include('view/list.php'); ?>

    </div>
</main>

<?php include('view/includes/footer.php'); ?>