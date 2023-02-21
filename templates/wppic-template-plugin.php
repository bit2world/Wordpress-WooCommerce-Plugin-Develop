<?php
/***************************************************************
 * $wppic_data Object contain the following values:
 * url, name, slug, version, author, author_profile, contributors, requires, tested, requires, rating, num_ratings, ratings,
 * active_installs, downloaded, last_updated, last_updated_mk, added, homepage, short_description, download_link, donate_link, icons, banners
 ***************************************************************/

//Fix for requiered version with extra info. EG: WP 3.9, BP 2.1+
if( is_numeric( $wppic_data->requires ) ){
	$wppic_data->requires = 'WP ' . $wppic_data->requires . '+';
}

//Icon URL
if ( !empty( $wppic_data->icons[ 'svg' ] ) ) {
	$icon = $wppic_data->icons[ 'svg' ];
} elseif ( !empty( $wppic_data->icons[ '2x' ] ) ) {
	$icon = $wppic_data->icons[ '2x' ];
} elseif ( !empty( $wppic_data->icons[ '1x' ] ) ) {
	$icon = $wppic_data->icons[ '1x' ];
}

//Define card image
//$image is the custom image URL if you provided it
if( !empty( $image ) ){
	$bgImage = 'style="background-image: url( ' . $image . ' );"';
} else if( isset( $icon ) ) {
	$bgImage = 'style="background-image: url( ' . esc_attr( $icon ) . ' );"';
} else {
	$bgImage = 'data="no-image"';
}
echo $image ."echo function";
echo $wppic_data->num_ratings ."myimage";
// var_dump($image);
// dd("1");
//Plugin banner
$banner = '';
if ( !empty( $wppic_data->banners[ 'low' ] ) ) {
	$banner = 'style="background-image: url(' . esc_attr( $wppic_data->banners[ 'low' ] ) . ' );"';
}
// $_GLOBAL['rk_myimage']
$myimage = "This is my custom image";
if ( ! empty( $_GLOABAL['rk_myimage'] ) ) {
	$myimage = $_GLOABAL['rk_myimage'];
}
/***************************************************************
 * Start template
 ***************************************************************/
?>
<div class="wp-pic-flip" style="display: none;">
	<div class="wp-pic-face wp-pic-front">
		<div class="wppic-cst-container">
			<div class="wppic-cst-item">
				<a class="wp-pic-logo" href="<?php echo $wppic_data->url ?>" <?php echo $bgImage ?> target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>"></a>
			</div>
			<div class="wppic-cst-item">
				<a class="product-name" href="<?php echo $wppic_data->url ?>" target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>"><?php echo $wppic_data->name ?></a>
				<div class="wp-pic-bar">
					<a href="#" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>"></a>
					<a href="#" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>"></a>
					<a href="#" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>"></a>
					<a href="#" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>"></a>
					<a href="#" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>"></a>
					<p><?php echo $myimage; ?> - 1240 reviews</p>
 </div>
				<p class="wp-pic-cst-description"><?php _e( 'Author(s):', 'wp-plugin-info-card' ) ?> <?php echo $wppic_data->author ?></p>
				<div>
					<a href="https://wordpress.org/support/view/plugin-reviews/<?php echo $wppic_data->slug ?>" class="wp-pic-cst-button" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>">
						<?php echo "Buy On Amazon" ?>
					</a>
					<a href="<?php echo $wppic_data->download_link ?>" class="wp-pic-cst-button" " target="_blank" title="<?php _e( 'Direct download', 'wp-plugin-info-card' ) ?>">
						<?php echo "Buy On Rowns" ?>
					</a>
					<a href="<?php echo $wppic_data->url ?>" class="wp-pic-cst-button" target="_blank" title="Buy On Wallmart">
						<?php echo "Buy On Wallmart" ?>
					</a>
				</div>
			</div>
		</div>
		<!-- <a class="wp-pic-logo" href="<?php echo $wppic_data->url ?>" <?php echo $bgImage ?> target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>"></a>
		<a class="wp-pic-name" href="<?php echo $wppic_data->url ?>" target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>"><?php echo $wppic_data->name ?></a> -->
		
	</div>
	<div class="wp-pic-face wp-pic-back">
		<a class="wp-pic-dl-ico" href="<?php echo $wppic_data->download_link ?>" title="<?php _e( 'Direct download', 'wp-plugin-info-card' ) ?>"></a>
		<p><a class="wp-pic-dl-link" href="<?php echo $wppic_data->download_link ?>" title="<?php _e( 'Direct download', 'wp-plugin-info-card' ) ?>"><?php echo basename($wppic_data->download_link) ?></a></p>
		<p class="wp-pic-version"><span><?php _e( 'Current Version:', 'wp-plugin-info-card' ) ?></span> <?php echo $wppic_data->version ?></p>
		<p class="wp-pic-updated"><span><?php _e( 'Last Updated:', 'wp-plugin-info-card' ) ?></span> <?php echo $wppic_data->last_updated ?></p>
		<div class="wp-pic-bottom">
			<div class="wp-pic-bar">
				<a href="https://wordpress.org/support/view/plugin-reviews/<?php echo $wppic_data->slug ?>" class="wp-pic-rating" target="_blank" title="<?php _e( 'Ratings', 'wp-plugin-info-card' ) ?>">
					<?php echo round( $wppic_data->rating ) ?>%<em><?php _e( 'Ratings', 'wp-plugin-info-card' ) ?></em>
				</a>
				<a href="<?php echo $wppic_data->download_link ?>" class="wp-pic-downloaded" target="_blank" title="<?php _e( 'Direct download', 'wp-plugin-info-card' ) ?>">
					<?php echo number_format_i18n( $wppic_data->active_installs ) ?>+<em><?php _e( 'Installs', 'wp-plugin-info-card' ) ?></em>
				</a>
				<a href="<?php echo $wppic_data->url ?>" class="wp-pic-requires" target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>">
					<?php echo $wppic_data->requires ?><em><?php _e( 'Requires', 'wp-plugin-info-card' ) ?></em>
				</a>
			</div>
			<a class="wp-pic-page" href="<?php echo $wppic_data->url ?>" target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>"><?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?></a>
		</div>
		<a class="wp-pic-asset-bg" <?php echo $banner ?> href="<?php echo $wppic_data->url ?>" target="_blank" title="<?php _e( 'WordPress.org Plugin Page', 'wp-plugin-info-card' ) ?>">
			<span class="wp-pic-asset-bg-title"><span><?php echo $wppic_data->name ?></span></span>
		</a>
		<div class="wp-pic-goback" title="<?php _e( 'Back', 'wp-plugin-info-card' ) ?>"><span></span></div>
		<?php echo $wppic_data->credit ?>
	</div>
</div>
<?php //end of template
