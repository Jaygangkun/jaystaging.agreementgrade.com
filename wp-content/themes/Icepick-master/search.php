<?php get_header(''); ?>

<section class="search-list">
	<div class="container">
		<h3><?php _e('Search Results for:', 'primertheme'); ?> <?php echo esc_attr(get_search_query()); ?></h3>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
		
				<header class="article-header">
					<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</header> <!-- end article header -->
	
				<section class="entry-content">
					<?php the_field('description', get_The_ID()) ?>
	
				</section> <!-- end article section -->
		
				<footer class="article-footer">
			
				</footer> <!-- end article footer -->
	
			</article> <!-- end article -->
	
		<?php endwhile; ?>	
		<?php else : ?>
					
			<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h3><?php _e("Sorry, No Results.", "primertheme"); ?></h3>
				</header>
			</article>
	
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
