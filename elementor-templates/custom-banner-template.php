<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$label_tag = $settings['label_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';

$bg_image    = ! empty( $settings["section_background_image"]['url'] ) ? esc_url( $settings["section_background_image"]['url'] ) : '';

?>
<div class="w-full">

	<!-- banner !-->

	<section class="self-stretch flex flex-col items-center justify-between pt-0 px-0 pb-[110px] box-border max-w-full text-left text-base text-general-white font-heading-1-72 lg:pb-[71px] lg:box-border mq850:pb-[46px] mq850:box-border">
		<div class="w-full flex flex-row items-start justify-start relative max-w-full ml-[10%] lg:ml-[0px]">
			<div class="h-full w-full absolute !m-[0] bottom-[-110px] right-[10%] bg-general-1-primary z-[2] lg:right-[0px]"></div>
			<div class="flex-1 flex flex-col items-center justify-start pt-0 pb-[110px] box-border gap-10
			 bg-[url('/wp-content/themes/vision-prime/web/public/title1@3x.png')]

			bg-cover bg-no-repeat bg-[top] max-w-full z-[3] lg:pl-[140px] lg:pr-[140px] lg:pb-[71px]
			 lg:box-border mq450:pl-5 mq450:pr-5 mq450:pb-[46px] mq450:box-border
			  mq850:gap-10 mq850:box-border mq950:px-[20px] side-img" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div class="w-full max-w-[1170px] ml-[calc(91%-100vw)] gap-6 flex flex-col items-center lg:ml-[0px]">


					<div class="w-full flex flex-row mb-[10px] mt-[0px]">
						<div class="w-[50%] h-[120px] border-general-1-primary border-r border-solid "></div>
						<div class="w-[50%] "></div>
					</div>
					<div class="w-[1140px] flex flex-row items-start justify-center max-w-full text-center text-general-1-primary font-subtitles-16">

						<<?php echo esc_attr( $label_tag ); ?>
						class="relative tracking-[0.4em] leading-[18px] uppercase font-medium label elementor-inline-editing"
						<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
						<?php echo esc_html( $settings['label'] ); ?>
					</<?php echo esc_attr( $label_tag ); ?>>
				</div>


				<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 animate-fadeInOut w-[1140px] relative text-53xl leading-[80px]
				font-normal font-inherit text-center inline-block max-w-full
				mq450:text-24xl mq450:leading-[50px] mq850:text-39xl mq850:leading-[64px]
				heading elementor-inline-editing"
				<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
				<?php echo esc_html( $settings['heading'] ); ?>
			</<?php echo esc_attr( $heading_tag ); ?>>

			<div class="w-[1140px] flex flex-row items-center justify-center max-w-full text-5xl font-button-dm-sans-16">

				<<?php echo esc_attr( $description_tag ); ?> class="m-0 relative text-inherit tracking-[-0.01em] items-center text-center
				leading-[36px] font-bold font-inherit mq450:text-lgi mq450:leading-[28px] description
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
				<?php echo wp_kses_post( $settings['description'] ); ?>
			</<?php echo esc_attr( $description_tag ); ?>>
		</div>


		<div class="w-[1139.5px] flex flex-row items-start justify-center max-w-full">
			<button onclick="openModal()" class="cursor-pointer border-transparent py-[21px] px-10 bg-general-1-primary overflow-hidden flex flex-row items-start justify-start
						 whitespace-nowrap hover:bg-elements-neutral-4 hover:text-general-1-primary hover:border-general-1-primary border-solid border-[2px]
						 text-general-white
						 					hover:text-general-1-primary
							mq650:px-[15px] mq650:pl-[15px]">
				<div class="relative text-base tracking-[0.4em] leading-[18px] uppercase font-medium hover:border-general-1-primary
							font-subtitles-16 text-center
							 hover:text-general-1-primary
							 whitespace-nowrap
								mq650:text-base mq650:whitespace-normal
							mq450:tracking-[0.2em]">
					<?php echo esc_html__('Free Consultation', 'vision-prime'); ?>
				</div>
			</button>

		</div>
</div>
</div>

</div>
</section>


</div>