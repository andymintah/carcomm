<?php $__env->startSection('content'); ?>

<hr class="featurette-divider">
<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading"><?php echo e($company->name); ?></h2>
    <p class="lead"><?php echo e($company->description); ?></p>
    <a class="btn btn-primary" href='/companies/<?php echo e($company->id); ?>'>More</a>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/carcomm/resources/views/companies/index.blade.php ENDPATH**/ ?>