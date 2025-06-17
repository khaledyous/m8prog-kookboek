<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
            <div class="row">
                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </div>
        <?php else : ?>
            <span class="text-body-secondary">Voeg een widget toe via Weergave > Widgets.</span>
        <?php endif; ?>
    </div>
</footer>

<!-- Bootstrap JS Bundle via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>
