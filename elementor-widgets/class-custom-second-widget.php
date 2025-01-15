<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Custom_Second_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'custom_second';
	}

	public function get_title() {
		return __( 'Open second widget', 'vision-prime' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'vision-prime' ];
	}

	public function get_script_depends() {
		return [ ];
	}

	protected function _register_content_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'vision-prime' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'label',
				[
						'label'       => __( 'Label', 'vision-prime' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Open', 'vision-prime' ),
						'placeholder' => __( 'Enter label', 'vision-prime' ),
				]
		);

		$this->add_control(
				'heading',
				[
						'label'   => __( 'Heading', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'A Business Bank Account in Dubai, UAE', 'vision-prime' ),
				]
		);


		$this->add_control(
				'section_background_image',
				[
						'label'   => __( 'Section Background Image', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/assets/images/roads.png',
						],
				]
		);

		$this->add_control(
				'description',
				[
						'label'   => __( 'Description 1', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'Opening a business bank account in Dubai is a crucial step for companies aiming to operate successfully in the UAE. B2B Consulty specializes in assisting both residents and non-residents to open bank account in Dubai and provides business banking solutions, including everyday banking personal banking, and savings accounts.

You can be assured that your account is set up to the right minimum balance and is tailored specifically to your needs.

Our services are designed to support international clients seeking a non-resident bank account, offering secure and efficient access to the UAE’s financial system through online and mobile banking.

With B2B Consulty, you can confidently manage your finances and expand your business in Dubai, taking full advantage of the opportunities in the UAE’s thriving market.',
								'vision-prime'
						),
				]
		);


		$this->end_controls_section();
	}
	protected function _register_controls() {
		$this->_register_content_controls();
		$this->register_section_styles() ;
		$this->register_typography_controls( 'label', 'Label', '.label', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
		$this->register_universal_style_controls(
			'side_img',                   // Section ID
			'Side Image',                 // Section Label
			'.side-img',                  // CSS Selector
			0,                            // Default Left Position
			100                           // Default Width in %
		);

	}
	protected function render() {
		$settings = $this->get_settings_for_display();

		include get_stylesheet_directory() . '/elementor-templates/custom-second-template.php';


	}

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Custom_Second_Widget() );
