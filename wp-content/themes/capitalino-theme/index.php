<?php get_header(); ?>

    <nav class="nav has-shadow">
        <div class="nav-left">
            <a class="nav-item">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
            </a>
        </div>

        <div class="nav-center">
            <a class="nav-item">
                <span class="icon">
                    <i class="fa fa-github"></i>
                </span>
            </a>
            <a class="nav-item is-active">
                <span class="icon">
                    <i class="fa fa-twitter"></i>
                </span>
            </a>
        </div>

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <!-- This "nav-menu" is hidden on mobile -->
        <!-- Add the modifier "is-active" to display it on mobile -->
        <div class="nav-right nav-menu">
            <a class="nav-item">
                Home
            </a>
            <a class="nav-item">
                Documentation
            </a>
            <a class="nav-item">
                Blog
            </a>

            <span class="nav-item">
                <a class="button" >
                    <span class="icon">
                        <i class="fa fa-twitter"></i>
                    </span>
                    <span>Tweet</span>
                </a>
                <a class="button is-primary">
                    <span class="icon">
                        <i class="fa fa-download"></i>
                    </span>
                    <span>Download</span>
                </a>
            </span>
        </div>
    </nav>

    <?php get_search_form(); ?>

    <?php for ($i = 0; $i < 1000; $i++): ?>
        <br>
    <?php endfor; ?>

<?php get_footer(); ?>
