<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Custom_Banner_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'custom_banner';
	}

	public function get_title() {
		return __( 'Top Banner', 'vision-prime' );
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
						'default'     => __( 'Bank Account Opening in Dubai', 'vision-prime' ),
						'placeholder' => __( 'Enter label', 'vision-prime' ),
				]
		);

		$this->add_control(
				'heading',
				[
						'label'   => __( 'Heading', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Your expert solutions', 'vision-prime' ),
				]
		);


		$this->add_control(
				'section_background_image',
				[
						'label'   => __( 'Section Background Image', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/assets/images/title1@3x.webp',
						],
				]
		);

		$this->add_control(
				'description',
				[
						'label'   => __( 'Description 1', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'Streamline your corporate bank account opening in Dubai, UAE with B2B Consulty. We provide expert assistance to ensure a hassle-free banking experience, helping you establish a secure and reliable new bank account for your business in Dubai or other regions of the UAE.',
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
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h1' );
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

		include get_stylesheet_directory() . '/elementor-templates/custom-banner-template.php';


	}

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Custom_Banner_Widget() );
