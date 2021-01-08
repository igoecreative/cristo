<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cristo
 */

?>
 
</main>
 <footer>
	  <div class="footer-container">
	  <img src="<?php echo site_url();?>/img/cristo_logo_footer.png"/>
		<div>
			<div><img src="<?php echo site_url();?>/img/phone_icon.png"/><a href="tel:2523640416">252-364-0416</a></div>
			<div><img src="<?php echo site_url();?>/img/location_icon.png"/><a href="https://goo.gl/maps/szsxtsuaw6nnpNmJ7" target="_blank">2765 S Grimesland Bridge Road,<br/> Grimesland, NC 27837</a></div>
			<div><img src="<?php echo site_url();?>/img/mail_icon.png"/><a href="mailto:info@cristostinyhomebuilders.com">info@cristostinyhomebuilders.com</a></div>
		</div>
	  </div>
</footer>
 

<?php wp_footer(); ?>
<script>

$('.testimonial-wrap').slick({
	dots: true,
	speed: 500,
	infinite: true,
	slidesToShow: 1
})

</script>
</body>
</html> 