<?php
/**
 * Template Name: INICIO
 */
?>
<?php /* layerslider(1); */ ?>
</div>


	<!-- CATEGORY VIEW -->
	<div class="albaContainer col-md-9 col-xs-12 medpadtop maxpadbottom">
	<div class="iproTitle color1 pull-left">NOVETATS</div>
	<div class="pull-right " style="margin-top:-5px; margin-bottom:10px;"><?php get_search_form(); ?></div>

		<?php
			wp_reset_query();
			$args = array(
				'post_type'             => 'post',
				'post_status'           => 'publish',
				'posts_per_page'        => '8',
				'cache_results' => false, // para mejorar rendimiento en dev o prod
				'update_post_term_cache' => false,
				'update_post_meta_cache' => false,
				'no_found_rows' => true, // para mejorar rendimiento si no existe paginacion
			);		
			$productos = new WP_Query($args);
			
			while ( $productos->have_posts() ) { 
				$productos->the_post();
				//var_dump ($productos->the_post());
				iproRenderNoticias ($post);
			}
		?>
	</div>
	<!-- FIN PRODUCTOS -->

<?php include get_template_directory() . "/templates/sidebar.php";