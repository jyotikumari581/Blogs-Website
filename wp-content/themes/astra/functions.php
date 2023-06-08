<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.1.4' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=dashboard&utm_medium=free-theme&utm_campaign=upgrade-now' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=customizer&utm_medium=free-theme&utm_campaign=upgrade' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.1.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
function getcategories()
{
	$all_cats = get_categories();
 ?>
	
	 <div class="ekit-wid-con main-categories-list-block">
   <div id="" class="row post-items">
   
 <?php foreach($all_cats as $value) { 
	  $cat_id = $value->term_id;
      $image_id = get_term_meta ( $cat_id, 'category_image', true );
      $img_arr = wp_get_attachment_image_src ( $image_id, 'large' );
	  $category_link = get_category_link( $cat_id );
 ?> 
	  <div class="col-lg-3 col-md-6 cat-main-block qodef-team qodef-item-space info-hover" style="background-image: url(<?php echo $img_arr[0]; ?>)">
		  <div class="elementskit-post-image-card card-cats" >
            <div class="cat-section-header"> 
			  <h3><?php echo $value->name; ?></h3>
			  <a class="view-button-cat" href="<?php echo $category_link; ?>">VIEW CATEGORY</a>
			</div> 
			<div class="qodef-pattern-hover">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
			
         </div>
       </div> 
 <?php
   }
 ?>
 
  </div>
  </div>
  
 <style>
	.main-categories-list-block
	 { 
		 padding-top: 70px;
		 padding-bottom: 70px;
	 }
	.cat-main-block
	{
	  padding-left: 8px !IMPORTANT;
	  padding-right: 8px !IMPORTANT;
	  margin-bottom: 15px;
	  background-size: cover;
	  background-color: #0000004f;
      background-blend-mode: multiply;
	}

	.card-cats
	{
	  min-height:280px;
	 
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  border-radius: 0px !IMPORTANT;
	  background:transparent !IMPORTANT;
	}

	.card-cats .cat-section-header
	{
	  text-align:center;
	  color:#fff;
		z-index: 11;
		
	}

	.card-cats h3
	{
	  text-align:center;
	  color:#fff;
	}

	.view-button-cat
	{
	  background:#da56f7;
	  padding:15px 40px;
	  color:#fff;
	  display:none;
	  font-size: 14px;
    font-weight: 500;
    font-family: 'Oswald';
    text-transform: uppercase;
	  
	}
	
	.card-cats:hover .view-button-cat
	{
	 display: initial;
	}
	
	.cat-main-block.qodef-team.info-hover .qodef-pattern-hover
	{
	    left: -100%;
	}
	
	.cat-main-block.qodef-team.info-hover .qodef-pattern-hover>span
	{
	  background: #4ec4ff94;
	}
	
</style> 
 <?php
 
}

add_shortcode('categories_view', 'getcategories');

add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );


// filter tag and categories //

