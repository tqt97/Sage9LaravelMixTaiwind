<article <?php (post_class()); ?>>
  <header>
    <h2 class="entry-title">
      <a href="<?php echo e(get_permalink()); ?>">
        <?php echo $title; ?>

      </a>
    </h2>

    <?php echo $__env->renderWhen(get_post_type() === 'post', 'partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
  </header>

  <div class="entry-summary">
    <?php (the_excerpt()); ?>
  </div>
</article>
<?php /**PATH C:\Users\Admin\Local Sites\hellosage9\app\public\wp-content\themes\sage9\resources\views/partials/content-search.blade.php ENDPATH**/ ?>