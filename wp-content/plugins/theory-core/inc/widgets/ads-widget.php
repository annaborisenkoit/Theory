<?php
class Elementor_Ads_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'theo_ads';
	}

	public function get_title() {
		return esc_html__( 'Theory Ads', 'theory-core' );
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
				'label' => esc_html__( 'Title', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Welcome To ',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$this->add_control(
			'theo_title_two',
			[
				'label' => esc_html__( 'Title Two', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Royal Cars',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'theo_description',
			[
				'label' => esc_html__( 'Title Two', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => __('Type your title', 'plugin-domain'),
				'default' => '111Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.',
			]
		);
		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		//echo $settings['theo_title'];

		//echo $settings['image']['url'];
?>

            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
    
<?php 
    
    }

}
