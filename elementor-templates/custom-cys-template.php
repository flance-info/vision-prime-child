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
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'h3';

?>

<div class="w-full">
    <section class="self-stretch flex flex-col items-start justify-start max-w-full text-center text-base text-general-white font-subtitles-16">

		<div class="self-stretch bg-elements-neutral-4 flex flex-col items-center justify-start  px-5
			pb-[100px] box-border gap-[100px] max-w-full z-[6] text-general-1-primary lg:gap-[89px]
			lg:pb-[65px] lg:box-border mq450:gap-[22px] mq850:gap-[45px] mq850:pb-[42px] mq850:box-border mq950:px-[0px]">

			<div class="max-w-[1170px] w-full flex flex-col items-center justify-center py-0 pl-px pr-0 box-border">
				<div class="h-[120px] relative block left-[60px]   ">
					<div class="h-px w-[120px] !m-[0] top-[-79px]  bg-general-1-primary [transform:_rotate(90deg)] [transform-origin:0_0]"></div>
				</div>
				<div class=" flex flex-col items-center justify-start gap-[21px] max-w-full mt-[20px] mq950:px-[20px]">
					<div class="self-stretch flex flex-row items-center justify-center py-0 px-5">

						<<?php echo esc_attr( $label_tag ); ?>
					class="relative tracking-[0.4em] leading-[36px] uppercase font-medium z-[2]
					label elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>


					</div>
					<div class="flex flex-row items-center justify-center relative text-41xl text-general-1-secondary font-heading-1-72">


						<<?php echo esc_attr( $heading_tag ); ?>
					class="m-0 max-w-[1000px] w-full relative text-inherit leading-[66px] font-normal font-inherit
						 inline-block z-[2] mq450:text-17xl mq450:leading-[40px]
						 mq450:w-auto mq850:text-29xl mq850:leading-[53px] break-words
					heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>



					</div>

				</div>
			</div>
			<div class="w-[1170px] flex flex-row items-start justify-start flex-wrap content-start gap-x-[30px]
			 gap-y-[28.7px] min-h-[830px] max-w-full text-left text-lg text-general-1-secondary
			 font-button-dm-sans-16 mq1170:px-[20px] mq450:px-[0px]">
				<?php foreach ( $settings['faq_items'] as $index => $post ) : ?>
					<div class="h-[388px] mq450:h-[300px]  mq950:h-[330px]    flex-1 overflow-hidden hover:bg-general-white cursor-pointer flex flex-col items-start justify-start  p-[25px] mq950:p-[20px]  box-border gap-[30px]  mq450:gap-[15px]  mq450:pt-[20px] mq450:pb-5 mq450:box-border stm-w  mq950:p-[20px]">

						<?php $bg_image    = ! empty( $post["post_image"]['url'] ) ? esc_url( $post["post_image"]['url'] ) : ''; ?>


						<img decoding="async" class="w-12 h-12 relative" loading="lazy" alt="" src="<?php echo esc_url($bg_image); ?>">

					<div class="self-stretch flex flex-col items-center justify-start gap-3.5">


							<<?php echo esc_attr( $subtitle_tag ); ?> class=" subtitle
							self-stretch relative leading-[24px] font-bold">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>

						<<?php echo esc_attr($description_tag); ?> class="description self-stretch
						relative text-sm leading-[24px]
						font-body-b3-merriweather-14 text-dimgray min-h-[165px]" >
							<?php echo $post['post_description'] ; ?>
					</<?php echo esc_attr($description_tag); ?>>

					</div>
					<a href="#" class="self-stretch relative text-base leading-[24px] font-bold text-general-1-primary hover:[text-decoration:underline]">Read more</a>
				</div>
				<?php endforeach; ?>
				</div>
		</div>
	</section>

</div>





