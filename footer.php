	<?php do_action('before_footer'); ?>

	<footer role="contentinfo">

		<div class="footer__menus">
			<div class="max__width">
				
				<?php
				while (have_rows('footer_menus', 'options')) : the_row();

					$footer_menu = get_sub_field('footer_menu');
				?>
					<article class="footer__menu">
						<?php if ($footer_menu) : ?>
							<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
							<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
						<?php endif; ?>
					</article>

				<?php endwhile; ?>

				<article class="footer__menu footer__details">
					<h5>Contact <i class="fas fa-chevron-down"></i></h5>
					<ul>
						<li>
							<i class="fa-light fa-location-dot"></i>
							<a target="_blank" href="https://www.google.com/maps/place/Mamdani+Opticians/@51.8708674,0.1572339,17z/data=!3m1!4b1!4m6!3m5!1s0x47d8853dcf46a909:0xa2bf2d9e66379247!8m2!3d51.8708674!4d0.1598088!16s%2Fg%2F11bzswq9zg?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D">
							13 Devoils Lane,<br>Bishops Stortford,<br>Herts, CM23 3XH
							</a>
						</li>
						<li><i class="fa-light fa-phone"></i> <a href="tel:01279 656 872">01279 656 872</a></li>
						<li><i class="fa-light fa-envelope"></i> <a href="mailto:mamdaniopticians@gmail.com">mamdaniopticians@gmail.com</a></li>
					</ul>
				</article>

				<!-- <article class="footer__menu footer__social">
					<h5>Social <i class="fas fa-chevron-down"></i></h5>
					<ul>
						<li><a href="" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
						<li><a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</article> -->
			</div>
		</div>
	</footer>

	<div class="spotlight-search">
		<div class="spotlight-search--content">
			<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

			<h2>Search Pollards Opticians</h2>
			<form action="<?php echo esc_url(home_url()); ?>">
				<input type="text" name="s" placeholder="ie. News" />
				<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
			</form>
		</div>
	</div>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	</body>

	</html>