<?php
/**
 * Admin functions.
 *
 * @package Cricket Club League Company
 */

define('CRICKET_CLUB_LEAGUE_SUPPORT',__('https://wordpress.org/support/theme/cricket-club-league/','cricket-club-league'));
define('CRICKET_CLUB_LEAGUE_REVIEW',__('https://wordpress.org/support/theme/cricket-club-league/reviews/#new-post','cricket-club-league'));
define('CRICKET_CLUB_LEAGUE_DOC_URL',__('https://preview.wpradiant.net/tutorial/cricket-club-league-free/','cricket-club-league'));
define('CRICKET_CLUB_LEAGUE_BUY_NOW',__('https://www.wpradiant.net/products/cricket-club-wordpress-theme','cricket-club-league'));
define('CRICKET_CLUB_LEAGUE_LIVE_DEMO',__('https://preview.wpradiant.net/cricket-club-league/','cricket-club-league'));
define('CRICKET_CLUB_LEAGUE_PRO_DOC',__('https://preview.wpradiant.net/tutorial/cricket-club-league-pro/','cricket-club-league'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function cricket_club_league_admin_menu_page() {

	$cricket_club_league_theme = wp_get_theme( get_template() );

	add_theme_page(
		$cricket_club_league_theme->display( 'Name' ),
		$cricket_club_league_theme->display( 'Name' ),
		'manage_options',
		'cricket-club-league',
		'cricket_club_league_do_admin_page'
	);

}
add_action( 'admin_menu', 'cricket_club_league_admin_menu_page' );

function cricket_club_league_admin_theme_style() {
	wp_enqueue_style('cricket-club-league-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
  wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
  wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'cricket_club_league_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function cricket_club_league_do_admin_page() {

	$cricket_club_league_theme = wp_get_theme( get_template() );
	?>
	<div class="cricket-club-league-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $cricket_club_league_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'cricket-club-league' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'cricket-club-league' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'cricket-club-league' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $cricket_club_league_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $cricket_club_league_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $cricket_club_league_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'cricket-club-league' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'cricket-club-league' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'cricket-club-league' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'cricket-club-league' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'cricket-club-league', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'cricket-club-league' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'cricket-club-league', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'cricket-club-league' ); ?></a>
  </nav>

    <?php
      cricket_club_league_main_screen();

      cricket_club_league_changelog_screen();

      cricket_club_league_free_vs_pro();
}
/**
 * Output the main about screen.
 */
function cricket_club_league_main_screen() {
  if ( isset( $_GET['page'] ) && 'cricket-club-league' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'cricket-club-league' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'cricket-club-league' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'cricket-club-league' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'cricket-club-league' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'cricket-club-league' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'cricket-club-league' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'cricket-club-league' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'cricket-club-league' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'cricket-club-league' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'cricket-club-league' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'cricket-club-league' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( CRICKET_CLUB_LEAGUE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'cricket-club-league' ); ?></a>
		</p>

	</div><!-- .col -->

</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function cricket_club_league_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'cricket-club-league' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = cricket_club_league_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function cricket_club_league_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function cricket_club_league_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'cricket-club-league' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'cricket-club-league' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'cricket-club-league' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'cricket-club-league' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'cricket-club-league' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'cricket-club-league' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url(CRICKET_CLUB_LEAGUE_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'cricket-club-league' ); ?></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}