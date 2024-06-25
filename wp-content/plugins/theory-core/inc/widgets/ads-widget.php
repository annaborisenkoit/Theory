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
			'theo_title_left',
			[
				'label' => esc_html__( 'Title Left', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Want to be driver?',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$this->add_control(
			'theo_title_right',
			[
				'label' => esc_html__( 'Title Right', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Looking for a car?',
				'placeholder' => __('Type your title', 'plugin-domain'),
			]
		);

		$this->add_control(
			'theo_image_left',
			[
				'label' => esc_html__( 'Choose Image Left', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'theo_image_right',
			[
				'label' => esc_html__( 'Choose Image Right', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'theo_description_left',
			[
				'label' => esc_html__( 'Description Left', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => __('Type your description', 'plugin-domain'),
				'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
			]
		);

        $this->add_control(
			'theo_description_right',
			[
				'label' => esc_html__( 'Description Right', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => __('Type your description', 'plugin-domain'),
				'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
?>

    <div class="row mx-0">
        <div class="col-lg-6 px-0">
            <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="<?php echo esc_url($settings['theo_image_left']['url']); ?>" alt="">
                <div class="text-right">
                    <?php if($settings['theo_title_left']) { ?><h3 class="text-uppercase text-light mb-3"><?php echo esc_html($settings['theo_title_left']); ?></h3><?php } ?>
                    <p class="mb-4"><?php echo esc_html($settings['theo_description_left']); ?></p>
                    <a class="btn btn-primary py-2 px-4" href=""><?php echo esc_html__('Start Now', 'Theory'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 px-0">
            <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                <div class="text-left">
					<?php if($settings['theo_title_right']) { ?><h3 class="text-uppercase text-light mb-3"><?php echo esc_html($settings['theo_title_right']); ?></h3><?php } ?>
                    <p class="mb-4"><?php echo esc_html($settings['theo_description_right']); ?></p>
                    <a class="btn btn-primary py-2 px-4" href=""><?php echo esc_html__('Start Now', 'Theory'); ?></a>
                </div>
                <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="<?php echo esc_url($settings['theo_image_right']['url']); ?>" alt="">
            </div>
        </div>
    </div>
    
<?php 
    }
}
?>
