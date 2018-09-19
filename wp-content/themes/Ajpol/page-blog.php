<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<!-- ***********************SECTION PORTADA*************************** -->
<?php  get_template_part('partials/portada'); ?>
<!-- *********************** END SECTION PORTADA*************************** -->

<!-- ***********************SECTION ASESORIA*************************** -->
<?php  get_template_part('partials/blog'); ?>
<!-- *********************** END SECTION ASESORIA*************************** -->

<!-- ***********************SECTION ASESORIA*************************** -->
<?php  get_template_part('partials/contacto'); ?>
<!-- *********************** END SECTION ASESORIA*************************** -->


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>