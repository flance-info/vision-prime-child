<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class WO_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-wo';
	}

	public function get_title() {
		return __( 'What we offer  Section  Widget', 'vision-prime' );
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
				'label' => __( 'What we offer  Section', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'What we offer   title', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Account Setup', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'What we offer  description', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '', 'vision-prime' ),
			]
		);

		$repeater->add_control(
			'post_image',
			[
				'label'   => __( 'Image', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
								'url' => get_template_directory_uri() . '/assets/images/wyn-img.png',
						],
			]
		);
		$this->add_control(
			'faq_items',
			[
				'label'       => __( 'What we offer  Section', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title' => __( 'Account Setup',
							'vision-prime' ),
						'post_description' => __( 'We guide you through the entire process of opening a business bank account, from initial application to account activation.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/banking.png',
						],

					],
					[
						'post_title' => __( 'Documentation Assistance',
							'vision-prime' ),
						'post_description' => __( 'We help with gathering and verifying essential documents such as your Emirates ID card, residence visa, salary certificate, and proof of address (utility bills and rental agreements).',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/document.png',
						],

					],
					[
						'post_title' => __( 'Banking Solutions',
							'vision-prime' ),
						'post_description' => __( 'Access to various account types, including current accounts, savings accounts, and corporate accounts, with features like online banking and mobile banking.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/bnkin.png',
						],

					],
					[
						'post_title' => __( 'Minimum Balance Management',
							'vision-prime' ),
						'post_description' => __( 'Prevent being hit with unnecessary fees and see that you are in compliance with minimum balance requirements.',
							'vision-prime' ),
						'post_image' => [
									'url' => get_template_directory_uri() . '/assets/images/wallet.png',
						],

					],
					[
						'post_title' => __( 'Debit and Credit Facilities',
							'vision-prime' ),
						'post_description' => __( 'Obtain debit cards with Abu Dhabi commercial bank and other banking services tailored to your everyday banking needs.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/transaction.png',
						],

					],
				[
						'post_title' => __( 'Ongoing Support',
							'vision-prime' ),
						'post_description' => __( 'Help with transferring money, receiving money, and other financial transactions, all provided constantly.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/call-center.png',
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
			'heading',
			[
				'label'       => __( 'Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Expert Services for Opening a Business Bank Account', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);
		$this->add_control(
			'label',
			[
				'label'       => __( 'Label', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'What We Offer', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);
		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'default'     => __( 'At B2B Consulty, we provide expert assistance for opening a business bank account in Dubai. Our comprehensive services ensure a smooth and efficient setup process tailored to your corporate needs. We partner with top international banks in Dubai, including First Abu Dhabi Bank and Emirates NBD, to deliver a range of banking solutions.', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);
		$this->add_control(
			'description_2',
			[
				'label'       => __( 'Description 2', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'default'     => __( 'With B2B Consulty, you can confidently navigate the complexities of UAE banking and efficiently manage your business finances, ensuring a hassle-free experience from start to finish.', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Our services include:', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);

		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->section_heading();
		$this->register_blog_posts_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'label', 'Label', '.label', 'div' );
		$this->register_typography_controls( 'title', 'Title', '.title', 'h3' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'b' );
		$this->register_typography_controls( 'description_2', '2 Description', '.description_2', 'div' );
		$this->register_typography_controls( 'subdescription', 'Services Description', '.subdescription', 'div' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h3' );


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
		include get_stylesheet_directory() . '/elementor-templates/custom-wo-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \WO_Widget() );