function filtertagandcategory(){
 ob_start();
 /* 
  $recent_posts = wp_get_recent_posts(array(
    'post_status'    => 'publish',
    'cat' => '',
  ));
  foreach($recent_posts as $post) : ?>
  <div class="card">
    <div class="card-bg">
      <div class="card-cat">
        <?php 
         $category_detail=get_the_category($post['ID']);//Pass POST ID
         foreach($category_detail as $cd){
         echo $cd->cat_name.'';
         } 
         ?>
      </div>
      
    </div>
    <!--<div class="card-body">-->
    <!--  <div class="card-title">-->
    <!--    
    <!--  </div>-->
    <!--</div>-->
  </div>
  <?php endforeach;
  wp_reset_query(); 
  
$tags = get_tags();
$html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );

    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
}
$html .= '</div>';
echo $html;

 */
?>

  
 
 <style>
.sign-up-home-btn
{
    padding: 30px 0px 30px 0px;
	text-align: center;
}	

.sign-up-home-btn .elementor-button
{
    font-family: "Roboto", Sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    background-color: #DA56F7;
    border-radius: 0px 0px 0px 0px;
    padding: 20px 50px 20px 50px;
}
 
.tag-filters.hides-how
{
      margin: 0 auto;
}	
 
.stay-infomed
{
    color: #FFFFFF;
    font-size: 80px;
    font-weight: 700;
    margin: 0px;
    line-height: 88.32px;
    max-width: 641px;
    text-align: center;
    margin: 0 auto !IMPORTANT;
    padding: 50px 0px 50px 0px !IMPORTANT
}

.flowers.elementor-section
{
    max-width: 100%;
    margin: 0 auto;
    width: 100%;
}

.flowers.elementor-section .elementor-container
{
    max-width: 1200px;
    margin: 0 auto;
}
 
.main-cats-home
{
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    padding: 50px 0px 40px 0px;
}	

.sub-cats-home
{
    padding-bottom: 30px;
    padding-top: 30px;
	margin: 0 auto;
    text-align: center;
    display: flex;
}

.sub-cats-home span
{
	display: flex;
}

.sub-cats-home span img
{
	padding-right: 9px;
}

.feature1 {

    position: relative;
    height: 50px;
    margin: 5px;
    float: left;
    box-sizing: border-box;
    
    margin-right: 9px;

}

.feature1 div {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 25px;
  transition: .5s ease;
  padding: 25px 28px;
}

.feature1 input {
  position: absolute;
  top: 0;
  left: 0;
  width: 140px;
  height: 100px;
  opacity: 0;
  cursor: pointer;
}

input[type=radio]:checked ~ div {
  background-color: #50bcf2;
}

.upgrade-btn {
  display: block;
  margin: 30px auto;
  width: 200px;
  padding: 10px 20px;
  border: 2px solid #50bcf2;
  border-radius: 50px;
  color: #f5f5f5;
  font-size: 18px;
  font-weight: 600;
  text-decoration: none;
  transition: .3s ease;
}

.upgrade-btn:hover {
  background-color: #50bcf2;
}

.blue-color {
  color: #50bcf2;
}

.gray-color {
  color: #555;
}

.social i:before {
  width: 14px;
  height: 14px;
  position: fixed;
  color: #fff;
  background: #0077B5;
  padding: 10px;
  border-radius: 50%;
  top:5px;
  right:5px;
}

@keyframes slidein {
  from {
    margin-top: 100%;
    width: 300%;
  }

  to {
    margin: 0%;
    width: 100%;
  }
}

.cat-section .tag-filters article div span
{
    display: flex;
}

.cat-section .tag-filters article div span img
{
    padding-right:9px;
}

.cat-section .tag-filters.hides-how
{
	text-align: center;
    display: table;
    padding-bottom: 80px;
}

.categories-heading
{
    color: #060107;
    font-size: 72px;
    font-weight: 700;
    line-height: 79px !IMPORTANT;
    text-align: center !IMPORTANT;
	padding-bottom: 65px !IMPORTANT;
}

@media (min-width: 1201px) {
.custom-section-post-grid .ekit-wid-con .col-lg-4 {
    max-width: 33.33% !Important;
	 width: 33.33% !Important;
}
}

.custom-section-post-grid
{
   padding:60px 0px;
}
	
.tag-filters input[type=radio]:checked ~ div span
{
	    color: #fff;
}

.tag-filters input[type=radio]:checked ~ div span img
{
	   -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
}


.feature1 div span
{
	text-align: center;
    color: #FFFFFF;
    font-family: "Roboto", Sans-serif;
    font-size: 15px;
    font-weight: 400;
    text-transform: uppercase;
    line-height: 22px;
}

.qodef-container-inner clearfix
{
      margin-bottom: 80px;
}


.qodef-content-inner .qodef-container
{
   margin-top: 60px;
   margin-bottom: 60px
}

.qodef-page-content-holder
{
   
}

.filter-title
{
 margin-top: 27px;
 margin-bottom: 21px;
}

.filter-title.category:before
{
   content: '';
    height: 4px;
    width: 100%;
    background-image: url(https://funinsider.com/wp-content/uploads/2023/01/Rectangle-1.png);
    background-repeat: repeat;
    position: absolute;
    max-width: 230px;
}

.filter-title.tags:before
{
   content: '';
    height: 4px;
    width: 100%;
    background-image: url(https://funinsider.com/wp-content/uploads/2023/01/Rectangle-1.png);
    background-repeat: repeat;
    position: absolute;
    max-width: 230px;
}


.tag-filters article div span
{
    padding: 7px 22px;
    color: #6EC2FA;
    font-size: 14px;
}


.tag-filters article div 
{
    border-radius: 30px;
}

.tag-filters article {
  position: relative;
  width: auto;
  height: auto;
  margin: 5px;
  float: left;
  border: 1px solid #50bcf2;
  box-sizing: border-box;
  border-radius: 30px;
}

.tag-filters article div {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 25px;
  transition: .5s ease;
}

.tag-filters article input {
    position: absolute !IMPORTANT;
    top: 0 !IMPORTANT;
    left: 0 !IMPORTANT;
    width: 100% !IMPORTANT;
    height: 100% !IMPORTANT;
    opacity: 0;
    cursor: pointer;
}

.tag-filters input[type=radio]:checked ~ div {
  background-color: #4ec4ff;
}

.tag-filters .upgrade-btn {
  display: block;
  margin: 30px auto;
  width: 200px;
  padding: 10px 20px;
  border: 2px solid #4ec4ff;
  border-radius: 50px;
  color: #4ec4ff;
  font-size: 18px;
  font-weight: 600;
  text-decoration: none;
  transition: .3s ease;
}

.tag-filters .upgrade-btn:hover {
  background-color: #50bcf2;
}

.tag-filters .blue-color {
  color: #50bcf2;
}

.tag-filters .gray-color {
  color: #555;
}

.tag-filters .social i:before {
  width: 14px;
  height: 14px;
  position: fixed;
  color: #fff;
  background: #0077B5;
  padding: 10px;
  border-radius: 50%;
  top:5px;
  right:5px;
}

@keyframes slidein {
  from {
    margin-top: 100%;
    width: 300%;
  }

  to {
    margin: 0%;
    width: 100%;
  }
}


.flowers-wrap .qodef-form-holder
{
      margin-top: 20px;
}

.flowers-wrap .qodef-search-field.fast-autocomplete
{
  background: #EDEDED;
      background: #EDEDED;
    padding-left: 14px;
}

.flowers-wrap .fa-search:before
{
      color: #646361;
    font-size: 19px;
}

 
 .flowers-wrap .qodef-search-submit.qodef-search-submit-svg-path.fa.fa-search
 {
    position: absolute;
    margin-left: -46px;
    margin-top: 16px;
    border: transparent;
    color: #646361;
	cursor: pointer;
}

.flowers-wrap label
{ 
    cursor: pointer;
}

.flowers-wrap input[type='radio']
{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 28px;
    color: #060107;
	margin-right: 10px;
	margin-bottom: 19px;
	    width: 18px;
    height: 18px;
	position: absolute;
    top: 4px;
}


 .filter-title strong
	{
        font-family: "Nordique Pro", Arial, sans-serif !important;
		font-style: normal;
		font-weight: 700;
		font-size: 32px;
		line-height: 60px;
		text-transform: capitalize;
		color: #060107;
    }
	
	
	
	.flowers .share-icon 
	{
      padding: 16px 0px;
    }
	
 
	.flowers .icon.icon-share::before 
	{
        font-size: 21px;
        font-weight: 700;
    }
	
   .flowers .share-icon-post 
	{
       
    }
   
   .flowers .post-data  
	{
         font-family: 'Open Sans';
		font-style: normal;
		font-weight: 400;
		font-size: 14px;
		line-height: 24px;
		color: #646361 !important;
    }
   
   
   .flowers .elementskit-single-meta.date-post  
	{
      padding-top: 8px;
	      padding-right: 16px;
   }
   
 .flowers .elementskit-single-meta.date-post .elementskit-meta-wraper  
	{
        font-family: 'Open Sans';
		font-style: normal;
		font-weight: 400;
		font-size: 14px;
		line-height: 24px;
		color: #646361;
   }
 

.flowers .website-link  {
	 font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 24px;
	color: #6EC2FA;
	padding-right: 16px;
}


.flowers .elementskit-post-body  {
  padding:0px 15px !important;
   
}

.flowers .elementskit-post-body .entry-title {
  padding: 0px !important;
  border-radius: 0px !important;
   font-family: 'Open Sans' !important;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 28px;
    margin: 0px;
}


.flowers .elementskit-post-body .entry-title a {
  color: #060107;

}


.flowers .elementskit-entry-thumb {
  padding: 0px !important;
  border-radius: 0px !important;
}

.flowers .elementskit-entry-thumb img{
      max-height: 211px;
    width: -webkit-fill-available;
}


/* .flowers .post-image-card {
  background:transparent !Important;
  border: 1px solid #EDEDED;
} */
.post-image-card {
    min-height: 414px;
}

.flowers {
  float:left;
  width:80%;
}
.flowers .post-image-card {
    background-color: #2482d926 !Important;
    margin: 14px;
    border: 5px solid #EDEDED;
    border-radius: 10px;
}
/*a.elementskit-entry-thumb:hover {*/
/*    filter: grayscale(1);*/
/*}*/

.flowers-wrap
{
      background-color: #000;
  width:100%;
  padding: 60px 0px;
}


.cats-on-post span
{
     font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 28px;
    color: #060107;
    padding-left: 12px;
    position: relative;
    top: -7px;
}
 
/*.cats-on-post */
/*{*/
/*     padding: 15px 20px;*/
/*}*/
.cats-on-post {
    position: absolute;
    background-color: #fff;
    padding: 10px 10px 0 0;
}
.flowers .ekit-wid-con .col-lg-4
{
    margin-bottom: 31px;
}

@media (min-width: 1201px) {
	.flowers .ekit-wid-con .col-lg-4
	{
	  max-width: 33.3% !Important;
	}
}


@media only screen and (min-device-width: 769px) and (max-device-width: 1200px) {
	.flowers .ekit-wid-con .col-lg-4
	{
	     max-width: 45% !Important;
	}
}


@media (min-width: 769px) {
#hide
	{
	 display:none;
	}
	
	#show
	{
	  display:none;
	}
}

@media (max-width: 768px) {


.show-hide-all-filter
{
    font-size: 14px;
    font-weight: 400;
}

.show-hide-all-filter img
{
    margin-top: 0px;
    padding-top: 1px;
    margin-right: 13px;
    height: 16px;
    font-weight: 400;
}


.flowers .ekit-wid-con .col-lg-4
	{
	     max-width: 100% !Important;
	}
	
	
	.flowers-wrap {
    float: left;
    width: 100%;
}
	
	.flowers {
    float: left;
    width: 100%;
    margin-top: 9px;
}


.show-hide-all-filter
	{
	  background:#6EC2FA;
	  padding:10px 30px;
	  text-align: center;
      color: #fff;
      text-transform: uppercase;
	  font-family: "oswald", Arial, sans-serif !important;
	}
	
	.hides-how
	{
	  display:none;
	}
	
	#hide
	{
	 display:none;
	}
	
	#show
	{
	  display:block;
	}
 
 
 .filter-title.category:before
 {
   display:none;
 }
 
 .search-results .qodef-page-title.entry-title
 {
   font-size: 30px !Important;
 }
 
 
.qodef-content-inner .qodef-container {
    margin-top: 10px;
    margin-bottom: 20px;
}
 
 .filter-title {
    margin-top: 0px;
    margin-bottom: 11px;
}
 
}

 

@media only screen and (min-device-width: 1025px) and (max-device-width: 1200px) {
	.flowers .ekit-wid-con .col-lg-4
	{
	  max-width: 33.3% !Important;
	}
}
 
 
.elementor-element-166d183
{ 
    background-image: url(../wp-content/uploads/2019/12/title-area-default.png) !important; 
    background-size: 364px 37px !important; 
    background-repeat: no-repeat !important; 
    background-size: 100% 600px !important; 
} 


 </style>

<div class="flowers-wrap">
<h1 class="elementor-heading-title elementor-size-default stay-infomed">Stay Informed
Get Inspired</h1>   
<div id="hide" class="show-hide-all-filter"><img src="/wp-content/uploads/2023/01/Vector.png"><span class="hide-text">Hide all filters</span></div>
	<div id="show" class="show-hide-all-filter show-how"><img src="/wp-content/uploads/2023/01/Vector.png"><span class="hide-text">Show all filters</span></div>
	
 
 <script>
      jQuery(document).ready(function(){
	  jQuery("#hide").click(function(){
		jQuery(".hides-how").hide();
		jQuery("#hide").hide();
		jQuery("#show").show();
	  });
	  jQuery("#show").click(function(){
		jQuery(".hides-how").show();
		jQuery("#show").hide();
		jQuery("#hide").show();
	  });
	});
</script>
	</script>
 <div class="main-cats-home">
  <form class="tag-filters hides-how">
    <?php
	if( $terms = get_terms( array(
		'taxonomy' => 'category', // to make it simple I use default categories
		'orderby' => 'name'
		
	) ) ) : 
		 
		foreach ( $terms as $term ) {
	 
		//	echo '<label for="catid'.$term->term_id.'"><input type="radio" name="fl-colour" id="catid' . $term->term_id . '" value="' . $term->term_id . '">' . $term->name . '</label>';
			?>
<label class="feature1">
  <input type="radio" name="fl-colour" id="catid<?php echo $term->term_id;?>" value="<?php echo $term->term_id;?>">
    <div>
      <span>
       <?php echo $term->name;?>
      </span>
    </div>
  </label>
			<?php
		}
	   endif;
  ?>
  </form>
 </div>

<section>
<div class="cat-section">
<form class="tag-filters hides-how">
<?php 
     $tags = get_tags(array(
      'hide_empty' => false
    ));
     
    foreach ($tags as $tag) {
        
      $image_id = get_term_meta ( $tag->term_id, 'tag-image', true );
      $img_arr = wp_get_attachment_image_src ( $image_id, 'large' );
    ?>
 
    <article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="radio" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  <div>  <span> <?php echo $tag->name; ?>  </span> </div>
    </article> 
 
 <?php 
  } 
 ?>
</form>   
</div> 
</section>



 <div class="sub-cats-home">
<form class="tag-filters hides-how">
<?php 
	 $tags = get_tags(array(
	  'hide_empty' => false
	));
	 
	foreach ($tags as $tag) {
		
	  $image_id = get_term_meta ( $tag->term_id, 'tag-image', true );
      $img_arr = wp_get_attachment_image_src ( $image_id, 'large' );
    ?>
 
    <!-- <article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="radio" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  <div>  <span> <img src="<?php echo $img_arr[0]; ?>"><?php echo $tag->name; ?>  </span> </div> -->
	</article> 
 
 <?php 
  } 
 ?>
</form>   
</div>
<!-- <div class="elementor-button-wrapper sign-up-home-btn">
			<div class="sign-up"><a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Sign Up</span>
		</span>
					</a></div>
 </div> -->


</div>

<section class="flowers elementor-section elementor-top-section elementor-element custom-section-post-grid elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="699a7e8" data-element_type="section">
			 <div class="elementor-container elementor-column-gap-default">
				 <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9bc574e" data-id="9bc574e" data-element_type="column">
			           <div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-dce4ba8 elementor-widget elementor-widget-elementskit-blog-posts" data-id="dce4ba8" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
				    <div class="elementor-widget-container">
			<div class="ekit-wid-con">
			
			 <div id="post-items--dce4ba8" class="row post-items">
<?php

	$args = array(
	'post_type'=> 'post',
	'orderby'    => 'ID',
	'post_status' => 'publish',
	'order'    => 'DESC',
	'posts_per_page' => -1 // this will retrive all the post that is published 
	);
	
 
	$result = new WP_Query( $args );
 
	if ( $result-> have_posts() ) : ?>
	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	   
	<?php $poid = get_the_ID();
     $post_categories = wp_get_post_categories( $poid );
	 
	  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
	?>  
<?php 
    
?>
  <div class="col-lg-4 col-md-6 flower" data-id="<?php the_title(); ?>" data-category="<?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->term_id." "; } ?> <?php $tags = wp_get_post_tags($poid); foreach ( $tags as $tag ) { $tag_link = get_tag_link( $tag->term_id ); echo $tag->name." ";} ?>">

         <div class="post-image-card">
              <div class="elementskit-entry-header">
			  
			   <div class="cats-on-post">
                <div class="elementskit-meta-wraper">
           		<!-- <img src="https://funinsider.com/wp-content/uploads/2022/12/Group-3.png"> -->
			  <?php foreach($post_categories as $c){  $cat = get_category( $c ); ?>
                <span>
				  <a href="<?php echo get_category_link($cat->term_id); ?>" rel="category tag"> <?php echo $cat->name; ?></a>
				 </span>
			  <?php } ?>
				  </div>
            </div>
			  
                  <a href="<?php echo get_permalink($poid); ?>" class="elementskit-entry-thumb">
                   <?php the_post_thumbnail($poid); ?> 
                          </a><!-- .elementskit-entry-thumb END -->
                                                                            
          
                            
					 </div><!-- .elementskit-entry-header END -->

		 <div class="elementskit-post-body ">
					<h2 class="entry-title">
				 <a href="<?php echo get_permalink($poid); ?>">
								<?php the_title(); ?> </a>
			  </h2>
				 <div class="elementskit-single-meta date-post">
				 <!--<span class="website-link">news.com</span>-->
				 <span class="elementskit-meta-wraper"><?php $post_date = get_the_date( 'Y/m/d' ); echo $post_date; ?></div>							
			  <p class="post-data">
					 <?php $post = get_post($poid);
				// $excerpt_post = wp_trim_words(the_excerpt());
			     $post_content = wp_trim_words( $post->post_content, 15 , '...');          
			      echo str_replace("[vc_row][vc_column][vc_column_text]","", $post_content);
			 // echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 20 ) ); ?>																											 </p>
					   <div class="share-icon">
                                    
             <a href="<?php echo get_permalink($poid); ?>" class="share-icon-post">
               <i aria-hidden="true" class="icon icon-share"></i> </a>
          </div>
        </div><!-- .elementskit-post-body END -->
       </div>
   </div>
 
<?php
 
 endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
            	
  </div>
       </div> 
	   </div>
   </div>
  </div>
 </div>
 </div>
 </section>
<!-- <section>
<div class="cat-section">
<h1 class="elementor-heading-title elementor-size-default categories-heading">categories</h1> 
<form class="tag-filters hides-how">
<?php 
	 $tags = get_tags(array(
	  'hide_empty' => false
	));
	 
	foreach ($tags as $tag) {
		
	  $image_id = get_term_meta ( $tag->term_id, 'tag-image', true );
      $img_arr = wp_get_attachment_image_src ( $image_id, 'large' );
    ?>
 
    <article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="radio" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  <div>  <span> <img src="<?php echo $img_arr[0]; ?>"><?php echo $tag->name; ?>  </span> </div>
	</article> 
 
 <?php 
  } 
 ?>
</form>   
</div> 
</section> -->
<style>


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
<script>
var $filterCheckboxes = $('input[type="radio"]');
var filterFunc = function() {
  
  var selectedFilters = {};

  $filterCheckboxes.filter(':checked').each(function() {

    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  // create a collection containing all of the filterable elements
  var $filteredResults = $('.flower');

  // loop over the selected filter name -> (array) values pairs
  $.each(selectedFilters, function(name, filterValues) {

    // filter each .flower element
    $filteredResults = $filteredResults.filter(function() {

      var matched = false,
        currentFilterValues = $(this).data('category').split(' ');

      // loop over each category value in the current .flower's data-category
      $.each(currentFilterValues, function(_, currentFilterValue) {

        // if the current category exists in the selected filters array
        // set matched to true, and stop looping. as we're ORing in each
        // set of filters, we only need to match once

        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });

      // if matched is true the current .flower element is returned
      return matched;

    });
  });

  $('.flower').hide().filter($filteredResults).show();
}

$filterCheckboxes.on('change', filterFunc);  

</script>
<?php
 return ob_get_clean();

}
add_shortcode( 'tagcatefilter', 'filtertagandcategory' );


function copyArticalLink()
{
	ob_start();
	global $wp;
	$currentUrl = home_url( $wp->request );
	?>
	<style>
.tooltip {
  position: relative;
  display: inline-block;
  display: contents;
}

.tooltip .tooltiptext {
 visibility: hidden;
    width: 140px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 40%;
    left: 50%;
    margin-left: 140px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.tooltip button
{
	color: transparent !important;
    z-index: 99999999;
    background-color: #6EC2FA;
    background-image: url(/wp-content/uploads/2023/02/copy.png);
    background-repeat: no-repeat;
    background-position: center;
    min-width: 43px;
    border-bottom: 4px solid #6EC2FA !IMPORTANT;
    min-height: 44px;
    padding: 32px 32px 17px 8px;
    border-top: 6px solid #6EC2FA !IMPORTANT;
    border: 2px solid #6EC2FA;
}

.addtoany_shortcode
{
    padding-top: 12px;
    padding-bottom: 12px;
}

@media only screen and (max-width: 617px) {
#myInput
{
      width: 82% !Important;
}

.tooltip .tooltiptext
{
        top: 0px !IMPORTANT;
    left: 0px !IMPORTANT;
    text-align: center;
    margin: 0 auto !IMPORTANT;
    height: min-content !IMPORTANT;
}
}

</style>
  
<input type="text" value="<?php echo $currentUrl ?>" id="myInput" style="pointer-events: none; background: rgba(255, 255, 255, 0.1); width: 91%; float: left; color: #fff; padding: 11px 8px 11px 14px; border: none;">

<div class="tooltip">
<button onclick="myFunction()" onmouseout="outFunc()" style="color:#fff;">
  <span class="tooltiptext" id="myTooltip" style="color:#fff;">Copy to clipboard</span>
  
  </button>
</div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>
	
	<?php
	return ob_get_clean();
}


add_shortcode( 'copy_articalLink', 'copyArticalLink' );

function subscriptionForm()
{
  ob_start();
  global $wpdb;
  
  
  if ( is_user_logged_in() ) {
 
  }
  else
  {
    echo "<script>window.location.replace('/login');</script>";
  }
 
  $cuser_id = get_current_user_id();
  $table = $wpdb->prefix.'subscribe'; 

  $user_id_array_select = $wpdb->get_results("SELECT * FROM $table WHERE (user_id = $cuser_id)");
  
 if(!empty($user_id_array_select)) {
  foreach ($user_id_array_select as $userdata)
  {
	$user_id = $userdata->user_id;
	$subscribe_to_all = $userdata->subscribe_to_all;
	$subscriptions_all = $userdata->subscriptions_all;
    $subscriptions_digest = $userdata->subscriptions_digest;
    $comunity_publication = $userdata->comunity_publication;
    $comunity_friends = $userdata->comunity_friends;
    $community_all = $userdata->community_all;
    $other_all = $userdata->other_all;
    $other_updates = $userdata->other_updates;
  }
 }
 
 else
 {
	$user_id = '';
    $subscribe_to_all = '';
    $subscriptions_all = '';
    $subscriptions_digest = '';
    $comunity_publication = '';
    $comunity_friends = '';
    $community_all = '';
    $other_all = '';
    $other_updates = '';
 }
  ?>
<iframe name="votar" style="display:none;"></iframe> 
<form method="POST" target="votar">  
<input type="radio" id="stoall" name="radiotoall" value="Subscribe to all" <?php if($subscribe_to_all == '1'){ ?> checked="checked" <?php } ?>>
<label for="stoall">Subscribe to all</label><br>
<input type="radio" id="unsubscribe" name="radiotoall" value="Unsubscribe" <?php if($subscribe_to_all == '0'){ ?> checked="checked" <?php } ?>>
<label for="unsubscribe">Unsubscribe</label><br><br/>
<hr/>
 
 
<h6>Subscriptions</h6>
<input type="checkbox" id="all" name="all" value="All" <?php if($subscriptions_all == '1'){ ?> checked="checked" <?php } ?>>
<label for="all"> All</label><br>
<input type="checkbox" id="digest" name="digest" value="0" <?php if($subscriptions_digest == '1'){ ?> checked="checked" <?php } ?>>
<label for="digest"> FunInsider Digest</label><br>
<label> Articles selected especially for you, as well as the most popular materials. Daily selection from FunInsider.</label><br/> <br/>

<hr/>
 

<h6>Community News</h6>
<input type="checkbox" id="communityall" name="communityall" value="communityall" <?php if($community_all == '1'){ ?> checked="checked" <?php } ?>>
<label for="communityall"> All</label><br>
<input type="checkbox" id="aboutpublication" name="aboutpublication" value="aboutpublication" <?php if($comunity_publication == '1'){ ?> checked="checked" <?php } ?>>
<label for="aboutpublication"> About your publications</label><br>

<input type="checkbox" id="aboutfriends" name="aboutfriends" value="aboutfriends" <?php if($comunity_friends == '1'){ ?> checked="checked" <?php } ?>>
<label for="aboutfriends"> About your friends</label><br>
<br/> <br/>
<hr/>
<h6>Other</h6>
<input type="checkbox" id="otherall" name="otherall" value="otherall" <?php if($other_all == '1'){ ?> checked="checked" <?php } ?>>
<label for="otherall"> All</label><br>
<input type="checkbox" id="otherupdate" name="otherupdate" value="otherupdate" <?php if($other_updates == '1'){ ?> checked="checked" <?php } ?>>
<label for="otherupdate"> Updates</label><br>
 
<br/> 
 
<input type="Submit" name="save" value="Save" id="savebtn"/>
<p class="data-saved" style="color:#fff; display:none; position: fixed; top: 51%; background: rgb(32, 185, 32); left: 40%; padding: 17px 71px;" id="myElem">Data Saved Successfully</p>
<script>
jQuery(document).ready(function(){
  jQuery("#savebtn").click(function(){
    jQuery("#myElem").show("fast").delay(2000).hide("fast");
  });
});


</script>
</form>

<style>

@media screen and (max-width: 676px) 
{
.data-saved
{
    top: 10% !important;
    background: rgb(32, 185, 32);
    left: 16% !important;
}
}

 #savebtn
 {
	background: #6EC2FA;
	padding: 20px 60px;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	color:#fff;
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 21px;
	text-transform: uppercase;
	border:1px solid #6EC2FA;
	cursor: pointer;
 }
</style>
<?php
 
if(isset($_POST['save']))
{
 
  if($_REQUEST["radiotoall"] == "Unsubscribe")
  {
     $subscribeAll = 0;
  }
  
   else if($_REQUEST["radiotoall"] == "Subscribe to all")
  {
     $subscribeAll = 1;
  }
  
  else
  {
    $subscribeAll = "";
  }
  
  
  
   if(isset($_REQUEST["all"]) == "All")
  {
     $subscriptionsall = "1";
  }
  
  else
  {
    $subscriptionsall = "0";
  }
  
  
   if(isset($_REQUEST["digest"]) == "digest")
  {
     $subscriptions_digest = "1";
  }
  
  else
  {
    $subscriptions_digest = "0";
  }
  
   
   if(isset($_REQUEST["communityall"]) == "communityall")
  {
     $communityall = "1";
  }
  
  else
  {
    $communityall = "0";
  }
    
  

  if(isset($_REQUEST["aboutpublication"]) == "aboutpublication")
  {
     $aboutpublication = "1";
  }
  
  else
  {
    $aboutpublication = "0";
  }
  
 

  if(isset($_REQUEST["aboutfriends"]) == "aboutfriends")
  {
     $aboutfriends = "1";
  }
  
  else
  {
    $aboutfriends = "0";
  }
  

  if(isset($_REQUEST["otherall"]) == "otherall")
  {
     $otherall = "1";
  }
  
  else
  {
    $otherall = "0";
  } 

  if(isset($_REQUEST["otherupdate"]) == "otherupdate")
  {
     $otherupdate = "1";
  }
  
  else
  {
    $otherupdate = "0";
  }
  
 
  $user_id_array = $wpdb->get_results("SELECT user_id FROM $table WHERE (user_id = $cuser_id)");
 
  if($subscribeAll == "0") {
  $user = new WP_User($cuser_id);
  $user->set_role('customer');
 }
 
  if($subscribeAll == "1") {
  $user = new WP_User($cuser_id);
  $user->set_role('subscriber');
 }
 
  if(empty($user_id_array))
  {
    $wpdb->insert( $table , 
      array( 
        'user_id'      => $cuser_id,
        'subscribe_to_all'      => $subscribeAll,
        'subscriptions_all'      => $subscriptionsall,
        'subscriptions_digest'      => $subscriptions_digest,
        'community_all'      =>  $communityall,
        'comunity_publication'      =>  $aboutpublication,
        'comunity_friends'      =>  $aboutfriends,
        'other_all'      =>  $otherall,
        'other_updates'      =>  $otherupdate
      )
    );
  }
 
 else
 {
   $wpdb->query("UPDATE ".$wpdb->prefix."subscribe SET subscribe_to_all = '".$subscribeAll."', subscriptions_all = '".$subscriptionsall."', subscriptions_digest = '".$subscriptions_digest."', community_all = '".$communityall."', comunity_publication = '".$aboutpublication."', comunity_friends = '".$aboutfriends."', other_all = '".$otherall."', other_updates = '".$otherupdate."' WHERE user_id = ".$cuser_id);
 }
 
}
 			 
 return ob_get_clean();
}

add_shortcode( 'subscription_form', 'subscriptionForm' );



function testPurpose()
{
    ob_start();
    $ip = $_SERVER['REMOTE_ADDR'];
    $json =  unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
    echo $city = $json["geoplugin_city"];
    return ob_get_clean(); 
}
add_shortcode( 'city_name', 'testPurpose' );
add_action( 'widgets_init', 'generate_widget_areas' );

function generate_widget_areas() {

//Do not create for uncategorized category
$terms = get_categories('exclude=1&hide_empty=0'); 

foreach ($terms as $term) {
   register_sidebar( array(
    'name' => 'Category '.$term->name,
    'id' => $term->slug.'-widget-area',
    'description' => 'Widget area for category and posts in '.$term->name,
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'    ) );
  }
}