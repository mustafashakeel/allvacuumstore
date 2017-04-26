<?php
/**
 * Description here.
 *
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
				<div class="branding">
                
                	<div class="logo clearfix">
        	        <div "img-header" style="position:absolute; margin-left:400px;margin-top:0px">
<img src="http://www.allvacuumstore.com/wp-content/themes/dt-the7/images/allvacuum-freeshipping.png" border="0" alt="imagem" />
</div>

					<div "img-header" style="position:absolute; margin-left:900px;margin-top:5px;">
<img style="margin-top:10px;height:auto;width:270px;position:absolute;z-index:99;" src="http://www.allvacuumstore.com/wp-content/themes/dt-the7/images/allvacuum-info.png" border="0" alt="imagem" />
</div>
					
					<?php
					$logo = '';
					$logo .= presscore_get_the_main_logo();

					// Do not display mobile logo on mixed headers
					if ( ! presscore_header_layout_is_mixed() ) {
						$logo .= presscore_get_the_mobile_logo();
					}

					presscore_display_the_logo( $logo );
					unset( $logo );
					
					?>
					
					<div id="site-title" class="assistive-text"><?php bloginfo( 'name' ); ?></div>
					<div id="site-description" class="assistive-text"><?php bloginfo( 'description' ); ?>

					<?php presscore_render_header_elements( 'near_logo_left' );?>

					<?php presscore_render_header_elements( 'near_logo_right' ); ?>


				</div>