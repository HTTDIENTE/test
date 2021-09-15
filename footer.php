<?php echo '</main>'; ?>

<footer class="footer">
	<?php if ( wld_has( 'wld_footer_logo', 'wld_address' ) ) : ?>
		<div class="top">
			<div class="inner">
				<div class="left">
					<div class="logo-wrapper">
						<?php if ( wld_has( 'wld_footer_logo' ) ) : ?>
							<div class="flogo">
								<?php wld_the_logo( 'wld_footer_logo' ); ?>
							</div>
						<?php endif; ?>
						<?php if ( wld_has( 'wld_address', 'wld_phone' ) ) : ?>
							<div>
								<ul class="list-unstyled">
									<?php wld_the( 'wld_address', '<li>' ); ?>
									<?php wld_the( 'wld_phone', '', '<li>' ); ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<?php the_social_links( 'large' ); ?>
				</div>
				<div class="right">
					<?php wld_the_nav( 'Footer Main' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( wld_has( 'wld_footer_left_block.text', 'wld_footer_right_block.text', 'wld_address' ) ) : ?>
		<div class="middle">
			<div class="inner">
				<div class="item">
					<?php if ( wld_has( 'wld_footer_left_block.text' ) ) : ?>
						<div class="item-body" <?php wld_the( 'wld_footer_left_block.background' ); ?>>
							<?php wld_the( 'wld_footer_left_block.text' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="item">
					<?php if ( wld_has( 'wld_footer_right_block.text', 'wld_address' ) ) : ?>
						<div class="item-body"
							<?php wld_the( 'wld_footer_right_block.background' ); ?>>
							<?php wld_the( 'wld_footer_right_block.text' ); ?>
							<?php if ( wld_has( 'wld_address', 'wld_phone' ) ) : ?>
								<ul>
									<?php wld_the( 'wld_address', '</li>' ); ?>
									<?php wld_the( 'wld_phone', '', '<li>' ); ?>
								</ul>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="bottom">
		<div class="inner">
			<div class="copyright">
				<?php wld_the( 'wld_footer_copyright' ); ?>
				<?php wld_the_nav( 'Footer Links' ); ?>
			</div>
			<div class="by">
				<?php if ( WLD_IS_ORLANDO_STYLE ) : ?>
					<p>
						Dallas-Plano WordPress Development
						<a href="https://www.webloftdesigns.com/" target="_blank" rel="noopener">Web Loft Designs</a>
					</p>
					<p>
						Glitter Sparkle LLC
						<a href="https://glittersparklellc.com/" target="_blank" rel="noopener">Glitter Sparkle LLC</a>
					</p>
				<?php else : ?>
					<p>Dallas Wordpress Development <a href="https://www.milleradagency.com/" target="_blank" rel="noopener">Miller Ad</a></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>

<?php
echo '</div></div>';
wp_footer();
echo '</body></html>';
?>
