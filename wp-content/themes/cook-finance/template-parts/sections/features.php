<?php
    $title = get_sub_field('title');
    $background_image = get_sub_field('background_image');
    $bg_img = !empty($background_image) ? 'style="background-image: url('.$background_image.')"' : null;
?>
<section class="feature-section animated" data-animate="fadeIn" id="features" <?php echo $bg_img; ?>>
    <div class="container">
        <div class="cover-feature animated" data-animate="fadeInUp">
            <?php if(!empty($title)) { ?>
            <h3><?php echo $title; ?></h3>
            <?php } 
            if(have_rows('add_feautre')) : 
            ?>
            <div class="feat-boxes">
                <?php 
                while(have_rows('add_feautre')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $feature_icon = get_sub_field('feature_icon');
                ?>
                <div class="ftr-box animated" data-animate="fadeInUp">
                    <?php if(!empty($title) || !empty($feature_icon)) { ?>
                    <h4>
                        <?php if(!empty($feature_icon)) { ?>
                        <img src="<?php echo $feature_icon['url']; ?>" alt="<?php echo $feature_icon['alt']; ?>">
                        <?php } echo $title; ?>
                    </h4>
                    <?php 
                    }
                    echo $content;
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