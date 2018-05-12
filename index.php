<?php /* Template Name: Emma */ ?>
<?php get_header(); ?>

	<div id="content">
  <div id="latest"><h1>Last Posts</h1></div>
			<?php if (have_posts()) : ?>
				<?php $i=0;?>
				<?php while ($i < 10 and have_posts()) : the_post(); ?>

					<div class="post" id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					</div>
				<?php $i++;?>
				<?php endwhile; ?>

					<?php next_posts_link('&laquo; Older') ?> | <?php previous_posts_link('Newer &raquo;') ?>

			<?php else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>

			<?php endif; ?>


	<div id="latest"><h1>My projects</h1></div>

	<table style="width: 456.867px; height: 256px;">
	<tbody>
	<tr style="height: 12px;">
	<td style="width: 101px; height: 52px;" rowspan="2">
	<p><img style="display: block; margin-left: auto; margin-right: auto;" src="<?php bloginfo('url');?>/images/latamsat.png" alt="" width="92" height="92" /></p>
	</td>
	<td style="width: 333.867px; height: 12px;">
	<a href="http://latam-sat.com"><h2>Latamsat</h2></a>
	</td>
	</tr>
	<tr style="height: 40px;">
	<td style="width: 333.867px; height: 40px; text-align: justify;">Somos un grupo de profesionales especializados en las tem&aacute;ticas Tecnolog&iacute;a y Software aplicados al &aacute;mbito de la industria aeroespacial, llevando adelante un emprendimiento en base a nuestra especializaci&oacute;n</td>
	</tr>
	<tr style="height: 15.3px;">
	<td style="width: 101px; height: 7.3px;" rowspan="2"><img style="display: block; margin-left: auto; margin-right: auto;" src="<?php bloginfo('url');?>/images/app_perros_login.png" alt="" width="92" height="92" /></td>
	<td style="width: 333.867px; height: 15.3px;">
	<a href="https://github.com/eamanu/Rescate-Animal"><h2>Rescate animal</h2></a>
	</td>
	</tr>
	<tr style="height: 47px;">
	<td style="width: 333.867px; height: 47px; text-align: justify;">Rescate Animal es una aplicaci&oacute;n que agiliza el pedido de rescate de animales de la calle y en situaci&oacute;n de maltrato. Es un proyecto nuevo y en crecimiento. Se pretende desarrollar una aplicaci&oacute;n para Android y para Web, con el fin de crear una comunidad de recatistas.</td>
	</tr>
	</tbody>
	</table>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
