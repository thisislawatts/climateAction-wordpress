<?php
/**
 * Template to output other related actions.
 *
 * @package CAT
 */

$actions_repeater = 'actions';
?>

<section class="">

	<h2 class="pb-1">Other actions you might be interested in taking</h2>

		<div class="posts-wrapper row">

		<?php

		// Check if we have some other specific actions set up in the backend.
		if ( have_rows( $actions_repeater ) ) :
			?>

			<div class="">
				<?php

				// Loop through rows.
				while ( have_rows( $actions_repeater ) ) :

					the_row();
					$template_args;
					$template_args['casestudy_id'] = get_sub_field( 'case_study' )->ID;

					get_template_part( 'template-parts/action/action-teaser', '', $template_args );

				endwhile;

				?>
			</div>

			<?php
		else :
			/* Default actions that will be displayed if there are none selected in the backend. */
			$args = array(
				'post_type'      => 'action',
				'posts_per_page' => 3,
				'orderby'        => 'date',
				'order'          => 'ASC',
			);

			$default_actions = new WP_Query( $args );
			?>

			<?php

			while ( $default_actions->have_posts() ) :

				$default_actions->the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			wp_reset_postdata();
			?>

			<?php
		endif;
		?>
	</div>

</section>
<?php
