<?php if (isset($item_active) && $item_active) { ?>
	<!-- <?php echo '#' . $item_id; ?>_palette -->
    <?php if (isset($item_id) && ! empty($item_id)) { ?>

		<div id="<?php echo $item_id; ?>_palette" class="custom_popup bg-orange border_orange palette-wrapper hidden">

			<!--
		<div id="close_<?php echo $item_id; ?>_palette" class="popup_close">
			<svg id="svg8" width="58.225" height="58.225" version="1.1" viewBox="0 0 15.406 15.405" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<defs id="defs14">
					<symbol id="icon-x" viewBox="0 0 1024 1024">
						<path id="path493" d="M 960,780.736 691.008,512 960,243.264 780.736,64 512,332.864 243.136,64 64,243.264 332.736,512 64,780.736 243.136,960 512,691.136 780.736,960 Z"/>
					</symbol>
				</defs>
				<use id="close" transform="matrix(1.1279 0 0 1.1279 -1.1007 -1.1006)" width="100%" height="100%" style="fill:#333333" xlink:href="#icon-x"/>
			</svg>
		</div>
		-->

            <?php if (isset($popup_element_title) && $popup_element_title) { ?>
				<h3 class="text-light pt-3 pl-3 pr-3 pb-0"><?php echo $popup_element_title; ?>:</h3>
            <?php } ?>

			<!-- Legenda-->
            <?php if ($popup_element_allow_uncheck || $popup_element_allow_random) { ?>
				<div class="alert alert-custom alert-custom-inverse m-4" role="alert">
					<img class="glyphicon" src="/assets/images/mascot_alert_info_opt.svg" alt="Information icon">
					<div>
					<?php if ($popup_element_allow_uncheck) { ?>
						<div><?php printf($popup_element_uncheck_legend, '<img src="/assets/images/btn_none_opt.svg" width="32" class="bg-orange" alt="">'); ?></div>
					<? }?>

					<?php if ($popup_element_allow_random && $popup_element_random_legend) { ?>
						<div><?php printf($popup_element_random_legend, '<img src="/assets/images/btn_random_opt.svg" width="32" class="bg-orange" alt="">'); ?></div>
					<? }?>
					</div>
				</div>
            <? }?>

			<div class="palette-container palette-container-elements">
                <?php if (isset($popup_element_allow_uncheck) && $popup_element_allow_uncheck) { ?>
					<div class="item custom_bg_transparent item_radio_element_uncheck" title="<?php printf($popup_element_uncheck_legend, 'tutaj'); ?>">
						<input type="radio" class="palette-custom-radio" id="palette_<?php echo $item_id; ?>_item_999" name="radio_<?php echo $item_id; ?>" value="none"/>
						<label for="palette_<?php echo $item_id; ?>_item_999" class="item-label">
							<svg id="svg8" version="1.1" viewBox="0 0 63.464 52.209" xmlns="http://www.w3.org/2000/svg">
								<path id="g_label" d="m8.8953 12.388 13.716 13.716-13.716 13.716 9.1165 9.1165 13.716-13.716 13.716 13.716 9.1165-9.1165-13.716-13.716 13.716-13.716-9.1165-9.1165-13.716 13.716-13.716-13.716z" style="fill:#F44336;paint-order:fill markers stroke;stroke-width:1.2404"/>
							</svg>
						</label>
					</div>
                <?php } ?>

                <?php if (isset($popup_element_allow_random) && $popup_element_allow_random) { ?>
					<div class="item custom_bg_transparent item_radio_element_random" title="<?php printf($popup_element_random_legend, 'tutaj'); ?>">
						<input type="radio" class="palette-custom-radio" id="palette_<?php echo $item_id; ?>_item_0" name="radio_<?php echo $item_id; ?>" value="random" checked/>
						<label for="palette_<?php echo $item_id; ?>_item_0" class="item-label">
							<svg id="svg8" version="1.1" viewBox="0 0 63.464 52.209" xmlns="http://www.w3.org/2000/svg">
								<g id="g_label" transform="translate(195.01 -33.841)">
									<path id="path83665" d="m-158.57 58.829 10.54 10.424 10.574-10.424-5.3621-1e-6c0-19.225-25.601-31.878-35.695-8.1902 11.085-15.783 25.339-4.4142 25.339 8.1902z" style="fill:#ff2a2a"/>
									<path id="path83707" d="m-167.98 61.063-10.54-10.424-10.574 10.424 5.3621 1e-6c0 19.225 25.601 31.878 35.695 8.1902-11.085 15.783-25.339 4.4142-25.339-8.1902z" style="fill:#333"/>
								</g>
							</svg>
						</label>
					</div>
                <?php } ?>

                <?php
                if (isset($popup_elements) && ! empty($popup_elements)) {
                    $rand_key = array_rand($popup_elements);
                    $key      = $popup_elements[$rand_key];

                    foreach ($popup_elements as $id => $i) {

                        $n       = 0;
                        $checked = '';
                        // zaznacz pierwszy element, jesli nie wyswietla sie osobny input dla losowego elementu
                        if ( ! $popup_element_allow_random && $i === $key) {
                            $checked = 'checked';
                        }
                        ?>

						<div class="item custom_bg_transparent" title="Wybierz ten element">
							<input type="radio" class="palette-custom-radio" id="palette_<?php echo $item_id; ?>_item_<?php echo $i; ?>" name="radio_<?php echo $item_id; ?>" value="<?php echo $i; ?>" <?php echo $checked; ?>/>

							<svg id="svg<?php echo $item_id; ?>_<?php echo $i; ?>" width="73.582" height="59.785" version="1.1" viewBox="0 0 19.469 15.818" xmlns="http://www.w3.org/2000/svg">
								<g id="svg_checkmark" class="svg_checkmark" transform="translate(-59.813 -218.03)">
									<g id="use86732" class="svg_checkmark" transform="matrix(.019012 0 0 .019012 59.813 215.6)" style="fill:#333">
										<title id="title798">checkmark</title>
										<path id="path800" d="m192 384-192 192 384 384 640-640-192-192-448 448z"/>
									</g>
								</g>
							</svg>

							<label for="palette_<?php echo $item_id; ?>_item_<?php echo $i; ?>" class="item-label"><img src="/assets/images/radio_<?php echo $item_id; ?>_<?php echo $i; ?>.png" alt="Avatar part" class="img"></label>

						</div>
                        <?php
                        $n++;
                    }
                }
                ?>

			</div>
			<!-- elements palette -->


            <?php
            if (isset($popup_colors) && ! empty($popup_colors)) {
                ?><?php if (isset($popup_color_title) && $popup_color_title) { ?>
					<h3 class="text-light pt-3 pl-3 pr-3 pb-0"><?php echo $popup_color_title; ?>:</h3>
                <?php } ?>


				<!-- Legenda-->
                <?php if ($popup_color_allow_random ) { ?>
					<div class="alert alert-custom alert-custom-inverse m-4" role="alert">
						<img class="glyphicon" src="/assets/images/mascot_alert_info_opt.svg" alt="Information icon">
						<div>
							Kliknij <img src="/assets/images/btn_random_opt.svg" width="32" class="bg-orange rounded_AAA mx-auto_AAA" alt=""> aby wybrać losowy kolor.
						</div>
					</div>
                <? }?>


				<div class="palette-container palette-container-colors">

                    <?php if (isset($popup_color_allow_random) && $popup_color_allow_random) { ?>
						<div class="item bg-orange item_radio_color_random">

							<input type="radio" class="palette-custom-radio" id="palette_<?php echo $item_id; ?>_item_0_color" name="radio_<?php echo $item_id; ?>_color" value="random" checked/>

							<svg id="svg<?php echo $item_id; ?>_0" width="73.582" height="59.785" version="1.1" viewBox="0 0 19.469 15.818" xmlns="http://www.w3.org/2000/svg">
								<g id="svg_checkmark" class="svg_checkmark" transform="translate(-59.813 -218.03)">
									<g id="use86732" class="svg_checkmark" transform="matrix(.019012 0 0 .019012 59.813 215.6)" style="fill:#333">
										<title id="title798">checkmark</title>
										<path id="path800" d="m192 384-192 192 384 384 640-640-192-192-448 448z"/>
									</g>
								</g>
							</svg>

							<label for="palette_<?php echo $item_id; ?>_item_0_color" class="item-label">
								<svg id="svg8" version="1.1" viewBox="0 0 63.464 52.209" xmlns="http://www.w3.org/2000/svg">
									<g id="g_label" transform="translate(195.01 -33.841)">
										<path id="path83665" d="m-158.57 58.829 10.54 10.424 10.574-10.424-5.3621-1e-6c0-19.225-25.601-31.878-35.695-8.1902 11.085-15.783 25.339-4.4142 25.339 8.1902z" style="fill:#ff2a2a"/>
										<path id="path83707" d="m-167.98 61.063-10.54-10.424-10.574 10.424 5.3621 1e-6c0 19.225 25.601 31.878 35.695 8.1902-11.085 15.783-25.339 4.4142-25.339-8.1902z" style="fill:#333"/>
									</g>
								</svg>
							</label>
						</div>

                    <?php } ?>

                    <?php
                    foreach ($popup_colors as $id => $v) {
                        ?>
						<div class="item custom_bg_<?php echo $item_id; ?>_<?php echo $id; ?>">
							<input type="radio" class="palette-custom-radio" id="palette_<?php echo $item_id; ?>_item_<?php echo $id; ?>_color" name="radio_<?php echo $item_id; ?>_color" value="<?php echo $id; ?>"/>

							<svg id="svg<?php echo $item_id; ?>_<?php echo $id; ?>" width="73.582" height="59.785" version="1.1" viewBox="0 0 19.469 15.818" xmlns="http://www.w3.org/2000/svg">
								<g id="svg_checkmark" class="svg_checkmark" transform="translate(-59.813 -218.03)">
									<g id="use86732" class="svg_checkmark" transform="matrix(.019012 0 0 .019012 59.813 215.6)" style="fill:#333">
										<title id="title798">checkmark</title>
										<path id="path800" d="m192 384-192 192 384 384 640-640-192-192-448 448z"/>
									</g>
								</g>
							</svg>

							<label for="palette_<?php echo $item_id; ?>_item_<?php echo $id; ?>_color" class="item-label"></label>

						</div>

                        <?php
                    }
                    ?>

				</div>        <!-- colors palette -->
            <?php } ?>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-xl-2 offset-md-4 offset-xl-5">
						<a class="btn btn-lg btn-block btn-custom mb-3 js-close" data-close="<?php echo $item_id; ?>_palette" data-target="<?php echo $item_id; ?>_card">OK,
							wybrałem</a>
					</div>
				</div>
			</div>

		</div>

    <?php } ?>
	<!-- <?php echo '/#' . $item_id; ?>_palette -->
<?php } ?>