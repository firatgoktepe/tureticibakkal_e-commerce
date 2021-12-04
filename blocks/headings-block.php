<?php

// Headings Block

$heading_1 = get_field('heading-1');
$heading_2 = get_field('heading-2');
$textarea = get_field('textarea');
?>

<div class="bg-image">
    <h1><?php echo $heading_1; ?></h1>
    <h2><?php echo $heading_2; ?></h2>
    <article>
        <?php echo $textarea; ?>
    </article>
</div>
