<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    <a href="<?php echo e(url('/membres')); ?>">Voir la liste des membres</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Identité</th>
                            <th scope="col">Email</th>
                            <th scope="col">Approbation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $les_utilisateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilisateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <?php if($utilisateur->approbation == 0): ?>

                            <th><?php echo e($utilisateur->name); ?></th>
                            <td><?php echo e($utilisateur->email); ?></td>
                            <td><a class="btn btn-primary" href="/approbation/<?php echo e($utilisateur->id); ?>">Approuver</a></td>

                        <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremy/projetLaravel/GestionClub/resources/views/pages_site/utilisateurs.blade.php ENDPATH**/ ?>