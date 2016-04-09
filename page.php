<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php
  $image_id = get_post_meta( get_the_ID(), 'page_image');
  $image = wp_get_attachment_metadata( $image_id[0] );
  $uploads = wp_upload_dir();
  $upload_path = $uploads['baseurl'];
?>

<div class="demo-page" style="background-image: url('<?php echo $upload_path . '/' . $image[file] ?>'); height: <?php echo $image[height] ?>px;"></div>
