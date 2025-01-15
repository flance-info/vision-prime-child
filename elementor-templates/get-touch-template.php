<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'button', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$button_tag      = $settings['button_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';
$bg_image        = ! empty( $settings["section_background_image"]['url'] ) ? esc_url( $settings["section_background_image"]['url'] ) : '';
?>

<div class="w-full">

	<!-- banner !-->

	<section class="self-stretch flex flex-col items-center justify-between pt-0 px-0 box-border
	max-w-full text-left text-base text-general-white font-heading-1-72
	  lg:box-border mq850:pb-[46px] mq850:box-border">
		<div class="w-full flex flex-row items-start justify-start relative max-w-full lg:ml-[0px] stm-gt" style="">
			<div class="flex-1 flex flex-col items-center justify-start pt-0 box-border gap-10
			bg-cover bg-no-repeat bg-[top] max-w-full z-[3] lg:pl-[140px] lg:pr-[140px] lg:pb-[71px]
			 lg:box-border mq450:pl-5 mq450:pr-5 mq450:pb-[46px] mq450:box-border
			  mq850:gap-10 mq850:box-border mq950:px-[20px] side-img" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div class="w-full max-w-[1170px]  gap-6 flex flex-col items-center lg:ml-[0px] stm-g-int" style="m">
							<div class="flex flex-row w-full max-w-[1170px] py-[54px] px-[54px] relative z-10 mr-[-2px] justify-between  mq925:flex-col">
					<div class=" flex flex-col items-start justify-start gap-5  mq1500:flex-1 ">

						<<?php echo esc_attr( $heading_tag ); ?>
				class="relative leading-[22px] uppercase 	heading elementor-inline-editing"
				<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
				<?php echo esc_html( $settings['heading'] ); ?>
			</<?php echo esc_attr( $heading_tag ); ?>>



					<<?php echo esc_attr( $description_tag ); ?> class="m-0 self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-bold font-inherit mq450:text-lgi mq450:leading-[24px] description
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
				<?php echo wp_kses_post( $settings['description'] ); ?>
			</<?php echo esc_attr( $description_tag ); ?>>
					</div>
					<div class="flex flex-col items-start justify-start pt-9 px-0 pb-0">
						<button onclick="openModal()" class="cursor-pointer border-general-white border-[2px]
						border-solid py-[18px] px-[38px] bg-[transparent] overflow-hidden
						flex flex-row items-start justify-start text-general-white hover:border-custom-gold hover:border-custom-gold
						hover:text-custom-gold hover:bg-elements-neutral-4">
							<<?php echo esc_attr( $button_tag ); ?> class="relative text-base tracking-[0.4em]
							leading-[18px] uppercase font-medium font-subtitles-16  text-center whitespace-nowrap
						button 	elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'button' ); ?>>
				<?php echo wp_kses_post( $settings['button'] ); ?>
			</<?php echo esc_attr( $button_tag ); ?>>
						</button>
					</div>
				</div>

				</div>


			</div>
		</div>

	</section>


</div>