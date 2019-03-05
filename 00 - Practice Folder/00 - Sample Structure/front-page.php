<?php get_header(); ?>
    
    <div class="container pt-5 pb-5">
       <h1><?php the_title(); ?></h1>

        <!-- 
            single line loop: 

               - if(have_posts()):while(have_posts()):the_post();
               -     the_content(); 
               - endwhile; endif;
        -->

        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?> 

            <?php the_content(); ?>

        <?php 
                }
            }
        ?>
        
    </div>

<?php get_footer(); ?>