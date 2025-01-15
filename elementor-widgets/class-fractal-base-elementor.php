<?php

namespace Elementor\Basic;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

abstract class FractalBaseElementor extends \Elementor\Widget_Base {

	protected function register_typography_controls( $name, $label, $selector, $default_tag = 'div' ) {
		$this->start_controls_section(
			$name . '_section_styles',
			[
				'label' => sprintf( __( '%s Styles', 'vision-prime' ), $label ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// Control for selecting the HTML tag (H1, H2, H3, etc.)
		$this->add_control(
			$name . '_html_tag',
			[
				'label'   => sprintf( __( '%s HTML Tag', 'vision-prime' ), $label ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'h1'   => __( 'H1', 'vision-prime' ),
					'h2'   => __( 'H2', 'vision-prime' ),
					'h3'   => __( 'H3', 'vision-prime' ),
					'h4'   => __( 'H4', 'vision-prime' ),
					'h5'   => __( 'H5', 'vision-prime' ),
					'h6'   => __( 'H6', 'vision-prime' ),
					'div'  => __( 'Div', 'vision-prime' ),
					'span' => __( 'Span', 'vision-prime' ),
					'p'    => __( 'Paragraph', 'vision-prime' ),
					'a'    => __( 'Paragraph', 'vision-prime' ),
				],
				'default' => $default_tag, // Set default tag
			]
		);
		// Typography control
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => $name . '_typography',
				'label'    => sprintf( __( '%s Typography', 'vision-prime' ), $label ),
				'selector' => '{{WRAPPER}} ' . $selector,
			]
		);
		// Color control
		$this->add_control(
			$name . '_color',
			[
				'label'     => sprintf( __( '%s Color', 'vision-prime' ), $label ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . $selector => 'color: {{VALUE}};',
				],
			]
		);
		// Divider (optional)
		$this->add_control(
			'separator_' . $name,
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// Background color control (optional)
		$this->add_control(
			$name . '_background_color',
			[
				'label'     => sprintf( __( '%s Background Color', 'vision-prime' ), $label ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . $selector => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . $selector => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'separators_' . $name,
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_responsive_control(
			$name . '_text_align',
			[
				'label'     => __( 'Text Alignment', 'vision-prime' ),
				'type'      => \Elementor\Controls_Manager::CHOOSE,
				'options'   => [
					'left'    => [
						'title' => __( 'Left', 'vision-prime' ),
						'icon'  => 'eicon-text-align-left',
					],
					'center'  => [
						'title' => __( 'Center', 'vision-prime' ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'   => [
						'title' => __( 'Right', 'vision-prime' ),
						'icon'  => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', 'vision-prime' ),
						'icon'  => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} ' . $selector => 'text-align: {{VALUE}};',
				],
				'default'   => 'left',
			]
		);
		// Margin control
		$this->add_responsive_control(
			$name . '_margin',
			[
				'label'      => __( 'Margin', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} ' . $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// Padding control
		$this->add_responsive_control(
			$name . '_padding',
			[
				'label'      => __( 'Padding', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} ' . $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			$name . '_width',
			[
				'label'      => __( 'Width', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 50,
						'max' => 1200,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} ' . $selector => 'width: {{SIZE}}{{UNIT}};',
				],
				'default'    => [
					'unit' => '%',
					'size' => '',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_icon_arrow_controls(
		$default_icon_image_url,
		$default_hover_icon_image_url,
		$default_label = 'Get direction',
	) {
		$this->start_controls_section(
			'content_section_icon',
			[
				'label' => __( 'Arrow Icons', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Control for the arrow icon label with default
		$this->add_control(
			'icon_label',
			[
				'label'       => __( 'Arrow Icon Label', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( $default_label, 'vision-prime' ),
				'label_block' => true,
			]
		);
		// Control for choosing between clickable URL or popup form
		$this->add_control(
			'icon_type',
			[
				'label'        => __( 'Choose Clickable URL or POPUP Form', 'vision-prime' ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => __( 'URL', 'vision-prime' ),
				'label_off'    => __( 'Popup Form', 'vision-prime' ),
				'return_value' => 'url',
				'default'      => 'url',
				'description'  => __( 'Switch between a Popup Form or a URL for icon click.', 'vision-prime' ),
			]
		);
		$this->add_control(
			'icon_url',
			[
				'label'       => __( 'Icon URL', 'vision-prime' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'vision-prime' ),
				'default'     => [
					'url'         => '',
					'is_external' => true,
					'nofollow'    => true,
				],
				'condition'   => [
					'icon_type' => 'url', // Display this field only when 'icon_type' is set to 'url'
				],
			]
		);
		// Control for the default arrow icon image
		$this->add_control(
			'icon_image',
			[
				'label'   => __( 'Arrow Icon Image', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => $default_icon_image_url,
				],
			]
		);
		// Control for the arrow icon hover image
		$this->add_control(
			'icon_image_moved',
			[
				'label'   => __( 'Arrow Icon Hovered Image', 'vision-prime' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => $default_hover_icon_image_url,
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_section_styles() {
		$this->start_controls_section(
			'Section',
			[
				'label' => __( 'Section Styles', 'vision-prime' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'section_background_color',
			[
				'label'     => sprintf( __( '%s Background Color', 'vision-prime' ), 'Section' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . '.section_background_color' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . '.section_background_color' => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sblock',
			[
				'label'     => __( 'Section Box Background Color', 'vision-prime' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . '.sblock' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . '.sblock' => 'background: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_universal_style_controls( $section_id, $section_label, $class_selector, $default_position = 0, $default_width = 100 ) {
		$this->start_controls_section(
			$section_id . '_style_section',
			[
				'label' => sprintf( __( 'Style: %s', 'vision-prime' ), $section_label ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// Left Position Control
		// Margin Control
		$this->add_responsive_control(
			$section_id . '_margin',
			[
				'label'      => __( 'Margin', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// Padding Control
		$this->add_responsive_control(
			$section_id . '_padding',
			[
				'label'      => __( 'Padding', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// heigth Control
		$this->add_responsive_control(
			$section_id . '_width',
			[
				'label'      => __( 'Width', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'width: {{SIZE}}{{UNIT}};',
				],
				'default'    => [
					'unit' => '%',
					'size' => $default_width,
				],
			]
		);
		$this->add_responsive_control(
			$section_id . '_max_width',
			[
				'label'      => __( 'Max Width', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Width Control
		$this->add_responsive_control(
			$section_id . '_height',
			[
				'label'      => __( 'Height', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'height: {{SIZE}}{{UNIT}};',
				],
				'default'    => [
					'unit' => '%',
					'size' => '',
				],
			]
		);
		$this->add_responsive_control(
			$section_id . '_max_height',
			[
				'label'      => __( 'Max Width', 'vision-prime' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'max-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function get_link_attributes( $icon_type, $post_link ) {
		if ( $icon_type !== 'url' ) {
			echo 'onclick="openModal(event)"';
		} else {
			echo 'href="' . esc_url( $post_link ) . '"';
		}
	}
}
