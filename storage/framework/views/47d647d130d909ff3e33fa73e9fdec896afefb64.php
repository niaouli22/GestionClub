<!-- Page de confirmation  --> 

<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
  Page de confirmation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Page de confirmation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>

<h3><?php echo e($confirmation); ?></h3>

<a href="<?php echo e(url('/membres')); ?>">Retourner à la liste des membres</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/projetLaravel/GestionClub/resources/views/pages_site/confirmation.blade.php ENDPATH**/ ?>