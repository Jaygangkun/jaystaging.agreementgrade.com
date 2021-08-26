<?php /* Template Name: Report Card Accordian Page Template */ ?>
<?php
get_header('home');
?>
<section class="home-hero about-hero">
    <div class="home-hero-background">
    </div>
    <div class="home-hero-wrap">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="home-header">
                
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img class="home-header__logo-img" src="<?php echo get_template_directory_uri()?>/library/images/logo.png">
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
                        <h1 class="color-white text-center">Fortune 500 Report Card: 2019</h1>
                        <p class="color-white text-center">Our latest repot…the official Agreement Grade report card on the fairness of employee agreements for the 2020 Fortune 500. Click into each company for additional details, insight into why they received their grade, and access to each companies downloadable files.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="report-card-accordian">
    <div class="container">
        <div class="report-card-accordian-filter">
            <span class="report-card-accordian-filter-title">Filter by Agreement Grade:</span>
            <span class="report-card-accordian-filter-link">A</span>
            <span class="report-card-accordian-filter-link">B</span>
            <span class="report-card-accordian-filter-link">C</span>
        </div>
        <div class="report-card-accordian-table">
            <div class="report-card-accordian-table-head">
                <div class="report-card-accordian-table-row">
                    <div class="report-card-accordian-table-col">
                        <span>Fortune 500 Rank</span> <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>Company</span> <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>Agreement Grade</span> <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>Forced Arbiration</span> <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>CEO</span>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>Glassdoor Rating</span>
                    </div>
                    <div class="report-card-accordian-table-col">
                    </div>
                </div>
            </div>
            <div class="report-card-accordian-table-body">
                <div class="report-card-accordian-table-row">
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">1</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Walmart</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">F</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Yes</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Doug Mcmillon</div>
                        <div class="report-card-accordian-table-col-content-extend">63/100 Owler Rating</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">3.2</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content-extend">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="report-card-accordian-table-row">
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">2</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Amazon</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">F</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Yes</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Firstname Lastname</div>
                        <div class="report-card-accordian-table-col-content-extend">63/100 Owler Rating</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">3.2</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content-extend">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="report-card-accordian-table-row">
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">3</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Exxon Mobil</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">D</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Yes</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">Name Lastname</div>
                        <div class="report-card-accordian-table-col-content-extend">63/100 Owler Rating</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content">3.8</div>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <div class="report-card-accordian-table-col-content-extend">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="report-card-accordian-table-foot">
                <div class="report-card-accoridan-load-btn-wrap">
                    <span class="custom-btn custom-btn-blue">see more</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();