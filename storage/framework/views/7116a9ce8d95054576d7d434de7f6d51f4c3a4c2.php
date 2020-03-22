<?php $__env->startSection('entete'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre'); ?>
Club des Usagers de l'Espace galactique
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titre_contenu'); ?>
Création d'un nouveau membre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="formgroup">
    <?php echo Form::open(['url' => 'creation/membre']); ?>

    <div class="formgroup">
        <?php echo Form::label('nom', 'Nom'); ?>

        <?php echo Form::text('nom', null, ['class' => 'formcontrol', 'required']); ?>

    </div>
    <div class="formgroup">
        <?php echo Form::label('prenom', 'Prénom'); ?>

        <?php echo Form::text('prenom', null, ['class' => 'formcontrol', 'required']); ?>

    </div>
    <div class="formgroup">
        <?php echo Form::label('adresse', 'Adresse électronique'); ?>

        <?php echo Form::text('adresse', null, ['class' => 'formcontrol', 'required|email']); ?>

    </div>
    <div class="formgroup">
        <?php echo Form::label('description', 'Description'); ?>

        <?php echo Form::text('description', null, ['class' => 'formcontrol', 'required']); ?>

    </div>
    <p>
    </p>
    <?php echo Form::submit("Creation membre"); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pied_page'); ?>
LicenceProServicetique 2020
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages_site/fond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/Documents/GestionClub/resources/views/pages_site/creation.blade.php ENDPATH**/ ?>