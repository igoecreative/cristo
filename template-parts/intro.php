<section class="intro">

    <?php if ( get_field('intro_heading')) : ?>

        <h1><?php echo the_field('intro_heading');?></h1>

    <?php endif; ?>

    <?php if ( get_field( 'intro_copy' )): ?>

        <?php echo the_field('intro_copy');?>

    <?php  endif; ?>  

</section>