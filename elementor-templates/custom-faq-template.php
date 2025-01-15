<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';

?>

<div class="w-full stm-faqs-it">
    <section class="self-stretch  flex
			flex-col items-center justify-start
			pt-0 px-5 pb-[100px] box-border gap-20
			max-w-full text-center text-base text-general-1-primary
			font-subtitles-16 ">
		<div class="w-full flex flex-row mb-[-60px] mt-[0px]">
			<div class="w-[50%] h-[120px] border-general-1-primary border-r border-solid "></div>
			<div class="w-[50%] "></div>
		</div>
		<div class="w-[1920px] h-[1778px] relative bg-elements-neutral-4 hidden max-w-full"></div>
		<div class="w-[1170px] flex flex-row items-start justify-center max-w-full">
			<div class="w-full flex flex-row items-start justify-start max-w-full z-[1]">

				<div class="flex-1 flex flex-col items-center justify-start pt-[22px] px-0  box-border gap-[21px] max-w-full">
					<div class="self-stretch flex flex-row items-start justify-center py-0 px-5">


					<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label relative tracking-[0.4em] leading-[36px] uppercase font-medium z-[1]
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>

					</div>
					<div class="flex flex-row items-center justify-start relative text-41xl text-general-8-secondary font-heading-1-72">


						<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 w-full relative text-inherit leading-[66px] font-normal
						font-inherit inline-block z-[1] mq450:text-17xl
						mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>


					</div>
				</div>
			</div>
		</div>
		<div class="max-w-[1170px] flex flex-row items-start justify-center flex-wrap content-start gap-5 w-full
				 text-left text-lg text-general-8-secondary
				 font-button-dm-sans-16">
			<div class="flex-1 flex flex-col items-start justify-start gap-5 min-w-[374px] max-w-full mq450:min-w-full">


				<?php $n = ceil(count($settings['faq_items']) / 2);


				?>
				<?php foreach ( $settings['faq_items'] as $index => $post ) :

				if ($index > $n-1 ) continue;

				?>
				<div class="accordion-item self-stretch border-general-1-primary border-[2px] border-solid box-border overflow-hidden flex flex-col items-start justify-start py-[22px] px-7 gap-6 max-w-full mq450:pt-5 mq450:pb-5 mq450:box-border">
					<div class="accordion-header self-stretch flex flex-row items-center justify-start gap-4 max-w-full cursor-pointer mq850:flex-wrap">
						<<?php echo esc_attr( $subtitle_tag ); ?> class=" subtitle
							flex-1 font-bold relative leading-[24px] inline-block min-w-[314px]
							 mq450:min-w-[100px] max-w-full">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>


						<img decoding="async" class="h-4 w-4 relative transform transition-transform duration-300" alt="" src="/wp-content/themes/vision-prime/web/public/f-a-q-answers-two.svg">
					</div>


								<<?php echo esc_attr($description_tag); ?> class="description accordion-content
								hidden self-stretch relative text-sm
					 leading-[24px] font-body-b3-merriweather-14
					 text-general-9-secondary-variant" >
							<?php echo wp_kses_post(  $post['post_description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>

				</div>
				<?php endforeach; ?>


			</div>
			<div class="flex-1 flex flex-col items-start justify-start gap-5 min-w-[374px] max-w-full mq450:min-w-full">

				<?php foreach ( $settings['faq_items'] as $index => $post ) :
				if ($index <= $n-1 ) continue;

				?>
				<div class="accordion-item self-stretch border-general-1-primary border-[2px] border-solid box-border overflow-hidden flex flex-col items-start justify-start py-[22px] px-7 gap-6 max-w-full mq450:pt-5 mq450:pb-5 mq450:box-border">
					<div class="accordion-header self-stretch flex flex-row items-center justify-start gap-4 max-w-full cursor-pointer mq850:flex-wrap">
						<<?php echo esc_attr( $subtitle_tag ); ?> class=" subtitle
							flex-1 font-bold relative leading-[24px] inline-block min-w-[314px]
							 mq450:min-w-[100px] max-w-full">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>


						<img decoding="async" class="h-4 w-4 relative transform transition-transform duration-300" alt="" src="/wp-content/themes/vision-prime/web/public/f-a-q-answers-two.svg">
					</div>


								<<?php echo esc_attr($description_tag); ?> class="description accordion-content
								hidden self-stretch relative text-sm
					 leading-[24px] font-body-b3-merriweather-14
					 text-general-9-secondary-variant" >
							<?php echo wp_kses_post(  $post['post_description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>

				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

</div>

