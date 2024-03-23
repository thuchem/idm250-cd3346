
<body>

    <nav>
        <div class="navbar">
          <div class="container nav-container">
              <input class="checkbox" type="checkbox" />
              <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
              </div>  
            <div class="logo">
                <a class="logo-link">CHEMFOLIO.</a>
            </div>
            <div class="menu-items">
                <?php wp_nav_menu( [
                    'theme_location' => '404-menu'
                    ]); ?>
            </div>
          </div>
        </div>
      </nav> 
</body>

