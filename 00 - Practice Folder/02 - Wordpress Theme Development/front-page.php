<?php get_header(); ?>
    <section class="showcase" style="border: none; background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
            <p>
                <?php echo get_theme_mod('showcase_text', 'Fusce libero turpis, semper ut iaculis elementum, pretium sed turpis.
                    Donec in facilisis massa. Aliquam augue neque, tincidunt vitae varius a, commodo sit amet arcu.
                    Pellentesque eu rhoncus risus. Donec augue diam, sodales non mattis non, iaculis a est.
                    Duis euismod consequat odio, eget tincidunt ante laoreet porttitor.                             
                    Sed dapibus justo ac nibh imperdiet euismod.');
                ?>
            </p>
            <a href="<?php echo get_theme_mod('btn_url','http://google.com'); ?>" class="btn btn-primary btn-lg">
                <?php echo get_theme_mod('btn_text', 'Read More'); ?>
            </a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar('box2'); ?>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    
    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>
