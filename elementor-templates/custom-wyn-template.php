<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'title', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$title_tag    = $settings['title_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';

?>
<div class="w-full">

<section class="self-stretch flex flex-row items-start justify-center pt-0  pb-[180px] box-border max-w-full text-left text-base text-general-1-primary font-subtitles-16 lg:pb-[117px] lg:box-border mq850:pb-[76px] mq850:box-border">
		<div class="w-[1170px] flex flex-col items-start justify-start gap-[60px] max-w-full lg:gap-[30px] lg:mx-[20px]">
			<div class="self-stretch flex flex-col items-start justify-center py-0  box-border max-w-full text-center">
				<div class="h-[120px] relative block left-[50%] ">
					<div class="h-px w-[120px] !m-[0] top-[-79px]  bg-general-1-primary [transform:_rotate(90deg)] [transform-origin:0_0]"></div>
				</div>
				<div class="w-full flex flex-col items-center justify-start pt-[22px] px-0 pb-[5px] box-border gap-[21px] max-w-full">

					<div class="self-stretch flex flex-row items-start justify-center py-0 ">

						<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label relative tracking-[0.4em] leading-[36px] uppercase font-medium z-[1]
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>

					</div>
					<div class="flex flex-row items-start justify-start relative text-41xl text-general-8-secondary font-heading-1-72">

						<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 w-full relative text-inherit leading-[66px] font-normal
						font-inherit inline-block z-[1] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>

					</div>

				</div>
			</div>

			<div class="self-stretch flex flex-row items-start justify-center gap-[60px] max-w-full text-lg text-general-1-secondary-variant font-button-dm-sans-16 lg:gap-[30px] lg:flex-wrap">
				<div class="max-w-[440px] flex flex-col items-start justify-start gap-[10px] min-w-[440px] w-full lg:flex-1 mq450:gap-[30px] mq850:min-w-full">
				<?php foreach ( $settings['faq_items'] as $index => $post ) : ?>


					<div class="self-stretch flex flex-col items-start justify-start gap-[30px] max-w-full">
						<button class="tab-button cursor-pointer py-[28px] px-7 self-stretch box-border flex flex-row items-start justify-start whitespace-nowrap max-w-full bg-elements-neutral-4 border-l-[4px] border-solid border-general-1-primary">
							<b class="flex-1 relative text-lg leading-[24px] inline-block font-button-dm-sans-16 text-general-1-secondary-variant text-left max-w-full">
								<ol class="m-0 font-inherit text-inherit pl-6 mq950:pl-[0px] st-wrap">
									<li>
									<<?php echo esc_attr( $title_tag ); ?> class="title">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($title_tag); ?>>

									</li>
								</ol>
							</b>
						</button>
					</div>

					<?php endforeach; ?>
				</div>
	<?php foreach ( $settings['faq_items'] as $index => $post ) : ?>



					<div class="tab-content flex-1 bg-elements-neutral-4 flex flex-col items-start justify-start p-[60px] box-border gap-[31px] min-w-[435px] max-w-full text-center text-[78px] text-general-1-primary mq450:pt-[39px] mq450:pb-[39px] mq450:box-border mq850:gap-[15px] mq850:pl-[30px] mq850:pr-[30px] mq850:box-border mq850:min-w-full
			<?php echo ($index !==0 ) ? 'hidden' : '' ?>">
					<div class="self-stretch flex flex-row items-start justify-start gap-6 max-w-full mq850:flex-wrap">
						<img decoding="async" class="h-[94px] w-[94px] relative object-cover" loading="lazy" alt="" src="/wp-content/themes/vision-prime/assets/images/downtown-dubai.png">


						<div class="flex-1 flex flex-col items-start justify-start pt-1.5 px-0 pb-0 box-border min-w-[287px] max-w-full text-left text-11xl text-general-1-secondary">

								<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle">
						<?php echo esc_html( $post['post_sub_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>


						</div>
					</div>

					<<?php echo esc_attr($description_tag); ?> class="description self-stretch relative text-base leading-[26px]
					 font-body-b3-merriweather-14 text-general-9-secondary-variant text-left" >
							<?php echo wp_kses_post(  $post['post_description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>
					<?php $bg_image    = ! empty( $post["post_image"]['url'] ) ? esc_url( $post["post_image"]['url'] ) : ''; ?>
					<img decoding="async" class="self-stretch h-[314px] relative max-w-full
					overflow-hidden shrink-0 object-cover side-img" alt="" src="<?php echo esc_url($bg_image); ?>">
				</div>

<?php endforeach; ?>
			</div>


		</div>
	</section>


</div>



