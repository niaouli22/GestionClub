<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Page sécurisée
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Contenu de la BD
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<?php echo e($utilisateur); ?> <?php echo e($id); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/pages_site/identite.blade.php ENDPATH**/ ?>