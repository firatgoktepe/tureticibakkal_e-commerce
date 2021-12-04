<?php
$card = get_field('card')
?>

<?php if( have_rows('card') ): ?>
    <div>
        <ul class="producer-card-list">
        <?php while( have_rows('card') ): the_row(); 
            $heading = get_sub_field('heading');
            $paragraph = get_sub_field('paragraph');
            $paragraph2 = get_sub_field('paragraph2');
        ?>
            <li class="producer-card bg-image">
              <a class="producer-card-description">
                <h2><?php echo $heading; ?></h2>
                <p>
                <span style="font-weight: bold; font-size: 1.2rem"
                    >Üretim Yeri:</span
                  >
                    <?php echo $paragraph; ?>
                </p>
                <br />

                <p>
                <span style="font-weight: bold; font-size: 1.2rem"
                    >Üretilen Ürünler:</span
                  >
                    <?php echo $paragraph2; ?>
                </p>
              </a>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>