<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$label_tag     = $settings['label_html_tag'] ?? 'div';
$description_tag = $settings['description_html_tag'] ?? 'div';
$description_2_tag = $settings['description_2_html_tag'] ?? 'div';
$subdescription_tag = $settings['subdescription_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'h3';
$title_tag    = $settings['title_html_tag'] ?? 'h3';


?>

<div class="stm-serv">
		<div class="stm-serv-inner">
			<div class="frame-child"></div>
		</div>
		<main class="rectangle-parent">

			<div class="titleon">
				<div class="title-child"></div>

				<<?php echo esc_attr( $label_tag ); ?>
					class="scarica-gratis-il
					label elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>


				<<?php echo esc_attr( $heading_tag ); ?>
					class="manuale-dellinvestitore
					heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>

			</div>
			<div class="at-b2b-consulty-we-provide-ex-parent">

					<<?php echo esc_attr( $description_tag ); ?>
					class="at-b2b-consulty
					description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
					<?php echo esc_html( $settings['description'] ); ?>
				</<?php echo esc_attr( $description_tag ); ?>>

				<div class="frame-parent">
					<div class="our-services-include-parent">


						<<?php echo esc_attr( $title_tag ); ?>
					class="our-services-include
					title elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'title' ); ?>>
					<?php echo esc_html( $settings['title'] ); ?>
				</<?php echo esc_attr( $title_tag ); ?>>

				<?php
					$faq_items   = $settings['faq_items'];
						$total_items = count( $faq_items );
						$half_point  = ceil( $total_items / 2 );


				foreach ( $settings['faq_items'] as $index => $post ) : ?>
					<?php if ( $index >= $half_point  ) {
						continue;
					}
					$bg_image = ! empty( $post["post_image"]['url'] ) ? esc_url( $post["post_image"]['url'] ) : '';
					?>

								<div class="banking-options">
							<div class="internet-banking-3674177-wrapper">
								<img
										class="internet-banking-3674177-icon side-img"
										loading="lazy"
										alt=""
										src="<?php echo esc_url($bg_image); ?>"
								/>
							</div>
							<div class="account-setup-parent">

								<<?php echo esc_attr( $subtitle_tag ); ?> class=" subtitle
							account-setup elementor-inline-editing">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>

					<<?php echo esc_attr($subdescription_tag); ?> class="subdescription_tag we-guide-you elementor-inline-editing" >
							<?php echo $post['post_description'] ; ?>
					</<?php echo esc_attr($subdescription_tag); ?>>

							</div>
						</div>

					<?php endforeach; ?>
					</div>
					<div class="financial-options-parent">
						<?php



						foreach ( $settings['faq_items'] as $index => $post ) : ?>
					<?php if ( $index < $half_point ) {
						continue;
					}
					$bg_image = ! empty( $post["post_image"]['url'] ) ? esc_url( $post["post_image"]['url'] ) : '';
					?>

								<div class="banking-options">
							<div class="internet-banking-3674177-wrapper">
								<img
										class="internet-banking-3674177-icon side-img"
										loading="lazy"
										alt=""
										src="<?php echo esc_url($bg_image); ?>"
								/>
							</div>
							<div class="account-setup-parent">

								<<?php echo esc_attr( $subtitle_tag ); ?> class=" subtitle
							account-setup elementor-inline-editing">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>

					<<?php echo esc_attr($subdescription_tag); ?> class="subdescription_tag we-guide-you elementor-inline-editing" >
							<?php echo $post['post_description'] ; ?>
					</<?php echo esc_attr($subdescription_tag); ?>>

							</div>
						</div>

					<?php endforeach; ?>


						<<?php echo esc_attr( $description_2_tag ); ?>
					class="we-guide-you
					description_2 elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description_2' ); ?>>
					<?php echo esc_html( $settings['description_2'] ); ?>
				</<?php echo esc_attr( $description_2_tag ); ?>>

					</div>
				</div>
			</div>
		</main>
	</div>





