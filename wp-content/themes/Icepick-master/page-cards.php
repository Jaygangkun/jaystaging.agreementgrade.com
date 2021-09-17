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
                        <h1 class="color-white text-center"><?php the_field('title')?></h1>
                        <p class="color-white text-center"><?php the_field('description')?></p>
                        <?php
                        $link = get_field('link');
                        if($link) {
                            ?>
                            <div class="report-card-hero-badge-wrap">
                                <a class="link-btn text-yellow-badge" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="report-card-groups">
    <div class="container">
        <?php
        $fortunes = get_terms([
            'taxonomy' => 'fortune',
            'hide_empty' => false,
        ]);

        foreach($fortunes as $fortune) {
            ?>
            <div class="report-card-group">
                <h2 class="report-card-group__title"><?php echo $fortune->name ?></h2>
                <div class="report-card-group-list">
                <?php
                $report_cards = get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'report_card',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'fortune',
                                'field' => 'term_id',
                                'terms' => $fortune->term_id,
                            )
                        )
                    )
                );

                foreach($report_cards as $report_card) {
                    ?>
                    <a class="report-cards-wrap" href="<?php echo get_permalink($report_card->ID)?>">
                        <h3 class=""><span><?php echo $report_card->title?></span></h3>
                        <span class="report-cards-link" href="<?php echo get_permalink($report_card->ID)?>">See report card <i class="fa fa-arrow-right"></i></span>
                    </a>
                    <?php
                }
                ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<?php
get_footer();