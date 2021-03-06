<?php get_header(); ?>

<!-- Start of content wrapper -->
<div id="cr3ativconference_contentwrapper">

    <!-- Start of content wrapper -->
    <div class="cr3ativconference_content_wrapper">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php
        $cr3ativconfmeetingdate = get_post_meta($post->ID, 'cr3ativconfmeetingdate', $single = true); 
        $conflocation = get_post_meta($post->ID, 'cr3ativ_conflocation', $single = true); 
        $confspeakers = get_post_meta($post->ID, 'cr3ativ_confspeaker', $single = true); 
        $confstarttime = get_post_meta($post->ID, 'cr3ativ_confstarttime', $single = true); 
        $confendtime = get_post_meta($post->ID, 'cr3ativ_confendtime', $single = true); 
        ?>

            <!-- Start of blog wrapper -->
            <div class="cr3ativconference_blog_wrapper">
            <?php 
            if ( has_post_thumbnail() ) {  ?>

            <?php the_post_thumbnail(''); ?>

            <?php } ?>

            <h1 class="conference_date"><?php the_title (); ?></h1>
            
                <!-- Start of conference date -->
                <div class="conference-date">
                <?php echo get_the_date(get_option('date_format',$cr3ativconfmeetingdate)); ?>
                
                </div><!-- End of conference date -->
            
                <!-- Start of conference time -->
                <div class="conference-time">
                <?php echo ($confstarttime); ?> 
                <?php if ($confendtime) { ?>
                &nbsp; - &nbsp;
                <?php echo ($confendtime); ?>
                <?php } ?>
                    
                </div><!-- End of conference time -->
                
                <!-- Start of conference location -->
                <div class="conference-location">
                <?php if ($conflocation) { ?>
                <?php echo ($conflocation); ?>
                <?php } ?>
                
                </div><!-- End of conference location -->
                
                <!-- Clear Fix --><div class="cr3ativconference_clear"></div>

                <!-- Start of speaker list -->
                <div class="speaker_list">
                <?php
                 $cr3ativ_confspeakers = get_post_meta($post->ID, 'cr3ativ_confspeaker', $single = true); 
                ?>    
                <?php
                if ( $cr3ativ_confspeakers ) { 

                    foreach ( $cr3ativ_confspeakers as $cr3ativ_confspeaker ) :

                        $speaker = get_post($cr3ativ_confspeaker);
                        echo'<div class="speaker_list_wrapper">';
                        echo get_the_post_thumbnail($speaker->ID).'<a href="'. $speaker->guid .'">'. $speaker->post_title .'</a></div>'; 

                    endforeach; 

                } ?>
                </div><!-- End of speaker list -->
        
                <!-- Start of session content -->
                <div class="session_content">
                    <?php the_content (); ?>

                </div><!-- End of session content -->
                
                <p class="sessioncats"><?php echo custom_taxonomies_terms_links(); ?></p>

            <?php endwhile; ?> 

            <?php else: ?> 
            <p><?php _e( 'There are no posts to display. Try using the search.', 'cr3at_conf' ); ?></p> 

            <?php endif; ?>

            </div><!-- End of blog wrapper -->

    </div><!-- End of content wrapper -->

    <!-- Clear Fix --><div class="cr3ativconference_clear"></div>

</div><!-- End of content wrapper -->

<?php get_footer(); ?>