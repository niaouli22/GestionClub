<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Ceci est un exemple de page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
<?php echo e($nom); ?> <?php echo e($prenom); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class='h1'> Ceci est un exemple de contenu </div>
<p>
blablabla...
</p>
<div class='h2'> C'est tout pour l'instant </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/pages_site/exemple.blade.php ENDPATH**/ ?>