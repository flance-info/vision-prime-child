<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class WYS_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-wys';
	}

	public function get_title() {
		return __( 'Why Choose US Section  Widget', 'vision-prime' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'vision-prime' ];
	}




	protected function section_heading() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Section headers', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Why choose Us?', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);

		$this->add_control(
				'description',
				[
						'label'   => __( 'Description 1', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'Choosing us for your company formation in the UAE and bank account opening in Dubai ensures a seamless process. Our expert team provides comprehensive services tailored to your business needs, from navigating regulatory requirements to setting up your bank account.',
								'vision-prime'
						),
				]
		);
		$this->add_control(
				'description_2',
				[
						'label'   => __( 'Description 2', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'We streamline every step, offering personalized support and efficient solutions to help you establish and manage your business with ease. Trust us for reliable, professional services that simplify your entry into the UAE market.',
								'vision-prime'
						),
				]
		);

		$this->add_control(
				'section_background_image',
				[
						'label'   => __( 'Section Background Image', 'vision-prime' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/assets/images/buildings.png',
						],
				]
		);

		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->section_heading();
		$this->register_section_styles();
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
		include get_stylesheet_directory() . '/elementor-templates/custom-wys-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \WYS_Widget() );