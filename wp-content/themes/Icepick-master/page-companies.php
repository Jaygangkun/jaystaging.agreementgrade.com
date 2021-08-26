<?php /* Template Name: Companies Page Template */ ?>
<?php
get_header('home');
?>
<section class="home-hero company-hero">
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
                        <h1 class="color-white text-center">Company Grades</h1>
                        <p class="color-white text-center">Research shows 88% of the Fortune 500 have mandatory arbitration clauses in their employment agreements. Curious about a company? Find out how fair their employee agreement is.</p>
                        <div class="company-hero-badge-wrap">
                            <span class="text-yellow-badge">NEW! 2020 Fortune 500 report card</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="companies-list">
    <div class="container">
        <div class="companies-alpha-links">
            <span class="companies-alpha-links-title">JUMP TO:</span>
            <span class="companies-alpha-link">A</span>
            <span class="companies-alpha-link">B</span>
            <span class="companies-alpha-link">C</span>
            <span class="companies-alpha-link">D</span>
            <span class="companies-alpha-link">E</span>
        </div>
        <div class="companies-group">
            <h2 class="companies-group-alpha">A</h2>
            <div class="companies-name-list">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">A-Mark Precious Metals</a></div>
                        <div class="company-link-wrap"><a class="company-link">Abbott Laboratories</a></div>
                        <div class="company-link-wrap"><a class="company-link">AbbVie</a></div>
                        <div class="company-link-wrap"><a class="company-link">ABM Industries</a></div>
                        <div class="company-link-wrap"><a class="company-link">About Us</a></div>
                        <div class="company-link-wrap"><a class="company-link">Accenture</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">Alaska Air Group</a></div>
                        <div class="company-link-wrap"><a class="company-link">Albertsons Cos.</a></div>
                        <div class="company-link-wrap"><a class="company-link">Alcoa</a></div>
                        <div class="company-link-wrap"><a class="company-link">Alleghany</a></div>
                        <div class="company-link-wrap"><a class="company-link">Alliance Data Systems</a></div>
                        <div class="company-link-wrap"><a class="company-link">Allianz Life Insurance Company</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">American Family Insurance</a></div>
                        <div class="company-link-wrap"><a class="company-link">American Fidelity Assurance</a></div>
                        <div class="company-link-wrap"><a class="company-link">American Financial Group</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">Archer Daniels Midland</a></div>
                        <div class="company-link-wrap"><a class="company-link">Arconic</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="companies-group">
            <h2 class="companies-group-alpha">B</h2>
            <div class="companies-name-list">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">Baird</a></div>
                        <div class="company-link-wrap"><a class="company-link">Baker Danelson</a></div>
                        <div class="company-link-wrap"><a class="company-link">Ball</a></div>
                        <div class="company-link-wrap"><a class="company-link">Bank of America Corp.</a></div>
                        <div class="company-link-wrap"><a class="company-link">Bank of New York Mellon</a></div>
                        <div class="company-link-wrap"><a class="company-link">Baptist Health Souuth Florida</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">BayCare Health System</a></div>
                        <div class="company-link-wrap"><a class="company-link">BB&T Corp.</a></div>
                        <div class="company-link-wrap"><a class="company-link">Becton Dickinson</a></div>
                        <div class="company-link-wrap"><a class="company-link">Bed Bath & Beyond</a></div>
                        <div class="company-link-wrap"><a class="company-link">Berkshire Hathaway</a></div>
                        <div class="company-link-wrap"><a class="company-link">Berry Global Group</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">Biogen</a></div>
                        <div class="company-link-wrap"><a class="company-link">BlackRock</a></div>
                        <div class="company-link-wrap"><a class="company-link">Blackstone Group</a></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="company-link-wrap"><a class="company-link">Bristol-Myers Squibb</a></div>
                        <div class="company-link-wrap"><a class="company-link">Build-A-Bear Workshop</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
