            <?php if(!is_front_page()) : ?>
                <aside class="col-md-4 blog-sidebar">
                <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </aside><!-- /.blog-sidebar -->
            <?php endif; ?>
        </div><!-- /.row -->

    </main><!-- /.container -->

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
