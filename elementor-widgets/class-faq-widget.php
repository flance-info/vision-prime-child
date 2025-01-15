<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FAQ_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-faq';
	}

	public function get_title() {
		return __( 'FAQ Section  Widget', 'vision-prime' );
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
				'label' => __( 'FAQs', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Question', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Question', 'vision-prime' ),
				'placeholder' => __( 'Qestion', 'vision-prime' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Answer', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Answer', 'vision-prime' ),
			]
		);
		$this->add_control(
			'faq_items',
			[
				'label'       => __( 'FAQs', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title'       => __( 'What is a mainland license in the UAE?', 'vision-prime' ),
						'post_description' => __( 'A mainland license in the UAE allows businesses to operate within the local market and engage in a wide range of activities. It is issued by the Department of Economic Development (DED) and provides broader operational freedom compared to free zones.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'What is the difference between a mainland and a free zone company in the UAE?', 'vision-prime' ),
						'post_description' => __( 'No, a business setup in Dubai, Mainland, typically requires a local sponsor or service agent, especially for certain business structures. This local partner helps navigate regulations and provides essential support for legal compliance.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'How is an LLC formed in the UAE?', 'vision-prime' ),
						'post_description' => __( 'Mainland companies can operate across the UAE and directly engage with the local market, while free zone companies are restricted to operating within their specific free zone and require a local distributor to engage in the UAE market.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'Can I have 100% ownership in my business setup in Dubai, Mainland?', 'vision-prime' ),
						'post_description' => __( 'Yes, you can have 100% ownership of your business setup in Dubai, Mainland, if you establish it as a professional service company. For other business types, a local sponsor may be required, but 100% ownership is possible in certain cases.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'How much tax do I pay on a Mainland company in Dubai?', 'vision-prime' ),
						'post_description' => __( 'In Dubai, mainland companies benefit from low corporate tax rates. Typically, there is no corporate tax on most business activities unless the company is engaged in oil and gas or foreign banking. Companies need a trade license and can enjoy tax advantages with proper business setup services. For detailed tax obligations, consult with experts during your Dubai mainland company formation process.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'Are there ownership restrictions on Mainland businesses set up in Dubai?', 'vision-prime' ),
						'post_description' => __( 'In the Dubai Mainland business setup, ownership restrictions depend on the company type. For a limited liability company (LLC), a local sponsor may hold 51% of shares, but full ownership is possible for professional services. Free-zone businesses, however, allow 100% foreign ownership without local sponsors.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'Are there any restrictions on the number of visas for a Mainland business setup in Dubai?', 'vision-prime' ),
						'post_description' => __( 'Yes, there are restrictions on the number of visas for a Mainland business setup in Dubai. The number of visas depends on the size of the office space and the companys trade license. Business setup services can provide a detailed analysis based on your business activities and physical address.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'How long does it take to set up a Mainland company in Dubai?', 'vision-prime' ),
						'post_description' => __( 'Setting up a Mainland company in Dubai typically takes 2 to 4 weeks, depending on the complexity of your business activities and the efficiency of obtaining approvals. This timeframe includes processing the trade license, office space setup, and bank account arrangements.',
							'vision-prime' ),
					],
					[
						'post_title'       => __( 'Can I set up a Mainland company without a physical office space?', 'vision-prime' ),
						'post_description' => __( 'For a Mainland company setup in Dubai, a physical office space is generally required. However, you may use a virtual office address as part of your business setup services if it meets specific requirements. Consult with experts to ensure compliance with Dubai mainland license regulations.',
							'vision-prime' ),
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
				'default'     => __( 'Questions & Answers', 'vision-prime' ),
				'placeholder' => __( 'Enter Label', 'vision-prime' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Frequently Asked Questions', 'vision-prime' ),
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
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h3' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-faq-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \FAQ_Widget() );