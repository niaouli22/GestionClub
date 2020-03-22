<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Liste des membres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Liste des membres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<?php $__currentLoopData = $les_membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
<?php echo e($membre->prenom); ?> <?php echo e($membre->nom); ?>

</h3>
<div class='h2'>
<?php echo e($membre->adresse); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/ProjetLaravel/GestionClub/resources/views/pages_site/membrescss.blade.php ENDPATH**/ ?>