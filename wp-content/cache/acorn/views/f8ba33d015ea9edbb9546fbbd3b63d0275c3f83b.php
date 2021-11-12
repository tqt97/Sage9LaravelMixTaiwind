<time class="updated" datetime="<?php echo e(get_post_time('c', true)); ?>">
  <?php echo e(get_the_date()); ?>

</time>

<p class="byline author vcard">
  <span><?php echo e(__('By', 'sage')); ?></span>
  <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn">
    <?php echo e(get_the_author()); ?>

  </a>
</p>
<?php /**PATH C:\Users\Admin\Local Sites\hellosage9\app\public\wp-content\themes\sage9\resources\views/partials/entry-meta.blade.php ENDPATH**/ ?>