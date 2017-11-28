﻿
<?php get_header();?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				<?php while (have_posts()):the_post();?>
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('No comments','One comment','% comments','comment_class','Comments off'); ?>]</div>
						<?php read_more(10); ?>... <a href="<?php the_permalink(); ?>">read more</a>
					</article>
					<?php endwhile; ?>
					
					
				
					<ul id="pagi">
					<?php 
						the_posts_navigation(array(
							'previous_text' => 'PREVE',
							'next_text' => 'NEXT'
						)
						);
					
					?>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer();?>
