<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Custom_Brands_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'custom_brands';
	}

	public function get_title() {
		return __( 'Brands', 'vision-prime' );
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
						'default'     => __( 'Companies', 'vision-prime' ),
						'placeholder' => __( 'Enter label', 'vision-prime' ),
				]
		);

		$this->add_control(
				'heading',
				[
						'label'   => __( 'Heading', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'We Work with', 'vision-prime' ),
				]
		);


		$this->add_control(
				'title',
				[
						'label'   => __( 'title', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __(
								'We partner with renowned financial institutions in Dubai to offer you the best banking services and support.',
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
		$this->register_typography_controls( 'title', 'title', '.title', 'b' );
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

		include get_stylesheet_directory() . '/elementor-templates/custom-brands-template.php';


	}

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Custom_Brands_Widget() );
