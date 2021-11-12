<div class="max-w-3xl mx-auto">

  <a class="sr-only focus:not-sr-only" href="#main">
    <?php echo e(__('Skip to content')); ?>

  </a>

  <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="main" class="py-8 prose main">
      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
      <aside class="sidebar">
        <?php echo $__env->yieldContent('sidebar'); ?>
      </aside>
    <?php endif; ?>

  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\Users\Admin\Local Sites\hellosage9\app\public\wp-content\themes\sage9\resources\views/layouts/app.blade.php ENDPATH**/ ?>