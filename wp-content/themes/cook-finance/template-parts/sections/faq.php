<?php
$title = get_sub_field('title');
?>
<section class="faq-section animated" id="faq" data-animate="fadeIn">
    <div class="container">
        <div class="cover-faq animated" data-animate="fadeInUp">
            <?php if(!empty($title)) { ?>
            <h3><?php echo $title; ?></h3>
            <?php } 
            if(have_rows('add_faq')) : 
            ?>
            <div class="cover-faqbox">
                <?php 
                while(have_rows('add_faq')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                <div class="cvr-faq animated" data-animate="fadeInUp">
                    <?php 
                    if(!empty($title)) {
                        echo '<h5 class="faq-title">'.$title.'</h5>';
                    }
                    if(!empty($content)) {
                        echo '<div class="faq-detail">'.$content.'</div>';
                    }
                    ?>
                </div>
                <?php 
                endwhile; 
                ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>