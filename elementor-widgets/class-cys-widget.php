<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class CYS_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-cys';
	}

	public function get_title() {
		return __( 'Why Should You Section  Widget', 'vision-prime' );
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
				'label' => __( 'Why should y Section', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Why should y  title', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Seamless New Bank Account Opening', 'vision-prime' ),
				'placeholder' => __( 'Enter', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Why should y description', 'vision-prime' ),
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
				'label'       => __( 'Why should y Section', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title' => __( 'Seamless New Bank Account Opening',
							'vision-prime' ),
						'post_description' => __( 'Our service ensures a smooth new bank account opening process. We handle all necessary documentation, including utility bills, Emirates ID, and rental agreements, allowing you to focus on your business. Such an approach ensures that there are fewer delays and that the possibility of issues during setup is lowered.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/web/public/iconsiconly-blacklightcontent-edit.svg',
						],

					],
					[
						'post_title' => __( 'Efficient Management of Current Accounts in the UAE',
							'vision-prime' ),
						'post_description' => __( 'We facilitate the management of your current account in UAE, providing access to essential banking services. You can enjoy easy online banking, mobile banking, and debit card facilities with minimum balance requirements. We help you deal efficiently with daily transactions and personal savings.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/web/public/iconsiconly-blacklightbank.svg',
						],

					],
					[
						'post_title' => __( 'Tailored Business Account Solutions',
							'vision-prime' ),
						'post_description' => __( 'Our service offers tailored business account solutions, ensuring your needs are met with the right account type. Whether you require a corporate account or a specialized business account, we help you navigate the application process and set up accounts that fit your financial strategy.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/web/public/iconsiconly-blacklightwallet.svg',
						],

					],
					[
						'post_title' => __( 'Support for Non-Residents and International Clients',
							'vision-prime' ),
						'post_description' => __( 'We specialize in opening bank accounts for non-residents and international clients. Our expertise ensures that international banking needs are met, providing access to UAE bank accounts with minimal hassle. We assist with cross-border transactions and local banking requirements compliance.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/people.png',
						],

					],
					[
						'post_title' => __( 'Expert Corporate Banking Services',
							'vision-prime' ),
						'post_description' => __( 'Benefit from our expert corporate banking services designed for businesses of all sizes. We assist with setting up corporate accounts, managing financial transactions, and accessing specialized services. Our support ensures that your business banking aligns with your corporate goals and operational needs.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/web/public/iconsiconly-blacklightwork.svg',
						],

					],
				[
						'post_title' => __( 'Access to Emirates Banks',
							'vision-prime' ),
						'post_description' => __( 'Our service provides access to leading Emirates banks, including national banks and other major financial institutions. This ensures you receive top-notch banking services, including debit cards, online banking, and personalized support from bank officers tailored to your specific needs.',
							'vision-prime' ),
						'post_image' => [
								'url' => get_template_directory_uri() . '/assets/images/tree.png',
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
				'default'     => __( 'Choose Our Service for Bank Opening in Dubai?', 'vision-prime' ),
				'placeholder' => __( 'Enter heading', 'vision-prime' ),
			]
		);
$this->add_control(
			'label',
			[
				'label'       => __( 'Label', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Why Should You', 'vision-prime' ),
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
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-cys-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \CYS_Widget() );