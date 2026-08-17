</main>

<footer class="site-footer">
    <div class="container">

        <p class="site-copyright">
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>.
            <?php esc_html_e( 'All rights reserved.', 'webradino' ); ?>
        </p>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>