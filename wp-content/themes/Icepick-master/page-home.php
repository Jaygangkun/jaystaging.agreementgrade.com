<?php /* Template Name: Home Page Template */ ?>
<?php
get_header('home');
?>
<section class="home-hero">
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
                        <h1 class="color-white text-center">We grade companies on the fairness of their <span class="highlight">employee agreements</span>.</h1>
                        <p class="color-white text-center">We are the nation's leader in employment agreement advocacy. We hold corporations responsible by creating a transparent, level playing field for all employees.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-sub-content">
            <div class="home-sub-content-image-wrap">
                <img class="home-sub-content__img" src="<?php echo get_template_directory_uri()?>/library/images/homepage-hero.png">
            </div>
            <div class="home-sub-content-table-wrap">
                <div class="home-hero-table">
                    <div class="home-hero-table-header">
                        <h3 class="home-hero-table-title">Fortune 500 top 10</h3>
                        <div class="home-hero-table-select">
                            <select class="">
                                <option class="">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="home-hero-table-body">
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">1</div>
                            <div class="home-hero-table-col">Walmart</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">2</div>
                            <div class="home-hero-table-col">Amazon</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">3</div>
                            <div class="home-hero-table-col">Exxon Mobil</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">D</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">4</div>
                            <div class="home-hero-table-col">Apple</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--fill-green">A</span>
                            </div>
                            <div class="home-hero-table-col"><strong>No</strong></div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">5</div>
                            <div class="home-hero-table-col">CVS Health</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">6</div>
                            <div class="home-hero-table-col">Berkshire Hathaway</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">7</div>
                            <div class="home-hero-table-col">UnitedHealth Group</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">8</div>
                            <div class="home-hero-table-col">McKesson</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark">A</span>
                            </div>
                            <div class="home-hero-table-col">No</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">9</div>
                            <div class="home-hero-table-col">AT&T</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark home-hero-table-mark--red-outline">F</span>
                            </div>
                            <div class="home-hero-table-col">Yes</div>
                        </div>
                        <div class="home-hero-table-row">
                            <div class="home-hero-table-col">10</div>
                            <div class="home-hero-table-col">AmerisourceBergen</div>
                            <div class="home-hero-table-col">
                                <span class="home-hero-table-mark">A</span>
                            </div>
                            <div class="home-hero-table-col">No</div>
                        </div>
                    </div>
                    <div class="home-hero-table-footer">
                        <a class="home-hero-table-link">SEE FULL REPORT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-search">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-7">
                <h1 class="">Curious about a company?</h1>
                <p><strong>Enter a company name and we will tell you how fair their employment agreement is:</strong></p>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" placeholder="Enter company name">
                    <span class="custom-btn custom-btn-blue">search</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-do-it">
    <div class="home-do-it-wrap">
        <div class="container text-center">
            <h2>Why We Do It</h2>
            <p>Corporations are directly responsible for the mistreatment of their employee. We compel them to become part of the solution. We see a future where both employees and employers are empowered to be the best version of themselves every single day. The more people that are able to put their best foot forward, the brighter and safer our world will become.</p>
            <div class="custom-btn-wrap text-center">
                <a class="custom-btn custom-btn-blue">more about us</a>
            </div>
        </div>
    </div>

    <div class="home-do-it-wrap">
        <div class="container text-center">
            <h2>How We Do It</h2>
            <p>We engage company leaders and strongly encourage theme to review and remove the predatory clauses within their standard employment agreement. Clauses such as; mandatory arbitration, backdoor NDA's, and unfair non-competes. Once the revised agreement meets our AGC requirements, the company will become publicly accredited by Agreement Grade, earning our stamp of approval</p>
            <div class="custom-btn-wrap text-center">
                <a class="custom-btn custom-btn-blue">cta tbd</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();