<!-- 
This is where you add the HTML for how you want the content of your page to appear.
Some template tags you might want to use:

	<?php the_title(); ?>
	Filed in: <?php the_category(', '); ?>
	<?php the_tags('Taged with: ', ', ') ?>
	<?php the_post_thumbnail('feature-image' ); ?> Change feature-image to whatever name you defined for the featured image
	<?php the_content(); ?>

	These if you want to show next and previous posts
	Change the formatting around the links to suit your needs.
	They can be in separate elements etc.

	<p>
		<?php previous_post_link('%link', '%title', TRUE ); ?>
		&mdash; 
		<?php next_post_link('%link', '%title', TRUE ); ?> 
	</p>


	Custom Field.
	You can use Custom Fields to do things like make links to your work (for web sites for example).
	For the code below to work you would have had to make a custom field named link_url in the post
	<?php  if((get_post_meta($post->ID, "link_url", true))) { ?>
		<p class="work_url">
			<a href="<?php echo get_post_meta($post->ID, "link_url", true); ?>">Visit Site</a>		
		</p>
	<?php } ?>


Add your content below. Delete this and everything above or it will show up in your source. 
-->

<!-- row title-content -->
<div class="row">
	<div class="medium-8 large-8 columns">
		<h2><?php the_title(); ?></h2>
		<!-- post content -->
		<?php the_content(); ?>
	</div><!-- end row title-content -->

<!-- row featured image -->
	<div class="medium-4 large-4 columns">
		<?php the_post_thumbnail('feature-image' ); ?>
	</div>
</div> <!-- end row featured image -->
