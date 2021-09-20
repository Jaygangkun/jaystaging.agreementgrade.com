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
                        <h1 class="color-white text-center">We grade companies on the fairness of their <div class="highlight"><span>employee agreements</span></div>.</h1>
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
                    <style>
                        .home-hero-fortune-table-content {
                            display: none;
                        }

                        .home-hero-fortune-table-content[fortune-index="0"] {
                            display: block;
                        }
                    </style>
                    <?php
                    $fortune_list = array();
                    $index = 0;
                    if( have_rows('hero_fortune_list') ): while ( have_rows('hero_fortune_list') ) : the_row();
                        $fortune_list[] = array(
                            'title' => get_sub_field('title'),
                            'option' => get_sub_field('select_option_title'),
                            'value' => $index,
                            'report_card' => get_sub_field('report_card')
                        );
                        $index++;
                    endwhile; endif;
                    ?>
                    <div class="home-hero-table-header">
                        <?php
                        $index = 0;
                        foreach($fortune_list as $fortune) {
                            ?>
                            <h3 class="home-hero-table-title home-hero-fortune-table-content" fortune-index="<?php echo $index?>"><?php echo $fortune['title']?></h3>
                            <?php
                            $index++;
                        }
                        ?>
                        
                        <div class="home-hero-table-select">
                            <select class="" id="home_hero_fortune_select">
                                <?php
                                $index = 0;
                                foreach($fortune_list as $fortune) {
                                    ?>
                                    <option class="" value="<?php echo $index?>"><?php echo $fortune['option']?></option>
                                    <?php
                                    $index++;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php
                        $index = 0;
                        foreach($fortune_list as $fortune) {
                            ?>
                            <div class="home-hero-fortune-table-content" fortune-index="<?php echo $index?>">
                                <div class="home-hero-table-body">
                                    <?php
                                    $report_card_id = $fortune['report_card'];
                                    $company_index = 1;
                                    if( have_rows('companies', $report_card_id) ): while ( have_rows('companies', $report_card_id) ) : the_row();
                                        ?>
                                        <div class="home-hero-table-row">
                                            <div class="home-hero-table-col"><?php echo $company_index?></div>
                                            <div class="home-hero-table-col">
                                                <?php
                                                $company_id = get_sub_field('company');
                                                echo get_the_title($company_id);
                                                ?>
                                            </div>
                                            <div class="home-hero-table-col col-agreement_grade">
                                                <span class="home-hero-table-mark home-hero-table-mark--red-outline1 home-hero-table-mark--fill-green1"><?php echo get_field('agreement_grade', $company_id) ?></span>
                                            </div>
                                            <div class="home-hero-table-col col-forced_arbitration"><?php echo get_field('forced_arbitration', $company_id)?></div>
                                        </div>
                                        <?php                                    
                                        if($company_index >= 10) {
                                            break;
                                        }
                                        $company_index++;
                                    endwhile; endif;
                                    ?>
                                </div>
                                <div class="home-hero-table-footer">
                                    <a class="home-hero-table-link" href="<?php echo get_permalink($report_card_id)?>">SEE FULL REPORT</a>
                                </div>
                            </div>
                            <?php
                            $index++;
                        }
                    ?>
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
                <form id="home_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="form-group">
                        <input type="text" name="s" placeholder="Enter company name" value="<?php echo get_search_query(); ?>">
                        <span class="custom-btn custom-btn-blue" id="home_search_btn">search</span>
                    </div>
                </form>
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