<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
?>
<section class="token-section animated" data-animate="fadeIn" id="token" >
    <div class="container">
        <div class="cover-token">
            <div class="token-boxes">
                <div class="tkn-box animated" data-animate="fadeInUp">
                    <?php if(!empty($title)) { ?>
                    <h3><?php echo $title; ?></h3>
                    <?php } ?>
                    <?php if(!empty($content)) { echo $content; } ?>
                </div>
                <?php 
                if(have_rows('add_token_box')) : 
                    while(have_rows('add_token_box')) : the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        $icon = get_sub_field('icon');
                    ?>
                        <div class="tkn-box animated" data-animate="fadeInUp">
                            <?php if(!empty($title) || !empty($icon)) { ?>
                            <h4>
                                <?php if(!empty($icon)) { ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                <?php } echo $title; ?>
                            </h4>
                            <?php 
                            }
                            echo $content;
                            ?>
                        </div>
                <?php 
                    endwhile;
                endif; 
                ?>
            </div>
        </div>
    </div>
</section>