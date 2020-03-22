<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Club des Usagers de l'Espace galactique
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Modification des infos du membre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="formgroup">
<?php echo Form::model($un_membre,['url' => url('miseAJour',$un_membre->id),'method' => 'PATCH']); ?>

<div class="formgroup">
<?php echo e(Form::label('nom', 'Nom')); ?>

<?php echo e(Form::text('nom')); ?>

</div>
<div class="formgroup">
<?php echo e(Form::label('prenom', 'Prénom :')); ?>

<?php echo e(Form::text('prenom')); ?>

</div>
<div class="formgroup">
<?php echo e(Form::label('adresse', 'Adresse électronique')); ?>

<?php echo e(Form::text('adresse')); ?>

</div>

<div class="formgroup">
    <?php echo Form::label('description', 'Description'); ?>

    <?php echo Form::text('description', null, ['class' => 'formcontrol', 'required']); ?>

</div>
<p>
</p>
<?php echo Form::submit("Modifier membre", array('class' => 'btn btn-info')); ?>

<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/pages_site/edition.blade.php ENDPATH**/ ?>