<?php $cnfp_options = get_option( 'cnfp_settings' ); ?>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>4<span>0</span>4</h1>
        </div>
        <h2 id="colorlib_404_customizer_page_heading"><?php echo wp_kses_post( $cnfp_options['colorlib_404_customizer_page_heading'] ); ?></h2>
        <form class="notfound-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search"
              method="get">
            <input type="search" name="s" placeholder="<?php esc_attr__( 'Search...', 'colorlib-404-customizer' ); ?>">
            <button type="submit"><span></span></button>
        </form>
    </div>
    <p class="colorlib-copyright"><span>404 Page Template designed by</span> <a href="https://colorlib.com/" target="_blank">Colorlib.</p>
</div>
