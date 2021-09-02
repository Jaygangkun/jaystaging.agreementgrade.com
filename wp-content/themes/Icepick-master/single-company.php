<?php get_header(); ?>

<div class="single-company-content">
    <section class="single-company-info">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-7">
                    <h1 class="single-company__title"><?php the_title()?></h1>
                    <div class="single-company-info-row">
                        <div class="single-company-info-col">
                            <div class="single-company-info__title">AGREEMENT GRADE</div>
                            <div class="single-company-info__value">
                                <span class="single-company-grade-badget grade-<?php the_field('agreement_grade')?>"><?php the_field('agreement_grade')?></span>
                            </div>
                        </div>
                        <div class="single-company-info-col">
                            <div class="single-company-info__title"><?php the_field('fortune_name')?></div>
                            <div class="single-company-info__value"><?php the_field('fortune_value')?></div>
                        </div>
                        <div class="single-company-info-col">
                            <div class="single-company-info__title">OWLER CEO APPROVAL RATING</div>
                            <div class="single-company-info__value"><?php the_field('owler_ceo_approval_rating')?></div>
                        </div>
                        <div class="single-company-info-col">
                            <div class="single-company-info__title">GLASSDOOR RATING</div>
                            <div class="single-company-info__value"><?php the_field('glassdoor_rating')?></div>
                        </div>
                        <div class="single-company-info-col">
                            <div class="single-company-info__title">CEO</div>
                            <div class="single-company-info__value"><?php the_field('ceo')?></div>
                        </div>
                    </div>
                    <div class="single-company-description"><?php the_field('description')?></div>
                    <div class="single-company-info-block">
                        <h4 class="single-company-info-block__title">AG Sources</h4>
                        <div class="single-company-info-block-wrap"><?php the_field('ag_sources')?></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php
                    $logo = get_field('logo');
                    if($logo) {
                        ?>
                        <div class="single-company-logo-wrap">
                            <img class="single-company-logo__img" src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                        </div>
                        <?php
                    }
                    ?>
                    <div class="single-company-info-block">
                        <h4 class="single-company-info-block__title">Links</h4>
                        <div class="single-company-info-block-wrap">
                            <?php if( have_rows('links') ): while ( have_rows('links') ) : the_row(); ?>
                                <?php
                                $link = get_sub_field('link');
                                if($link){
                                    ?>
                                    <div class="single-company-link-wrap">
                                        <a class="single-company-link" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
                                    </div>
                                    <?php
                                }
                                ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="single-company-info-block">
                        <h4 class="single-company-info-block__title">DOWNLOADABLE FILES</h4>
                        <div class="single-company-info-block-wrap">
                            <?php if( have_rows('downloadable_files') ): while ( have_rows('downloadable_files') ) : the_row(); ?>
                                <?php
                                $link = get_sub_field('file');
                                if($link){
                                    ?>
                                    <div class="single-company-file-wrap">
                                        <a class="single-company-file-link" href="<?php echo $file['url']?>"><?php echo $file['name']?></a>
                                    </div>
                                    <?php
                                }
                                ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>

