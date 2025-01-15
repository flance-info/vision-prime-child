<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$label_tag       = $settings['label_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';
$bg_image        = ! empty( $settings["section_background_image"]['url'] ) ? esc_url( $settings["section_background_image"]['url'] ) : '';
?>

<div class="w-full">


	<section class="self-stretch flex flex-row items-start justify-center pt-0  pb-[180px] box-border max-w-full text-left text-base bg-elements-neutral-4 font-subtitles-16 lg:pb-[117px] lg:box-border mq850:pb-[76px] mq850:box-border">
		<div class="w-[1170px] flex flex-col items-start justify-start gap-[60px] max-w-full lg:gap-[30px] lg:mx-[20px]">
			<div class="self-stretch flex flex-col items-start justify-center py-0  box-border max-w-full text-center">
				<div class="h-[120px] relative block left-[50%] ">
					<div class="h-px w-[120px] !m-[0] top-[-79px]  bg-general-1-primary [transform:_rotate(90deg)] [transform-origin:0_0]"></div>
				</div>
				<div class="w-full flex flex-col items-center justify-start pt-[22px] px-0 pb-[5px] box-border gap-[21px] max-w-full">

					<div class="self-stretch flex flex-row items-start justify-center py-0 ">

						<<?php echo esc_attr( $label_tag ); ?>
						class="relative tracking-[0.4em] leading-[36px] uppercase font-medium z-[1]"
						<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
						<?php echo esc_html( $settings['label'] ); ?>
					</<?php echo esc_attr( $label_tag ); ?>>
				</div>
				<div class="flex flex-row items-start justify-start relative text-41xl text-general-8-secondary font-heading-1-72">

					<<?php echo esc_attr( $heading_tag ); ?>
					class="m-0 w-full relative text-inherit leading-[66px]
					font-normal font-inherit inline-block z-[1] mq450:text-17xl
					mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px]
					heading elementor-inline-editing"
					<?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>
			</div>
		</div>
</div>

<div class="self-stretch flex flex-col items-start justify-start gap-[60px] max-w-full text-left text-general-9-secondary-variant font-body-b3-merriweather-14 mq1425:gap-[30px]">
	<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[30px] max-w-full">

		<<?php echo esc_attr( $description_tag ); ?> class="flex-1 relative leading-[26px] inline-block min-w-[300px]
		max-w-full mq450:min-w-full description
		elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
		<?php echo $settings['description'] ?>
	</<?php echo esc_attr( $description_tag ); ?>>

	<div class="flex flex-1 relative leading-[26px] inline-block min-w-[300px] max-w-full mq450:min-w-full">
		<img decoding="async" class="h-[286px] flex-1 relative
						max-w-full overflow-hidden object-cover min-w-[300px]
						mq450:min-w-full" loading="lazy" alt="" src="<?php echo esc_url( $bg_image ); ?>">
	</div>
</div>


</div>
<div class="self-stretch flex flex-row items-center justify-start flex-wrap hidden mq1170:flex content-center gap-[40px] text-41xl text-general-1-primary font-button-dm-sans-16 mq950:gap-[10px]  mq950:gap-x-[5px] mq950:items-start   items-start mq650:gap-x-[0px]">


	<div class=" flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px] mq650:w-[50%] mq950:w-[23%] mq650:min-w-[100px]  mq950:min-w-[150px]">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:15]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:15]'">
			<span class="supports-[counter-set]:sr-only">15</span>
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			years of experience
		</div>
	</div>
	<div class=" flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px] mq650:w-[50%] mq950:w-[23%] mq650:min-w-[100px]  mq950:min-w-[150px] ">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:100]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:100]'">
			<span class="supports-[counter-set]:sr-only">100</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			dedicated team
		</div>
	</div>
	<div class=" flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px] mq650:w-[50%] mq950:w-[23%] mq650:min-w-[100px]  mq950:min-w-[150px]">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:2500]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:2500]'">
			<span class="supports-[counter-set]:sr-only">2500</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			consultations
		</div>
	</div>
	<div class=" flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px] mq650:w-[50%] mq950:w-[23%] mq650:min-w-[100px] text-center  mq950:min-w-[150px]">
		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:5000]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:5000]'">
			<span class="supports-[counter-set]:sr-only">5000</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant text-left">
			audit completed
		</div>
	</div>
</div>
<div class="self-stretch flex flex-row items-center justify-start flex-wrap content-center gap-[40px] text-41xl text-general-1-primary font-button-dm-sans-16 mq950:gap-[20px] mq1170:hidden">


	<div class="flex-1 flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px]">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:15]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:15]'">
			<span class="supports-[counter-set]:sr-only">15</span>
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			years of experience
		</div>
	</div>
	<div class="flex-1 flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px]">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:100]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:100]'">
			<span class="supports-[counter-set]:sr-only">100</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			dedicated team
		</div>
	</div>
	<div class="flex-1 flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px]">


		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:2500]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:2500]'">
			<span class="supports-[counter-set]:sr-only">2500</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant">
			consultations
		</div>
	</div>
	<div class="flex-1 flex flex-col items-start justify-start gap-[10px] min-w-[206px] max-w-[262px] text-center">
		<b class="relative tracking-[-0.03em] leading-[66px] mq450:text-17xl mq450:leading-[40px] mq850:text-29xl mq850:leading-[53px] transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)] [--num:5000]" x-data="{ shown: false }"
		   x-intersect="shown = true" :class="shown &amp;&amp; '[--num:5000]'">
			<span class="supports-[counter-set]:sr-only">5000</span>+
		</b>
		<div class="self-stretch relative text-lg leading-[30px] font-body-b3-merriweather-14 text-general-9-secondary-variant text-left">
			audit completed
		</div>
	</div>
</div>
</div>

</section>


<!-- Steps to Set Up a Business !-->


</div>