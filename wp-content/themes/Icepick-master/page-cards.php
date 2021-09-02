<?php /* Template Name: Report Cards Page Template */ ?>
<?php
get_header('home');
?>
<section class="home-hero report-card-hero">
    <div class="home-hero-background">
    </div>
    <div class="home-hero-wrap">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="home-header">
                
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img class="home-header__logo-img" src="<?php echo get_template_directory_uri()?>/library/images/logo-white.svg">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbar-content">
                
                    <div class="header-menus">    
                        <?php primer_main_nav(); ?>
                        <div class="header-menu-search">
                            <span class="">SEARCH</span>
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>  
            </div>
        </nav>

        <div class="home-hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <h1 class="color-white text-center">Report Cards</h1>
                        <p class="color-white text-center">Every year we create a comprehensive report of the Fortune 500 Agreement Grades…</p>
                        <div class="report-card-hero-badge-wrap">
                            <span class="text-yellow-badge">NEW! 2020 Fortune 500 report card</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="report-card-groups">
    <div class="container">
        <div class="report-card-group">
            <h2 class="report-card-group__title">Fortune 500</h2>
            <div class="report-card-group-list">
                <div class="report-cards-wrap">
                    <h3 class="">Fortune 500: 2020 Report Card</h3>
                    <a class="report-cards-link">See report card <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="report-cards-wrap">
                    <h3 class="">Fortune 500: 2019 Report Card</h3>
                    <a class="report-cards-link">See report card <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="report-card-group">
            <h2 class="report-card-group__title">Fortune 100</h2>
            <div class="report-card-group-list">
                <div class="report-cards-wrap">
                    <h3 class="">Fortune 100: Best Companies to Work For 2019</h3>
                    <a class="report-cards-link">See report card <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="report-cards-wrap">
                    <h3 class="">Fortune 100: Best Companies to Work For 2018</h3>
                    <a class="report-cards-link">See report card <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();