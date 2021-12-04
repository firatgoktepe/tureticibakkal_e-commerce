<?php
$accordion = get_field('accordion')
?>

<?php if( have_rows('accordion') ): ?>
    <div class="blog-card-list">
        <?php while( have_rows('accordion') ): the_row(); 
            $heading = get_sub_field('heading');
            $paragraph = get_sub_field('text');
        ?>
            <div class="blog-card bg-image">
                <h2><?php echo $heading; ?></h2>
                <details>
                    <summary>
                        <span class="btn-general btn-light" id="open">Daha Fazla</span>
                        <span class="btn-general btn-light" id="close">Daha Az</span>
                    </summary>
                    <article>
                        <?php echo $paragraph; ?>
                    </article>
                </details>
            </div>
        <?php endwhile; ?>
        
    </div>
    <script>

        function openDetails() {
            let details = document.querySelectorAll('details');
            console.log(details)
            // loop over each details element
            details.forEach(function(detail) {
                    // if the viewport is greater than 768px
                    if (window.innerWidth > 768) {
                        // add a class "open" 
                        detail.setAttribute("open", true);

                    }else {
                        // remove the class "open"
                        detail.removeAttribute("open");
                    }
            });
        }

        openDetails();
    </script>
<?php endif; ?>