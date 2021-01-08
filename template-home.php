<?php 
/* Template Name: Home */
get_header();
?>


<?php get_template_part( 'template-parts/intro');?>
    <section class="content">
        <?php $heading = get_field('main_content_heading', false, false ); ?>
        <h1><?php echo $heading ?></h1>
        <div class="stat-list">
            
            <!-- Put repeater here -->
            <?php if( have_rows('stat_list') ) : 

                while( have_rows('stat_list') ) : the_row();

                $stat_img = get_sub_field('stat_img');
                $stat_heading = get_sub_field('stat_heading', false, false);
                $stat_list_item = get_sub_field('stat_list_item');
                ?>
            <div class="stat-item">
                <img class="stat-item-left-img" src="<?php echo $stat_img['url'];?>" alt="<?php echo $stat_img['title'];?>"/>
                <div class="stat-item-right-content-wrap">
                    <h2 class="stat-item-heading"><?php echo $stat_heading;?></h2>
                    <div class="stat-item-copy">
                    <?php echo $stat_list_item; ?>
                    </div>
                </div>
            </div>

                <?php endwhile; 
                else: echo '<p style="color:grey;padding: 0em 1em;">No Stat-List Found</p>';
                
                endif;
                
                ?>


        </div>
    </section>
    <section class="testimonial-slider">
    <!-- http://kenwheeler.github.io/slick/   use this -->
        <div class="testimonial-wrap">
       
        <?php if( have_rows('testimonial') ) : 

            while( have_rows('testimonial') ) : the_row();

            $test_item = get_sub_field('testimonial_item', false, false);

            ;?>
            
            <div><?php echo $test_item;?></div>


            <?php endwhile; 
                else: echo '<p style="color:grey;padding: 0em 1em;">No Testimonial Found</p>';
                
                endif;
                
            ?>

        </div>
    </section>
    <section class="gallery-sidebar">
        <?php $gallery_heading = get_field('gallery_heading');?>        
        <h1><?php echo $gallery_heading;?></h1>
        <div>
    <!-- repeater flex-grid  -->
            <?php if( have_rows('gallery_sidebar') ): 

                    while( have_rows('gallery_sidebar') ) : the_row();

                    $gallery_item = get_sub_field('gallery_item'); ?>
            
                        <img src="<?php echo $gallery_item['url'];?>" alt="<?php echo $gallery_item['title'];?>" />

                    <?php endwhile; 
            else: echo '<p style="color: grey;padding:0em 1em;">No Images found</p>';

            endif;
            ?>
        </div>

    </section>

 
<?php get_footer();?>
