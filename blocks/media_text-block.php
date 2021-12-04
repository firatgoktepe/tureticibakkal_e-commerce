<?php

// Media Text Block

$heading = get_field('heading');
$textarea = get_field('textarea');
?>

<section class="container bg-image">
      <div class="about-content">
        <h1><?php echo $heading; ?></h1>
        <div class="about-item">
            <?php if( get_field('image') ): ?>
                <img src="<?php the_field('image'); ?>" />
            <?php endif; ?>
          <article>
            <?php echo $textarea; ?>
          </article>
        </div>
      </div>
    </section>