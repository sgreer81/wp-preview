<div class="container">
  <div class="row">
    <?php
    // WP_Query arguments
    $args = array (
    	'post_type'              => array( 'page' ),
      'order'                  => 'ASC',
    	'orderby'                => 'title',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
    	while ( $query->have_posts() ) {
    		$query->the_post();
        $image = get_post_meta( get_the_ID(), 'page_image');
        $image_id = $image[0]; ?>

        <div class="col-sm-4">
          <a href="<?php the_permalink() ?>"><?php echo wp_get_attachment_image( $image_id, 'page-image' ); ?></a>
      		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </div>

    	<?php }
    } else { ?>
    	<h2>You don't have any pages yet. Add some.</h2>
    <?php }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
  </div>
</div>
