<?php
class Elementor_Cars_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'theo_cars';
	}

	public function get_title() {
		return esc_html__( 'Theory Cars', 'theory-core' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'oembed', 'url', 'link' ];
	}

	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-oembed-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'theo_title_one',
			[
				'label' => esc_html__( 'Title One', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$this->add_control(
			'theo_title_two',
			[
				'label' => esc_html__( 'Title Two', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

        $this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
?>

    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"><?php echo $settings['theo_title_one']; ?></h1>
            <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['theo_title_two']; ?></h1>
            <div class="row">

            <?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$cars = new WP_Query(array('post_type' => 'car', 'posts_per_page' => 3, 'paged' => $paged));

				if($cars->have_posts()) : while($cars->have_posts()) : $cars->the_post(); ?>

					<?php get_template_part('partials/content', 'car'); ?> 

				<?php endwhile; ?>
					<div class="pagination">
						<?php theory_paginate($cars) ?>
					</div>
				<?php
				else : ?>

					<?php get_template_part('partials/content', 'none'); ?> 

				<?php endif; 
				wp_reset_postdata();
				?>

            </div>
        </div>
    </div>
    <!-- Rent A Car End -->

<?php 
    }
}
?>
