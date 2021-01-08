<?php 
/* Template Name: Internal */
get_header();
?>


<?php get_template_part( 'template-parts/intro');?>
<section class="content">test</section>
    <?php if(is_page('contact')): ?>
       <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');?>
    <?php endif;?>
<?php get_footer();?>
