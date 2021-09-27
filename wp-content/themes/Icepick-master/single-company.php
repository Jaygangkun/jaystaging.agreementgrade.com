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
                    <div class="single-company-info-block">
                        <h4 class="single-company-info-block__title">COMMENTS</h4>
                        <div class="single-company-info-block-wrap">
                        <?php comments_template(); ?>
                        </div>
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
                        <h4 class="single-company-info-block__title"><img class="single-company-info-block__title-img" src="<?php echo get_template_directory_uri()?>/library/images/icon-link.png">Links</h4>
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
                    <div class="single-company-info-block" style="display: none">
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
                    <div class="single-company-info-block">
                        <h4 class="single-company-info-block__title">POST A COMMENT</h4>
                        <div class="single-company-info-block-wrap single-commpay-post-wrap">
                        <?php 
                            $comments_args = array(
                                // Change the title of send button 
                                'label_submit' => __( 'Post', 'textdomain' ),
                                'title_reply' => '',
                                // Change the title of the reply section
                                // 'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
                                'logged_in_as' => "",
                                // Remove "Text or HTML to be displayed after the set of comment fields".
                                'comment_notes_after' => '',
                                // Redefine your own textarea (the comment body).
                                'fields' => apply_filters( 'comment_form_default_fields', array(
                                    'author' => '<input id="author" class="blog-form-input" placeholder="Full Name* " name="author" type="text" value="" size="30">',
                                
                                    'email' => '<input id="email" class="blog-form-input" placeholder="Email* " name="email" type="text" value="" size="30">',
                                
                                    'url' => '<input id="url" class="blog-form-input" placeholder="Website" name="url" type="text" value="" size="30" />'
                                )),
                                'comment_field' => '<textarea id="comment" name="comment" aria-required="true" placeholder="Comment"></textarea>',
                                'comment_notes_before' => '',
                                'comment_notes_after' => ''
                            );
                            comment_form( $comments_args );
                            // comments_template();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>

