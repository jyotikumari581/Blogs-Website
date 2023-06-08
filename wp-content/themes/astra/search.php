<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="flowers-wrap">
  <p class="filter-title" style="margin-top:0px;"><strong>Filter News</strong></p>
  <?php 
  if(isset($_GET["s"])) {
    $search_value = $_GET["s"];
  } 
  else
  {
    $search_value = "";
  }
  ?>
  <form action="https://blogpress.boffincoders.com/" method="get">
		<div class="qodef-form-holder">
			<input type="text" placeholder="Search news..." name="s" value="<?php echo $search_value; ?>" class="qodef-search-field fast-autocomplete" autocomplete="off" required="">
			<button type="submit" class="qodef-search-submit qodef-search-submit-svg-path fa fa-search"></button>
		</div>
	</form>
	
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
	
 <p class="filter-title category hides-how"><strong>Category</strong></p>
  <form class="hides-how">
    <?php
	if( $terms = get_terms( array(
		'taxonomy' => 'category', // to make it simple I use default categories
		'orderby' => 'name'
	) ) ) : 
		 
		foreach ( $terms as $term ) {
	 
			echo '<label><input type="checkbox" name="fl-colour" id="' . $term->term_id . '" value="' . $term->term_id . '">' . $term->name . '</label><br>';
			
		}
	   endif;
  ?>
  </form>
  <p class="filter-title tags hides-how"><strong>Tags</strong></p>
 <form class="tag-filters hides-how">
<?php 
	 $tags = get_tags(array(
	  'hide_empty' => false
	));
	 
	foreach ($tags as $tag) {
	?>
 
    <article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="checkbox" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  <div>  <span><?php echo $tag->name; ?>  </span> </div></article> 
 
 <?php 
  } 
 ?>
  </form>   
</div>


<section class="flowers elementor-section elementor-top-section elementor-element elementor-element-699a7e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="699a7e8" data-element_type="section">
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
if($search_value != "")
{ 
if(stristr(get_the_title( $poid ), $search_value) !== false){
    
?>
	
	 <div class="search-boxes col-lg-4 col-md-6 flower" data-id="<?php the_title(); ?>" data-category="<?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->term_id." "; } ?> <?php $tags = wp_get_post_tags($poid); foreach ( $tags as $tag ) { $tag_link = get_tag_link( $tag->term_id ); echo $tag->name." ";} ?>">

         <div class="post-image-card">
              <div class="elementskit-entry-header">
			  
			   <div class="cats-on-post">
                <div class="elementskit-meta-wraper">
           		<!--<img src="https://funinsider.com/wp-content/uploads/2022/12/Group-3.png">-->
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
			     $post_content = wp_trim_words( $post->post_content, 10 , '...');          
			      echo str_replace("[vc_row][vc_column][vc_column_text]","", $post_content);
			 // echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 20 ) ); ?>																											 </p>
																						                                            <div class="share-icon">
                                    
             <a href="<?php echo get_permalink($poid); ?>" class="share-icon-post">
               <i aria-hidden="true" class="icon icon-share"></i> </a>
          </div>
        </div><!-- .elementskit-post-body END -->
       </div>
   </div>
 
<?php } }
else 
{
?>
 <div class="search-boxes col-lg-4 col-md-6 flower" data-id="<?php the_title(); ?>" data-category="<?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->term_id." "; } ?> <?php $tags = wp_get_post_tags($poid); foreach ( $tags as $tag ) { $tag_link = get_tag_link( $tag->term_id ); echo $tag->name." ";} ?>">

         <div class="post-image-card">
              <div class="elementskit-entry-header">
			  
			   <div class="cats-on-post">
                <div class="elementskit-meta-wraper">
           		<img src="https://funinsider.com/wp-content/uploads/2022/12/Group-3.png">
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
			     $post_content = wp_trim_words( $post->post_content, 10 , '...');          
			      echo str_replace("[vc_row][vc_column][vc_column_text]","", $post_content);
			 // echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 20 ) ); ?>	 </p>
				<div class="share-icon">
                                    
             <a href="<?php echo get_permalink($poid); ?>" class="share-icon-post">
               <i aria-hidden="true" class="icon icon-share"></i> </a>
          </div>
        </div><!-- .elementskit-post-body END -->
       </div>
   </div>
<?php
}
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

<style>
.cats-on-post {
    position: absolute;
    background-color: #fff;
    padding: 10px 10px 0 0;
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
  display:none !Important;
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
   padding: 5px 11px;
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

.tag-filters input[type=checkbox]:checked ~ div {
  background-color: #E2F3FF;
}

.tag-filters .upgrade-btn {
  display: block;
  margin: 30px auto;
  width: 200px;
  padding: 10px 20px;
  border: 2px solid #6EC2FA;
  border-radius: 50px;
  color: #f5f5f5;
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
    margin-left: 15px;
    margin-top: 0px;
    border: transparent;
    color: #646361;
	cursor: pointer;
}

.flowers-wrap label
{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 28px;
    color: #060107;
    cursor: pointer;
}

.flowers-wrap input[type='checkbox']
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
	position: relative;
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
  font-weight:700;

}


.flowers .elementskit-entry-thumb {
  padding: 0px !important;
  border-radius: 0px !important;
}

.flowers .elementskit-entry-thumb img{
      max-height: 211px;
    width: -webkit-fill-available;
}


.flowers .post-image-card {
  background:transparent !Important;
  margin: 14px;
    border: 5px solid #EDEDED;
    border-radius: 10px;
}

.flowers {
  float:left;
  width:80%;
}

.flowers-wrap
{
    float:left;
  width:30%;
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
.post-image-card {
    min-height: 400px;
}
 
/*.cats-on-post */
/*{*/
/*     padding: 12px 12px;*/
/*         position: absolute !important;*/
/*}*/

.flowers .ekit-wid-con .col-lg-4
{
    margin-bottom: 31px;
}

@media (min-width: 1201px) {
	.flowers .ekit-wid-con .search-boxes.col-lg-4
	{
	  max-width: 32.9% !Important;
	  float: left;
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
	     max-width: 90% !Important;
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
	.flowers .ekit-wid-con .search-boxes.col-lg-4
	{
	  max-width: 29.4% !Important;
	}
}
 
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
<script>
var $filterCheckboxes = $('input[type="checkbox"]');
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

 

<!--<div class="qodef-grid-row">-->
<!--	<div <?php echo booth_select_get_content_sidebar_class(); ?>>-->
<!--		<div class="qodef-search-page-holder">-->
<!--			<?php booth_select_get_search_page_layout(); ?>-->
<!--		</div>-->
<!--		<?php do_action( 'booth_select_page_after_content' ); ?>-->
<!--	</div>-->
<!--	<?php if ( $sidebar_layout !== 'no-sidebar' ) { ?>-->
<!--		<div <?php echo booth_select_get_sidebar_holder_class(); ?>>-->
<!--			<?php get_sidebar(); ?>-->
<!--		</div>-->
<!--	<?php } ?>-->
<!--</div>-->

<?php get_footer(); ?>
