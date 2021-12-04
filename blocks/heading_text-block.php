<?php
$heading_text = get_field('heading-text');
$heading = get_field('heading')
?>

<?php if( have_rows('heading-text') ): ?>
    <section class="container bg-image">
        <div class="producer">
            <h1><?php echo $heading; ?></h1>
                <?php while( have_rows('heading-text') ): the_row(); 
                    $heading = get_sub_field('heading');
                    $textarea = get_sub_field('textarea');
                    
                ?>
                <div class="producer-item">
                    
                        <h2><?php echo $heading; ?></h2>
                        <article><?php echo $textarea; ?></article>

                </div>
                <?php endwhile; ?>
        </div>
</section>
<?php endif; ?>