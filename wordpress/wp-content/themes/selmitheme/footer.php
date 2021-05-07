<footer class="footer mt-auto py-3 primary">
      <div
        class="align-content-center container d-flex flex-column align-items-center text-muted"
      >
        <span><?php echo get_bloginfo("name"); ?></span>
        <?php
						dynamic_sidebar("footer-1");
		    ?>
        <span>
          <a href="#top" class="text-muted">Back to top</a>
        </span>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>