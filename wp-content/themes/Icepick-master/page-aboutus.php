<?php /* Template Name: Aboutus Page Template */ ?>
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
                    <img class="home-header__logo-img" src="<?php echo get_template_directory_uri()?>/library/images/logo-white.svg">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbar-content">
                
                    <div class="header-menus">    
                        <?php primer_main_nav(); ?>
                        <div class="header-menu-search">
                            <form id="nav_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="text" class="search-field" name="s" placeholder="SEARCH" value="<?php echo get_search_query(); ?>">
                                <i class="fa fa-search" id="nav_search_btn"></i>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </nav>

        <div class="home-hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <h1 class="color-white text-center">Who We Are</h1>
                        <p class="color-white text-center">Agreement Grade is the <span class="highlight">nations's leader</span> in employment agreement advocacy. We hold corporations responsible by creating a transparent, level playing field for ALL employees to be heard, prosper, and contribute to a brighter, safer future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-description">
    <div class="container position-relative">
        <h2 class="text-center">About Agreement Grade</h2>
        <p class="">Agreement Grade was created in order to provide transparency into the employee practices of the corporate world. In this era of culture driven business, companies must abandon their abuse of non-friendly employee agreements, or face the consequences.<br><br>
        Agreement Grade aims to help current and prospective employee’s gauge how fair a company treats employees when it comes to distasteful employee agreements. Many of which include forced arbitration clauses, requiring employees to waive their constitutional rights in disputes involving discrimination, sexual harassment, retaliation, abuse, unequal pay, unlawful termination, and many more.<br><br>
        Did you sign an employee agreement requiring forced arbitration? This is an extremely common practice at all size companies, but especially the Fortune 500. Most employees aren’t aware they sign their rights away. In fact, 80% of the Fortune 100 has used forced arbitration in connection to work-related disputes since 2010! Source: <a class="">Employee Rights Advocacy Institute</a></p>
    </div>
</section>
<section class="about-find-report">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-5">
                <h2>Find out how we graded your company in the latest Report Card.</h2>
            </div>
            <div class="col-lg-7">
                <p>If your company is missing, head on over to our secure, Submit My Agreement, page and upload your agreement. Our legal experts will review and grade your agreement with detailed & personalized feedback as a free service!</p>
                <div>
                    <span class="text-yellow-badge">NEW! 2020 Fortune 500 report card</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-other">
    <div class="about-other-wrap">
        <div class="about-other-top">
        </div>
        <div class="about-other-middle">
            <img class="" src="<?php echo get_template_directory_uri()?>/library/images/see-report-card.svg">
            <p>Interested in learning more about forced arbitration and why companies elect this practice?</p>
        </div>
        <div class="about-other-bottom">
        </div>
        <div class="about-other-link-wrap">
            <a class="custom-btn custom-btn-blue">SEE FAQs</a>
        </div>
    </div>
    <div class="about-other-wrap">
        <div class="about-other-top">
        </div>
        <div class="about-other-middle">
            <img class="" src="<?php echo get_template_directory_uri()?>/library/images/get-accredited.svg">
            <p>Feel free to Contact Us privately with any comments, concerns, or questions!</p>
        </div>
        <div class="about-other-bottom">
        </div>
        <div class="about-other-link-wrap">
            <a class="custom-btn custom-btn-blue">contact us</a>
        </div>
    </div>
</section>
<?php
get_footer();