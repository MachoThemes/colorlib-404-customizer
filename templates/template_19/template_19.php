<?php $cnfp_options = get_option( 'cnfp_settings' ); ?>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>404</h1>
        </div>
        <h2 id="colorlib_404_customizer_page_heading"><?php echo $cnfp_options['colorlib_404_customizer_page_heading']; ?></h2>
        <p id="colorlib_404_customizer_content"><?php echo $cnfp_options['colorlib_404_customizer_content'] ?><a
                    href="<?php echo get_home_url(); ?>"
                    id="colorlib_404_customizer_button_text"><?php echo $cnfp_options['colorlib_404_customizer_button_text']; ?></a>
        </p>
        <div class="notfound-social">
			<?php
			if ( $cnfp_options['colorlib_404_customizer_social_facebook'] ) {
				?>
                <a href="<?php echo $cnfp_options['colorlib_404_customizer_social_facebook']; ?>"
                   id="colorlib_404_customizer_social_facebook"><i class="fa fa-facebook"></i></a>

				<?php
			}
			if ( $cnfp_options['colorlib_404_customizer_social_twitter'] ) {
				?>
                <a href="<?php echo $cnfp_options['colorlib_404_customizer_social_twitter'] ?>"
                   id="colorlib_404_customizer_social_twitter"><i
                            class="fa fa-twitter"></i></a>
				<?php
			}
			if ( $cnfp_options['colorlib_404_customizer_social_pinterest'] ) {
				?>
                <a href="<?php echo $cnfp_options['colorlib_404_customizer_social_pinterest'] ?>"
                   id="colorlib_404_customizer_social_pinterest"><i
                            class="fa fa-pinterest"></i></a>
				<?php
			}
			if ( $cnfp_options['colorlib_404_customizer_social_email'] ) {
				?>
                <a href="mailto:<?php echo $cnfp_options['colorlib_404_customizer_social_email'] ?>"
                   id="colorlib_404_customizer_social_email"><i class="fa fa-envelope"></i></a>
				<?php
			}
			if ( $cnfp_options['colorlib_404_customizer_social_youtube'] ) {
				?>
                <a href="<?php echo $cnfp_options['colorlib_404_customizer_social_youtube'] ?>"
                   id="colorlib_404_customizer_social_youtube"><i class="fa fa-youtube"></i></a>
				<?php
			}
			if ( $cnfp_options['colorlib_404_customizer_social_instagram'] ) {
				?>
                <a href="<?php echo $cnfp_options['colorlib_404_customizer_social_instagram'] ?>"
                   id="colorlib_404_customizer_social_instagram"><i class="fa fa-instagram"></i></a>
				<?php
			}
			?>
        </div>
    </div>
</div>