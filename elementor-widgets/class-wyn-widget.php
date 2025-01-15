<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class WYN_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-wyn';
	}

	public function get_title() {
		return __( 'Why Y need Section  Widget', 'vision-prime' );
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
				'label' => __( 'Why Y need section', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'why Reason  title', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'why Reason', 'vision-prime' ),
				'placeholder' => __( 'why Reason', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_sub_title',
			[
				'label'       => __( 'why Reason subtitle ', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'why Reason', 'vision-prime' ),
				'placeholder' => __( 'why Reason', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Answer Reason', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Answer Reason', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_image',
			[
				'label'   => __( 'Answer Reason Image', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
			]
		);
		$this->add_control(
			'faq_items',
			[
				'label'       => __( 'why Reason', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title'       => __( '1. Streamlined Business Operations in the UAE', 'vision-prime' ),
						'post_description' => __( 'Opening a bank account in the UAE is essential for smooth business operations. This allows for handling daily banking needs of currency transfer, receiving payment, saving, etc. — all equally necessary for daily and company growth.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
						'post_sub_title'       => __( 'Step 1: Streamlined Business Operations in the UAE', 'vision-prime' ),

					],
					[
						'post_title'       => __( '2. Access to Emirates and International Banking Services', 'vision-prime' ),
						'post_sub_title'       => __( 'Step 2: Access to Emirates and International Banking Services', 'vision-prime' ),
						'post_description' => __( 'Opening a bank account in the UAE is essential for smooth business operations. This allows for handling daily banking needs of currency transfer, receiving payment, saving, etc. — all equally necessary for daily and company growth.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
					],
					[
						'post_title'       => __( '3. Non-resident Banking Solutions', 'vision-prime' ),
						'post_sub_title'       => __( 'Step 3: Non-resident Banking Solutions', 'vision-prime' ),
						'post_description' => __( 'Opening a bank account in the UAE is essential for smooth business operations. This allows for handling daily banking needs of currency transfer, receiving payment, saving, etc. — all equally necessary for daily and company growth.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
					],
					[
						'post_title'       => __( '4. Meeting Bank Account Opening Requirements', 'vision-prime' ),
						'post_sub_title'       => __( 'Step 4: Meeting Bank Account Opening Requirements', 'vision-prime' ),
						'post_description' => __( 'Opening a bank account in the UAE is essential for smooth business operations. This allows for handling daily banking needs of currency transfer, receiving payment, saving, etc. — all equally necessary for daily and company growth.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
					],
					[
						'post_title'       => __( '5. Efficient Banking for Companies in Dubai', 'vision-prime' ),
						'post_sub_title'       => __( 'Step 5: Efficient Banking for Companies in Dubai', 'vision-prime' ),
						'post_description' => __( 'Opening a bank account in the UAE is essential for smooth business operations. This allows for handling daily banking needs of currency transfer, receiving payment, saving, etc. — all equally necessary for daily and company growth.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
					],

				],
				'title_field' => '{{{ post_title }}}',
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
				'default'     => __( 'Why You Need to', 'vision-prime' ),
				'placeholder' => __( 'Enter Label', 'vision-prime' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Open a Bank Account in the UAE', 'vision-prime' ),
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
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h4' );
		$this->register_typography_controls( 'title', 'Title', '.title', 'h6' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-wyn-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \WYN_Widget() );