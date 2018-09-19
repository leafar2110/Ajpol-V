<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<section class="contenedor-general">
	<!-- ***********************SECTION PORTADA*************************** -->
	<?php  get_template_part('partials/portada'); ?>
	<!-- *********************** END SECTION PORTADA*************************** -->

	<!-- ***********************SECTION INFORMACION*************************** -->
	<?php  get_template_part('partials/informacion'); ?>
	<!-- ***********************END SECTION INFORMACION*************************** -->

	<!-- ***********************SECTION ASESORIA*************************** -->
	<?php  get_template_part('partials/asesoria'); ?>
	<!-- *********************** END SECTION ASESORIA*************************** -->

	<!-- ***********************SECTION ASESORIA*************************** -->
	<?php  get_template_part('partials/servicio'); ?>
	<!-- *********************** END SECTION ASESORIA*************************** -->

	<!-- ***********************SECTION ASESORIA*************************** -->
	<?php  get_template_part('partials/ayuda'); ?>
	<!-- *********************** END SECTION ASESORIA*************************** -->


	<!-- ***********************SECTION ASESORIA*************************** -->
	<?php  get_template_part('partials/blog'); ?>
	<!-- *********************** END SECTION ASESORIA*************************** -->

	<!-- ***********************SECTION ASESORIA*************************** -->
	<?php  get_template_part('partials/contacto'); ?>
	<!-- *********************** END SECTION ASESORIA*************************** -->
	
</section>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>