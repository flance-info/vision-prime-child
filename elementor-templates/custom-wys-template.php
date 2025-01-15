<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';
$bg_image    = ! empty( $settings["section_background_image"]['url'] ) ? esc_url( $settings["section_background_image"]['url'] ) : '';


?>
<div class="w-full">

<section class="self-stretch flex flex-col items-center justify-between pt-0 px-0

	 box-border max-w-full text-left text-base text-general-white font-heading-1-72
	 lg:pb-[71px]
	  lg:box-border mq850:pb-[46px] mq850:box-border">
	<div class="w-full flex flex-row items-start justify-start relative max-w-full ml-[10%] lg:ml-[0px]">


		<div class="flex-1 flex flex-col items-center justify-start pt-0 pb-[110px] box-border gap-10
		 bg-cover bg-no-repeat bg-[top] max-w-full z-[3] mq1170:px-[20px] lg:pb-[71px]
		  lg:box-border  mq450:pb-[46px] mq450:box-border mq850:gap-10 mq850:box-border side-img" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');" >
			<div class="w-full max-w-[1170px] ml-[calc(91%-100vw)] gap-6 flex flex-col items-center lg:ml-[0px]">


				<div class="w-full flex flex-row mb-[10px] mt-[0px]">
					<div class="w-[50%] h-[120px] border-general-1-primary border-r border-solid "></div>
					<div class="w-[50%] "></div>
				</div>


				<<?php echo esc_attr( $heading_tag ); ?>
					class="m-0 animate-fadeInOut w-[1140px] relative text-53xl
				leading-[80px] font-normal font-inherit text-center inline-block
				max-w-full mq450:text-24xl mq450:leading-[50px] mq850:text-39xl mq850:leading-[64px]
					heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>


				<div class="w-[1140px] flex flex-row items-start justify-center flex-wrap content-start gap-[30px] max-w-full font-body-b3-merriweather-14">

					<<?php echo esc_attr( $description_tag ); ?>
					class="flex-1 relative leading-[26px] inline-block min-w-[361px] max-w-full lg:min-w-full
					description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
					<?php echo  $settings['description'] ; ?>
				</<?php echo esc_attr( $description_tag ); ?>>


				<<?php echo esc_attr( $description_tag ); ?>
					class="flex-1 relative leading-[26px] inline-block min-w-[361px] max-w-full lg:min-w-full
					description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
					<?php echo  $settings['description_2']  ?>
				</<?php echo esc_attr( $description_tag ); ?>>
				</div>
			</div>
		</div>

	</div>
</section>


</div>



