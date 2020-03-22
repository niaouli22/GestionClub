<?php $__currentLoopData = $les_membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
<?php echo e($membre->prenom); ?> <?php echo e($membre->nom); ?>

</h3>
<div class='h2'>
<?php echo e($membre->adresse); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/jeremy/ProjetLaravel/GestionClub/resources/views/pages_site/membres.blade.php ENDPATH**/ ?>