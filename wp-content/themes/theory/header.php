<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'header_nav',
			    //добавить класс на нашу навигацию:
				'menu_class' => 'myclass',
				
		)
	);
?>

<!-- <?php 

		//подключение зарегистрированных в function.php скрипта и стилей (если они зарегистрированы в functions.php через wp_register_style):
		wp_enqueue_style('theo-general');

		wp_enqueue_script('theo-script');

?> -->

Тест 1