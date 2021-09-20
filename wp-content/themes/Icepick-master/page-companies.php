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
        <?php
        $alphas = range('A', 'Z');
        $numbers = range('0', '9');
        $indexes = array_merge($numbers, $alphas);
        ?>
        <style>
        .companies-alpha-link {
            display: none;
        }
        </style>
        <div class="companies-alpha-links">
            <span class="companies-alpha-links-title">JUMP TO:</span>
            <?php
            foreach($indexes as $index) {
                ?>
                <span class="companies-alpha-link" data-group="<?php echo $index?>"><?php echo $index?></span>
                <?php
            }
            ?>
        </div>
        <?php

        $companies = get_posts(array(
			'post_type' => 'company',
			'numberposts' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
		));

        $prev_alpha_index = 0;
        $cur_group_count = 0;
        $group_tag_start = false;
        $prev_alpha = '';
        foreach($companies as $company){
            $title = get_the_title($company->ID);
            $link = get_permalink($company->ID);

            $first_letter = substr(strtoupper($title), 0, 1);
            if($prev_alpha != $first_letter) {

                if($group_tag_start){
                    ?>
                            </div> <!-- .row -->
                        </div> <!-- .companies-name-list -->
                    </div> <!-- .companies-group -->
                    <?php
                    $group_tag_start = false;
                }
                
                ?>
                <style>
                .companies-alpha-link[data-group="<?php echo $first_letter?>"] {
                    display: block;
                }
                </style>
                <div class="companies-group" data-group="<?php echo $first_letter?>">
                    <h2 class="companies-group-alpha"><?php echo $first_letter?></h2>
                    <div class="companies-name-list">
                        <div class="row">
                <?php
                $group_tag_start = true;
                ?>
                <div class="col-lg-4">
                    <div class="company-link-wrap"><a class="company-link" href="<?php echo $link?>"><?php echo $title?></a></div>
                </div>
                <?php
                $prev_alpha = $first_letter;
            }
            else if ($prev_alpha == $first_letter) {
                ?>
                <div class="col-lg-4">
                    <div class="company-link-wrap"><a class="company-link" href="<?php echo $link?>"><?php echo $title?></a></div>
                </div>
                <?php
            }
            ?>
            <?php
        }
        if($group_tag_start){
            ?>
                    </div> <!-- .row -->
                </div> <!-- .companies-name-list -->
            </div> <!-- .companies-group -->
            <?php
            $group_tag_start = false;
        }
        ?>
    </div>
</section>
<?php
get_footer();
