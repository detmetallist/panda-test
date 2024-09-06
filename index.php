<?php get_header(); ?>
	<div class="content">
		<div class="h_scroll">
			<div class="h_scroll_wrapper"></div>
			<div class="h_scroll_scroll"></div>
		</div>
		<div class="wrapper">
			<?php for($i=1; $i<=6; $i++): ?>
			<div class="content_item">
				<div class="content_item_img">
					<a href="/letter"><img src="<?php echo get_template_directory_uri() ?>/img/content-item-img.jpg"></a>
					<p>22 ноября 2023</p>
				</div>
				<div class="content_item_content">
					<a href="/letter">Моральна дилема кожного арбітражника</a>
					<p>Навряд знайдеться в світі людина, яка, хоча б раз в житті, не потрапила на гачок до пройдисвіта. Відтак, почуття обурення, гніву та розчарування щодо дарма витрачених (або ж видурених) коштів, знайомі, практично кожному.</p>
					<div class="content_item_bottom">
						<div class="bottom_left">
							<img src="<?php echo get_template_directory_uri() ?>/img/eye.svg">
							<span>233</span>
							<img src="<?php echo get_template_directory_uri() ?>/img/clock.svg">
							<span>5хв.</span>
						</div>
						<div class="bottom_right">
							<img src="<?php echo get_template_directory_uri() ?>/img/lucide_pin.svg">
							<div class="logo">
								<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
							</div>
							<span>Lead Panda</span>
						</div>
					</div>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</div>
<?php get_footer(); ?>