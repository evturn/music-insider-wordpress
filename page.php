<?php get_header(); ?>

	<main class="content" role="main">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

	<article class="post tag-article">
		<img class='img-left' src='wp-content/themes/music-insider/assets/images/useravatar.jpg' alt='authorimage'>
		<br/>
		<header class="post-header">
			<h2 class="post-title"><a href="#"><?php the_title(); ?></a></h2>
			<br/>
			<div class="date-box">
				<span class="date-outer">
					<span class="date-inner"><time datetime="2014-01-15">15 Jan 2014</time></span>
				</span>
			</div>
		</header>
		<section class="post-excerpt">
		<br>
		<?php the_content(); ?>
		</section>
	</article>
	<br/>
        
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>
    
	  <nav class="pagination" role="navigation">
	    <a class="newer-posts" href="/">&larr; Newer Posts</a>    
	  	<span class="page-number">Page 1 of 1</span>    
	    <a class="older-posts" href="#">Older Posts &rarr;</a>    
		</nav>
	</main>

<?php get_footer(); ?>