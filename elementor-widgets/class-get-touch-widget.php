<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Get_Touch_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'custom_get_touch';
	}

	public function get_title() {
		return __( 'Get Touch', 'vision-prime' );
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
				'heading',
				[
						'label'   => __( 'Heading', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Ready to Set Up Your Business?', 'vision-prime' ),
				]
		);
		$this->add_control(
				'description',
				[
						'label'   => __( 'Description', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'Partner with us for a seamless business setup in Dubai. We offer expert guidance and comprehensive services to streamline your bank account opening process. Let us handle the details so you can focus on growing your business in the UAE. Get started today!',
								'vision-prime'
						),
				]
		);
		$this->add_control(
				'button',
				[
						'label'       => __( 'Button text', 'vision-prime' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Contact us', 'vision-prime' ),
						'placeholder' => __( 'Enter', 'vision-prime' ),
				]
		);
		$this->add_control(
				'section_background_image',
				[
						'label'   => __( 'Section Background Image', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/assets/images/sidebar.png',
						],
				]
		);




		$this->end_controls_section();
	}
	protected function _register_controls() {
		$this->_register_content_controls();
		$this->register_section_styles() ;
		$this->register_typography_controls( 'button', 'Button text', '.button', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'b' );
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

		include get_stylesheet_directory() . '/elementor-templates/get-touch-template.php';


	}

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Get_Touch_Widget() );
