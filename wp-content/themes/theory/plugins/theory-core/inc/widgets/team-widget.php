<?php
class Elementor_Team_Widget extends \Elementor\Widget_Base {
    public function get_script_depends(){
        if(\Elementor\Plugin::$instance->preview->is_preview_mode()){
            wp_register_script('theo-team', plugins_url('/js/theo-team.js', __FILE__), ['elementor-frontend'], '1.0', true);
            return ['theo-team'];
        }
        return [];
    }

	public function get_name() {
		return 'theo_team';
	}

	public function get_title() {
		return esc_html__( 'Theory Team', 'theory-core' );
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

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'theo_title_one',
			[
				'label' => esc_html__( 'Title One', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$repeater->add_control(
			'theo_title_two',
			[
				'label' => esc_html__( 'Title Two', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

        $repeater->add_control(
			'theo_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'slider',
			[
				'label' => esc_html__( 'Slider', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ theo_title_one }}}',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
?>
		<div class="container-fluid py-5">
			<div class="container py-5">
				<h1 class="display-1 text-primary text-center">04</h1>
				<h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
				<div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
				<?php  
				if ( $settings['slider'] ) {
					foreach (  $settings['slider'] as $index => $item ) { ?>
						<div class="team-item">
							<img class="img-fluid w-100" src="<?php echo esc_url($item['theo_image']['url']); ?>" alt="">
							<div class="position-relative py-4">
								<h4 class="text-uppercase"><?php echo esc_html($item['theo_title_one']); ?></h4>
								<p class="m-0"><?php echo esc_html($item['theo_title_two']); ?></p>
								<div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
									<a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
									<a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
									<a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>                
					<?php }
				}
				?>
				</div>
			</div>
		</div>
<?php 
	}
}
?>
