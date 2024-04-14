<?php

function theory_child_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'New Pages Sidebar', 'theory' ),
			'id'            => 'newsidebar',
			'description'   => esc_html__( 'Appear as Sidebar on New Pages', 'theory' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'theory_child_widgets_init' );