<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Club des Usagers de l'Espace galactique
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Liste des membres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<?php $__currentLoopData = $les_membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
<a href="/modifier/<?php echo e($membre->id); ?>"> <?php echo e($membre->prenom); ?> <?php echo e($membre->nom); ?></a>
</h3>
<div class='h2'>
<?php echo e($membre->adresse); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a href="<?php echo e(url('/creer')); ?>"> Créer nouveau membre </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Downloads/ProjetLaravel/GestionClub/resources/views/pages_site/consultation_edition.blade.php ENDPATH**/ ?>