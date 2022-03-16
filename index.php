<?php get_header(); ?>

<div id="content" class="container page-content">
	<div id="inner-content" class="wrap cf">
			<main id="main" class="m-all t-2of3 d-5of7 cf news-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

					<header class="article-header">

						<h1 class="h2"><a class="entry-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<p class="byline entry-meta vcard">
									<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
										/* the time the post was published */
										'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
										/* the author of the post */
										'<span></span>'
									); ?>
						</p>

					</header>

					<section class="entry-content cf">
						<?php the_content(); ?>
					</section>
					<a class="news-view-link" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">View Post <i class="fa fa-chevron-right"></i></a>

				</article>

				<?php endwhile; ?>

						<?php bones_page_navi(); ?>

				<?php else : ?>

						<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

				<?php endif; ?>


			</main>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
