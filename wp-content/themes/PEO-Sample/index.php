<?php
    get_header();
?>

<?php include 'inc/inc-part1.php'?>

<div id="banner">
    <div id="content">
        <div class="border_box">
          <div class="box_skitter box_skitter_large">
            <ul>
 
            <?php 
                $idIndex = 0;
                $homepageSlides = new WP_Query(array(
                    'posts_per_page' => 5,
                    'post_type' => 'homepage_slide',
                    'order' => 'DESC'
                ));

                while($homepageSlides->have_posts()) {
                    $homepageSlides->the_post();
                
            ?>
              <li><a href="#" id="bb<?php echo $idIndex?>" ><?php the_post_thumbnail('banner_slide'); ?></a></li>
                <?php 
                    $idIndex++;
                } 
                ?>
             
                </ul>
          </div>
        </div>
      </div>

 <?php include 'inc/inc-part2.php'; ?>

<div class="main-links" style="display:none"><a href="http://peo.on.ca/index.php?ci_id=1810&la_id=1">Upcoming Events</a></div>
<div class="main-links" style="display:none"><a href="http://peo.on.ca/index.php?ci_id=1811&la_id=1">Latest Updates</a></div>
</div>
		
<div id="banner-right" class="upcoming-events font-change">
<h6>Upcoming Events</h6>
<ul>
    <?php
    $today = date('Ymd');
    $homepageEvents = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        )
    ));

    while($homepageEvents->have_posts()){
        $homepageEvents->the_post(); 
        $eventDate = new DateTime(get_field('event_date'));
    ?>
    
    <li><a href="#" class="learn_more"><strong><?php echo $eventDate->format('M'); ?> <?php echo $eventDate->format('d'); ?></strong> <?php the_title(); ?></a></li>

<?php } wp_reset_postdata();
?>
</ul>
<div class="clear"></div>
<!--<a class="read-more" href="http://peo.on.ca/index.php?ci_id=26488&la_id=1">READ MORE</a>-->
<a class="read-more" href="http://peo.on.ca/index.php?ci_id=27207&la_id=1">PEO CALENDAR</a> 
</div>
	
			<div id="banner-right" class="latest-updates font-change">
				<h6>Latest Updates</h6>
				<ul>
				        	        
       		<li><a href="http://peo.on.ca/index.php?ci_id=32732&la_id=1" class="learn_more">PEO’s member portal will be temporarily unavailable on September 14</a></li>
       
                	        
       		<li><a href="http://peo.on.ca/index.php?ci_id=32474&la_id=1" class="learn_more"></a></li>
       
                	        
       		<li><a href="http://peo.on.ca/index.php?ci_id=2192&la_id=1" class="learn_more">Engineering Dimensions</a></li>
       
                
				</ul>
				<div class="clear"></div>
				<a class="read-more" href="http://peo.on.ca/index.php?ci_id=25652&la_id=1">READ MORE</a>
        
      </div>
			<div class="clear"></div>
		
		
<div id="four-box-container">  
<?php 
    $homepagePages = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'page',
        'meta_key' => 'display_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'display_order',
                'compare' => '>=',
                'value' => 1,
                'type' => 'numeric'
            ),
            array(
                'key' => 'home_page',
                'compare' => '==',
                'value' => true
            )
        )
    ));

    while($homepagePages->have_posts()){
        $homepagePages->the_post(); ?>

        <div class="four-boxes font-change" id="<?php echo get_field('for_css_id'); ?>">
            <div>
                <h5><?php the_title(); ?></h5>
                    <p>
                <?php echo get_the_excerpt(); ?></p>
                <a class="more-details" href="<?php echo get_field('link_page')?>">More Details</a>
            </div>
        </div>
    <?php }
?>

</div>
          
      
    <?php include 'inc/inc-part3.php'; ?>

<?php 
    get_footer();
?>