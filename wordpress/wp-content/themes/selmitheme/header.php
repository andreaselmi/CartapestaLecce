<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body class="d-flex flex-column h-100">
  <a name="top"></a>
  <header class="d-flex flex-column">
    
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex">
          <span class="navbar-brand"><?php echo get_bloginfo("name"); ?></span>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
          <?php
      wp_nav_menu(
        array(
          "theme_location" => "top-menu",
          "menu_class" => "navbar-nav"
          
        )
      )
    ?>
          </div>
        </div>
      </nav>
    </header>