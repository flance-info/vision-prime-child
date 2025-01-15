<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'title', 'none' );
$label_tag       = $settings['label_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$title_tag = $settings['title_html_tag'] ?? 'b';
$bg_image        = ! empty( $settings["section_background_image"]['url'] ) ? esc_url( $settings["section_background_image"]['url'] ) : '';


?>

<div class="w-full">

	<section class="self-stretch bg-general-white flex flex-col items-center justify-start pt-[22px] pb-[89px] pl-[22px]
			pr-5 box-border gap-[40px] min-h-[520px] max-w-full text-center text-base text-general-1-primary font-subtitles-16  mq850:pt-5 mq850:pb-[58px] ">
		<div class="w-[1920px] h-[520px] relative bg-general-white hidden max-w-full"></div>
		<div class="w-full flex flex-row items-start justify-center py-0 pl-0 pr-0.5 box-border max-w-[1170px">
			<div class=" flex flex-col items-center justify-start gap-[21px] w-full">
				<div class="flex flex-row items-center justify-start relative w-full top-[58px] lg:top-[-13px]">
					<div class="h-px w-[120px] absolute !m-[0] top-[-79px] left-[calc(50%_+_0.5px)] bg-general-1-primary [transform:_rotate(90deg)] [transform-origin:0_0] z-[1]"></div>
				</div>
				<div class="self-stretch flex flex-row items-start justify-center py-0 px-5 mt-[100px] lg:mt-[34px]">
					<<?php echo esc_attr( $label_tag ); ?>
						class="relative tracking-[0.4em] leading-[36px] uppercase font-medium z-[2] label elementor-inline-editing"
						<?php echo $this->get_render_attribute_string( 'label' ); ?>>
						<?php echo esc_html( $settings['label'] ); ?>
					</<?php echo esc_attr( $label_tag ); ?>>

				</div>
				<div class="flex flex-row items-start justify-start relative text-41xl text-general-8-secondary font-heading-1-72">

				<<?php echo esc_attr( $heading_tag ); ?>
					class="m-0 w-full relative text-inherit leading-[66px] font-normal
					font-inherit inline-block z-[2] mq450:text-17xl mq450:leading-[40px]
					 mq850:text-29xl mq850:leading-[53px]
					heading elementor-inline-editing"
					<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>



				</div>
			</div>
		</div>
		<div class="w-full flex flex-col items-start justify-start gap-[49px] max-w-[1170px] text-lg text-general-1-secondary-variant font-button-dm-sans-16 mq850:gap-6">
			<div class="self-stretch flex flex-row items-start justify-center py-0 pl-5 pr-[21px] box-border max-w-full">
					<<?php echo esc_attr( $title_tag ); ?>
					class="w-full relative leading-[48px] inline-block max-w-full z-[1] mq650:leading-[35px]
					title elementor-inline-editing"
					<?php echo $this->get_render_attribute_string( 'title' ); ?>>
					<?php echo esc_html( $settings['title'] ); ?>
				</<?php echo esc_attr( $title_tag ); ?>>
			</div>
			<div class="self-stretch overflow-hidden flex flex-row items-start justify-between opacity-[0.5] gap-5 z-[1] lg:flex-wrap lg:justify-center">
				<img class="self-stretch w-[86.3px] relative max-h-full overflow-hidden shrink-0 min-h-[30px]" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/press-logo.svg">

				<img class="self-stretch w-[205.6px] relative max-h-full overflow-hidden shrink-0 min-h-[30px]" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/press-logo-1.svg">

				<img class="self-stretch w-[178.7px] relative max-h-full overflow-hidden shrink-0 min-h-[30px]" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/press-logo-2.svg">

				<img class="self-stretch w-[135px] relative max-h-full overflow-hidden shrink-0 min-h-[30px]" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/press-logo-3.svg">

				<img class="self-stretch w-[123.8px] relative max-h-full overflow-hidden shrink-0 min-h-[30px]" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/press-logo-4.svg">
			</div>
		</div>
	</section>

</div>