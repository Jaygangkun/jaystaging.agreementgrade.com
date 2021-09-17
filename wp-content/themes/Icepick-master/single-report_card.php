<?php get_header('home'); ?>

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
                        <h1 class="color-white text-center"><?php the_field('title')?></h1>
                        <p class="color-white text-center"><?php the_field('description')?></p>
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
            <span class="report-card-accordian-filter-link">D</span>
            <span class="report-card-accordian-filter-link">F</span>
        </div>
        <div class="report-card-accordian-table">
            <div class="report-card-accordian-table-head">
                <div class="report-card-accordian-table-row">
                    <div class="report-card-accordian-table-col col-sortable" sort-field="rank" sort-direction="asc">
                        <span>Fortune 500 Rank</span> <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i>
                    </div>
                    <div class="report-card-accordian-table-col col-sortable" sort-field="company_name" sort-direction="">
                        <span>Company</span> <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i>
                    </div>
                    <div class="report-card-accordian-table-col col-sortable" sort-field="agreement_grade" sort-direction="">
                        <span>Agreement Grade</span> <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i>
                    </div>
                    <div class="report-card-accordian-table-col col-sortable" sort-field="forced_arbitration" sort-direction="">
                        <span>Forced Arbiration</span> <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>CEO</span>
                    </div>
                    <div class="report-card-accordian-table-col">
                        <span>Glassdoor Rating</span>
                    </div>
                </div>
            </div>
            <div class="report-card-accordian-table-body" id="report_card_list">
                <?php
                $rank = 1;
                $count = 1;
                global $g_report_card_500_per_page;
                ?>
                <?php if( have_rows('companies') ): while ( have_rows('companies') ) : the_row(); ?>
                    <?php
                    $company_id = get_sub_field('company');
                    ?>
                    <div class="report-card-accordian-table-row">
                    
                        <div class="report-card-accordian-table-col">
                            <div class="report-card-accordian-table-col-content"><?php echo $rank;?></div>
                        </div>
                        <div class="report-card-accordian-table-col">
                            <div class="report-card-accordian-table-col-content"><a href="<?php echo get_permalink($company_id)?>"><?php echo get_the_title($company_id)?></a></div>
                        </div>
                        <div class="report-card-accordian-table-col col-agreement_grade">
                            <div class="report-card-accordian-table-col-content"><?php echo get_field('agreement_grade', $company_id)?></div>
                        </div>
                        <div class="report-card-accordian-table-col col-forced_arbitration">
                            <div class="report-card-accordian-table-col-content"><?php echo get_field('forced_arbitration', $company_id)?></div>
                        </div>
                        <div class="report-card-accordian-table-col">
                            <div class="report-card-accordian-table-col-content"><?php echo get_field('ceo', $company_id)?></div>
                        </div>
                        <div class="report-card-accordian-table-col">
                            <div class="report-card-accordian-table-col-content"><?php echo get_field('glassdoor_rating', $company_id)?></div>
                        </div>
                    </div>
                    <?php $rank ++ ?>
                    <?php
                    if($count >= $g_report_card_500_per_page) {
                        break;
                    }
                    $count ++;
                    ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="report-card-accordian-table-foot">
                <div class="report-card-accoridan-load-btn-wrap">
                    <span class="custom-btn custom-btn-blue load-report-cards-btn" post-id="<?php echo get_the_ID()?>" pagination-index="0">see more</span>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>

