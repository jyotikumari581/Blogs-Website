<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */
 get_header(); ?>
 <div class="main-section-pst">
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
    		 
    			<article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="checkbox" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  
    			  <span>
    			    <?php echo $tag->name; ?>  
    			    </span> 
    			
    			</article> 
    		 
    		 <?php 
    		  } 
    		 ?>
    	</form> 
	</div>
	<div class="flowers">
		<!--<div class="ekit-wid-con">				-->
			<div id="post-items" class="row post-items">
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
        
        	 <div class="flower" data-id="<?php the_title(); ?>" data-category="<?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->term_id." "; } ?> <?php $tags = wp_get_post_tags($poid); foreach ( $tags as $tag ) { $tag_link = get_tag_link( $tag->term_id ); echo $tag->name." ";} ?>">
        
        			 <div class="post-image-card1">
        				   <div class="cats-on-post">
            				  <?php foreach($post_categories as $c){  $cat = get_category( $c ); ?>
            					<span>
            					  <a href="<?php echo get_category_link($cat->term_id); ?>" rel="category tag"> <?php echo $cat->name; ?></a>
            					 </span>
            				  <?php } ?>
        				   
        				    </div>
        				  
        					  <a href="<?php echo get_permalink($poid); ?>" class="post-img-sec">
        					   <?php the_post_thumbnail($poid); ?> 
        					</a><!-- .elementskit-entry-thumb END -->
        				    
        
            			 <div class="elementskit-post-body ">
            				<h2 class="entry-title">
            					<a href="<?php echo get_permalink($poid); ?>">
            					<?php if (strlen("the_title()") > 40) { ?>
                                    <?php the_title(); ?>
                                <?php } if (strlen("the_title()") < 40) { ?>
                                    <?php echo substr(get_the_title(), 0, 40); ?>...
                                <?php } ?>   </a>
            					
            				 </h2>
            				<div class="elementskit-single-meta date-post">
            					 <!--<span class="website-link">news.com</span>-->
            					 <span class="elementskit-meta-wraper">
            					     <?php //$post_date = get_the_date( 'Y-m-d' ); echo $post_date; ?>
            				</div>							
            				 <!-- <p class="post-data">-->
            					<!--	 $post = get_post($poid);-->
            				<!--	// $excerpt_post = wp_trim_words(the_excerpt());
            					<!-- $post_content = wp_trim_words( $post->post_content, 10 , '...');          -->
            					<!--  echo str_replace("[vc_row][vc_column][vc_column_text]","", $post_content);-->
            				  <!--echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 20 ) ); ?>	
            				 <!--</p>-->
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
	    <!--</div> -->
    </div>
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
    <style>
        .main-section-pst {
             width: 25%;
        }
     .flower {
    width: 30%;
    float: left;
    height: 334px;
        }
        .flowers {
            width: 100%;
        }
        .post-image-card1 {
            background-color: #0059cb12;
            padding: 12px;
            margin: 8px;
        }
        .hfe-search-icon-toggle {
            display: none;
        }
        p.filter-title strong {
            font-weight: 700;
            font-size: 35px;
            line-height: 60px;
            text-transform: capitalize;
            color: #060107;
        }
        form.hides-how label {
    font-weight: 700;
    font-size: 17px;
    line-height: 45px;
    color: #060107;
    cursor: pointer;
}
form.tag-filters article input {
    position: absolute !IMPORTANT;
    top: 0 !IMPORTANT;
    left: 0 !IMPORTANT;
    width: 100% !IMPORTANT;
    height: 100% !IMPORTANT;
    opacity: 0;
    cursor: pointer;
}
.main-section-pst input[type='checkbox'] {
    margin-right: 10px;
}
.tag-filters article span {
    padding: 5px 11px;
    color: #060107;
    font-size: 17px;
}
.tag-filters article {
    position: relative;
    width: 40%;
    margin: 12px;
    border: 1px solid #060107;
    border-radius: 5px;
    padding: 5px 10px;
}
p.filter-title.tags.hides-how:before {
    content: '';
    height: 4px;
    width: 100%;
    background-image: url(https://blogpress.boffincoders.com/wp-content/uploads/2023/06/Rectangle-1.png);
    position: absolute;
    background-repeat: repeat;
    max-width: 200px;
}
p.filter-title.tags.hides-how {
    margin-top: 67px;
}
a.post-img-sec img {
    height: 180px;
}
.cats-on-post {
    position: absolute;
    background-color: #fff;
    padding: 4px;
}
.cats-on-post a {
    color: #000;
    font-size: 15px;
}
.tag-filters article {
    text-transform: capitalize;
}
a.post-img-sec img:hover {
    height: 180px;
    transition: 0.8s all ease-in-out;
    transform: scale(1.1);
}
.post-image-card1 h2.entry-title {
    margin-top: 15px;
}
@media screen and (max-width: 600px) {
   .flower{
       width:100%;
   } 
   .tag-filters article{
       width:100%;
   }
   form.hides-how label{
        font-size: 15px;   
   }
   .main-section-pst{
       width:78%;
   }
   p.filter-title.category.hides-how {
    text-align: center;
}
p.filter-title.tags.hides-how {
    text-align: center;
}
p.filter-title.tags.hides-how {
    margin-top: 20px;
}
p.filter-title.tags.hides-how:before{
        max-width: 249px;
        margin-left: -78px;
}
form.hides-how label {
    display: flex;
    justify-content: space-evenly;
    flex-direction: row-reverse;
}
a.post-img-sec img{
        width: 100%;
}
}
    </style>