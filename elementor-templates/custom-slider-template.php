<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'title', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'sub_heading', 'none' );
$this->add_inline_editing_attributes( 'sub_heading_1', 'none' );
$this->add_inline_editing_attributes( 'post_author', 'none' );
$this->add_inline_editing_attributes( 'post_author_position', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$title_tag    = $settings['title_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$sub_heading    = $settings['sub_heading_html_tag'] ?? 'h2';
$sub_heading_1     = $settings['sub_heading_1_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';
$post_author_tag = $settings['post_author_html_tag'] ?? 'h3';
$post_author_position_tag = $settings['post_author_position_html_tag'] ?? 'h3';

?>

<div class="w-full">


<!-- Join Our Happy Customers !-->
		<section class="self-stretch flex flex-row items-start justify-start flex-wrap content-start [row-gap:20px] max-w-full text-center text-base text-general-white font-subtitles-16">
		<div class="flex-1 bg-general-1-primary flex flex-col items-center justify-start pt-0
				 pb-[100px] box-border relative gap-[30px] max-w-full
				 lg:pb-[65px] lg:box-border mq450:pb-[42px] mq450:box-border
				  mq850:gap-[15px] mq1500:min-w-full mr-[5%]">
			<div class="w-full max-w-[1170px] flex-col ml-[5%] mq950:mx-[0px]">

				<div class="w-[1318px] h-[168px] flex flex-row items-start justify-center max-w-full">
					<div class="self-stretch w-[182px] flex flex-col items-start justify-start gap-[30px]">
						<div class="self-stretch flex-1 flex flex-row items-center justify-center ">
							<div class="h-px w-[120px] relative bg-general-white [transform:_rotate(90deg)] shrink-0 z-[1]"></div>
						</div>


							<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label relative tracking-[0.4em] leading-[18px] uppercase font-medium z-[1]
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>
					</div>
				</div>
				<header class="w-[1318px] flex flex-row items-start justify-center pt-0 px-0 pb-[18px] mq950:px-[10px] box-border max-w-full text-center text-41xl text-general-white font-heading-1-72">
					<div class="w-full flex flex-col items-start justify-start gap-[30px] max-w-full">
						<div class="self-stretch flex flex-row items-start justify-center py-0 px-5">

								<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 w-full relative text-inherit leading-[66px] font-normal font-inherit inline-block z-[1]
							 mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>

						</div>


					<<?php echo esc_attr( $sub_heading ); ?>
				class="self-stretch h-6 relative text-lg leading-[24px] inline-block font-button-dm-sans-16 z-[1]
				sub_heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'sub_heading' ); ?>>
		<?php echo esc_html( $settings['sub_heading'] ); ?>
	</<?php echo esc_attr( $sub_heading); ?>>
					</div>
				</header>
				<div class="w-[1320px] flex flex-col items-start justify-start gap-[13px] max-w-full text-left text-11xl font-button-dm-sans-16">
					<div class="ml-[135px] self-stretch flex flex-row items-start justify-center py-0 pl-64 pr-5 box-border max-w-full lg:pl-32 lg:box-border mq850:pl-16 mq850:box-border">

						<<?php echo esc_attr( $sub_heading_1 ); ?>
				class="m-0 w-full m-ful-[670px] relative text-inherit tracking-[-0.01em]
							 leading-[36px] font-bold font-inherit inline-block shrink-0  z-[1]
							  mq450:text-lg mq450:leading-[22px] mq850:text-5xl mq850:leading-[29px] lg:hidden
				sub_heading_1 elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'sub_heading_1' ); ?>>
		<?php echo esc_html( $settings['sub_heading_1'] ); ?>
	</<?php echo esc_attr($sub_heading_1); ?>>
					</div>
					<div class="self-stretch flex flex-row items-start justify-center gap-[11.8px] max-w-full text-3xl font-body-b3-merriweather-14 mq1500:flex-wrap">
						<img class="h-[49.5px] w-[120px] relative z-[1] lg:hidden cursor-pointer prev top-[100px]" id="prev" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/union-1.svg">

						<div class="flex-1 flex flex-row items-start justify-start gap-[9.2px] min-w-[772px] max-w-full lg:flex-wrap lg:min-w-full mq450:mt-[0px] mq950:mt-[-100px]">
							<div class="relative w-full max-w-[1320px] overflow-hidden">
								<div class="slider flex transition-transform duration-500">
									<!-- Slider 1 !-->

									<?php foreach ( $settings['faq_items'] as $index => $post ) : ?>
									<div class="flex-1 flex flex-col items-start justify-start pt-[16.5px] px-0 pb-0 box-border min-w-[100%]  lg:min-w-full">
										<div class="self-stretch flex flex-col items-end justify-start gap-14 max-w-full mq850:gap-7">
											<div class="self-stretch flex flex-row items-start justify-end py-0 pl-[49px] pr-[41px] box-border max-w-full lg:pl-6 lg:box-border mq650:px-[20px]">
												<div class="flex-1 flex flex-row items-start justify-between max-w-full gap-[140px] lg:flex-wrap mq450:mt-[-50px] mq950:justify-center mq950:mr-[0px]">
													<div class="h-[156px] w-[77px] flex flex-col mq950:ml-[-100px] items-start justify-start pt-24 px-0 pb-0 box-border">


														<img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full z-[2]"
															 alt="" src="/wp-content/themes/vision-prime/web/public/quotation-mark.svg">
														<?php $bg_image    = ! empty( $post["post_author_image"]['url'] ) ? esc_url( $post["post_author_image"]['url'] ) : ''; ?>
														<div class="relative block w-[300px] top-[-30px]">
															<img class="side-img w-[180px] h-[180px] absolute  rounded-83xl-4 overflow-hidden
															shrink-0 object-cover z-[1]" loading="lazy" alt="" src="<?php echo esc_url($bg_image); ?>">
														</div>
													</div>


													<div class="max-w-[706px] flex flex-col items-start justify-start gap-7 w-full">

						<<?php echo esc_attr( $sub_heading_1 ); ?>
				class="m-0 w-full m-ful-[670px] relative text-inherit text-11xl
											 tracking-[-0.01em] leading-[36px] font-bold
											  font-inherit inline-block shrink-0  z-[1]
											   mq450:text-lg hidden lg:flex font-button-dm-sans-16
				sub_heading_1 elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'sub_heading_1' ); ?>>
		<?php echo esc_html( $settings['sub_heading_1'] ); ?>
	</<?php echo esc_attr($sub_heading_1); ?>>



														<<?php echo esc_attr($description_tag); ?> class="description m-0 self-stretch relative text-inherit leading-[36px]
														italic font-normal font-inherit text-med z-[1] mq450:text-lg mq450:leading-[29px]" >
																<?php echo wp_kses_post(  $post['post_description'] ); ?>
														</<?php echo esc_attr($description_tag); ?>>


														<div class="flex flex-col items-start justify-start gap-1 text-5xl font-button-dm-sans-16">

															<<?php echo esc_attr($post_author_tag); ?> class="post_author m-0 relative text-inherit
															tracking-[-0.01em] leading-[30px] font-bold
															font-inherit z-[1] mq450:text-lgi mq450:leading-[24px]" >
																<?php echo wp_kses_post(  $post['post_author'] ); ?>
														</<?php echo esc_attr($post_author_tag); ?>>



													<<?php echo esc_attr($post_author_position_tag); ?> class="post_author_position relative text-base
													leading-[26px] font-body-b3-merriweather-14 text-elements-neutral-3 z-[1]" >
																<?php echo wp_kses_post(  $post['post_author_position'] ); ?>
														</<?php echo esc_attr($post_author_position_tag); ?>>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<?php endforeach; ?>
									<!-- Slider 2 !-->

								</div>
								<div class="flex items-center justify-center w-full gap-6 hidden lg:flex mt-[30px]">
									<img decoding="async" class="cursor-pointer h-[49.5px] w-[120px] relative z-[1] prev" id="prevp" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/union-1.svg">
									<img decoding="async" class="cursor-pointer h-[49.5px] w-[120px] relative z-[1] next" id="nextm" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/union-2@2x.png">
								</div>
								<div class=" flex  mt-[60px] mq650:mt-[30px] mq450:justify-center mq950:pl-[20px] mq950:pr-[0px]">


									<div class="self-stretch flex flex-row items-start justify-center [row-gap:20px] z-[1] text-sm font-primary-paragraph-paragraph-5 lg:flex-wrap mq450:flex-col mq450:items-center mq950:ml-[0px] mq650:ml-[30x]">


										<div class="flex-1 flex flex-row items-center justify-center py-0 px-0 box-border gap-[15px] min-w-[157px] mq450:pl-0 mq450:pr-5 mq450:box-border">
											<div class="rounded-xl bg-general-white flex flex-row items-center justify-center p-[13px]">
												<img class="h-6 w-6 relative" alt="" src="/wp-content/themes/vision-prime/web/public/iconsgoogle-original.svg">
											</div>

											<div class="flex-1 flex flex-col items-start justify-start gap-[3px]">
												<div class="self-stretch flex flex-row items-start justify-start gap-[2px]">
													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-1.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-2.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-3.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-4.svg">
												</div>
												<div class="w-[95px] relative font-medium inline-block">
													4.7 on Google
												</div>
											</div>
										</div>

										<div class="flex-1 flex flex-row items-center justify-center py-0 px-[46px] box-border gap-[15px] min-w-[157px] z-[1] ml-[-1px] mq450:pl-5 mq450:pr-5 mq450:box-border">
											<div class="rounded-xl bg-general-white flex flex-row items-center justify-center py-[13.7px] px-[13px]">
												<img class="h-[22.6px] w-6 relative lg:min-w-[23px]" alt="" src="/wp-content/themes/vision-prime/web/public/group-8886.svg">
											</div>
											<div class="flex-1 flex flex-col items-start justify-start gap-[3px]">
												<div class="flex flex-row items-start justify-start gap-[2px]">
													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-5.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-6.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-7.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-8.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-9.svg">
												</div>
												<div class="self-stretch relative font-medium">
													4.2 on Trustpilot
												</div>
											</div>
										</div>
										<div class="flex-1 flex flex-row items-center justify-center py-0 px-[47px] box-border gap-[15px] min-w-[157px] z-[2] ml-[-1px] mq450:pl-5 mq450:pr-5 mq450:box-border">


											<div class="rounded-xl bg-general-white flex flex-row items-center justify-center py-[13.7px] px-[13px]">
												<img class="h-[22.6px] w-6 relative lg:min-w-[25px]" alt="" src="/wp-content/themes/vision-prime/web/public/image-18@2x.png">
											</div>
											<div class="flex-1 flex flex-col items-start justify-start gap-[3px]">
												<div class="flex flex-row items-start justify-start gap-[2px]">
													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-1.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-2.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-3.svg">

													<img class="h-4 w-[16.5px] relative min-h-[16px]" alt="" src="/wp-content/themes/vision-prime/web/public/vector-4.svg">
												</div>
												<div class="self-stretch relative font-medium">
													5.0 on Capterra
												</div>
											</div>
										</div>
										<div class="flex flex-row items-center justify-center py-0 px-[39px] gap-[15px] z-[3] ml-[-1px] text-lg mq450:ml-[15px]">
											<div class="rounded-xl bg-general-white flex flex-row items-center justify-center pt-[15.6px] px-[13px] pb-[15.7px] box-border w-[50px] h-[50px]">
												<img class="h-[18.7px] w-6 relative" alt="" src="/wp-content/themes/vision-prime/web/public/vector-15.svg">
											</div>
											<div class="relative">
												<p class="m-0">
													<b>2 000+</b>
												</p>
												<p class="m-0 text-sm font-medium">Happy Customers</p>
											</div>
										</div>


									</div>
								</div>

							</div>


							<img class="h-[49.5px] w-[120px] relative object-contain z-[1] lg:hidden cursor-pointer next top-[100px]" id="nexttest" loading="lazy" alt="" src="/wp-content/themes/vision-prime/web/public/union-2@2x.png">

						</div>
					</div>
				</div>
			</div>
		</div>

	</section>


</div>





