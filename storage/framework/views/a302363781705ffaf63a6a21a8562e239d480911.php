<!-- Refonte de la page par defaut de l'erreur 404 --> 

<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Page introuvable
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Page introuvable
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<a href="<?php echo e(url('/membres')); ?>">Revenir à la liste des membres</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/errors/404.blade.php ENDPATH**/ ?>