<?php

// Home Text Block

$heading = get_field('heading');
$textarea = get_field('textarea');
$textarea2 = get_field('textarea2');
?>

<section class="bg-image">
      <div class="main">
        <h1><?php echo $heading; ?></h1>
        <article>
            <?php echo $textarea; ?>
        </article>
        <p>
            <?php echo $textarea2; ?>
        </p>
      </div>
</section>
