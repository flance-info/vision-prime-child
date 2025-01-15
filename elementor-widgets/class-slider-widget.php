<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Slider_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-slider';
	}

	public function get_title() {
		return __( 'Slider Testimonials Section  Widget', 'vision-prime' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'vision-prime' ];
	}


	protected function register_blog_posts_controls() {
		$this->start_controls_section(
			'blog_posts_section',
			[
				'label' => __( 'Slider Testimonials Section', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Slider Testimonials   title', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'why Reason', 'vision-prime' ),
				'placeholder' => __( 'why Reason', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Testimonial', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_author',
			[
				'label'   => __( 'Author', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_author_position',
			[
				'label'   => __( 'Author Position', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_author_image',
			[
				'label'   => __( 'Author Image', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
			]
		);
		$this->add_control(
			'faq_items',
			[
				'label'       => __( 'Testimonials', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_description' => __( 'B2B Consulty made it incredibly easy to open a bank account in Dubai. Their efficient process and expert guidance simplified everything, and I now have a fully functional account for my business.',
							'vision-prime' ),
						'post_author' => __( 'Emma Johnson', 'vision-prime' ),
						'post_author_position' => __( 'Tech Startup CEO','vision-prime' ),

						'post_author_image' => [
								'url' => get_template_directory_uri() . '/assets/images/emma.png',
						],
					],
					[
						'post_description' => __( 'B2B Consulty made it incredibly easy to open a bank account in Dubai. Their efficient process and expert guidance simplified everything, and I now have a fully functional account for my business.',
							'vision-prime' ),
						'post_author' => __( 'Emma Johnson', 'vision-prime' ),
						'post_author_position' => __( 'Tech Startup CEO','vision-prime' ),

						'post_author_image' => [
								'url' => get_template_directory_uri() . '/assets/images/emma.png',
						],
					],

				],
				'title_field' => '{{{ post_author }}}',
			]
		);
		$this->end_controls_section();
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
			'label',
			[
				'label'       => __( 'Label', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Testimonials', 'vision-prime' ),
				'placeholder' => __( 'Enter Label', 'vision-prime' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Join Our Happy Customers', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);
		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Join the growing list of customers achieving amazing results with our business setup consultants.', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);
		$this->add_control(
			'sub_heading_1',
			[
				'label'       => __( 'Sub Heading 1', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Incredibly easy', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);
		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->section_heading();
		$this->register_blog_posts_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'label', 'Label', '.label', 'p' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'sub_heading', 'Sub Heading', '.sub_heading', 'div' );
		$this->register_typography_controls( 'sub_heading_1', 'Sub Heading 1', '.sub_heading_1', 'div' );



		$this->register_typography_controls( 'post_author', 'post_author', '.post_author', 'h3' );
		$this->register_typography_controls( 'post_author_position', 'post_author_position', '.post_author_position', 'div' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'h3' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-slider-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Slider_Widget() );