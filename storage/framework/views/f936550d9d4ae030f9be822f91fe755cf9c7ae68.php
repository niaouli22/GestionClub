<!DOCTYPE html>
<html>

<head>
    <!-- Licence Pro Servicetique -->
    <link rel='stylesheet' href='/css/mon_style.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo $__env->yieldContent('entete'); ?>
    <title>
        <?php echo $__env->yieldContent('titre'); ?>
    </title>
</head>


<body>
<?php echo $__env->make('pages_site/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="titre_contenu">
            <?php echo $__env->yieldContent('titre_contenu'); ?>
        </div>
        <div class="contenu">
            <?php echo $__env->yieldContent('contenu'); ?>
        </div>
        <div class="pied_page"><?php echo $__env->yieldContent('pied_page'); ?></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/pages_site/fond.blade.php ENDPATH**/ ?>