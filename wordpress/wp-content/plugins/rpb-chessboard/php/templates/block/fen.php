<?php
/******************************************************************************
 *                                                                            *
 *    This file is part of RPB Chessboard, a WordPress plugin.                *
 *    Copyright (C) 2013-2022  Yoann Le Montagner <yo35 -at- melix.net>       *
 *                                                                            *
 *    This program is free software: you can redistribute it and/or modify    *
 *    it under the terms of the GNU General Public License as published by    *
 *    the Free Software Foundation, either version 3 of the License, or       *
 *    (at your option) any later version.                                     *
 *                                                                            *
 *    This program is distributed in the hope that it will be useful,         *
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *    GNU General Public License for more details.                            *
 *                                                                            *
 *    You should have received a copy of the GNU General Public License       *
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                            *
 ******************************************************************************/
?>

<?php
	wp_enqueue_script( 'rpbchessboard-npm' );
	wp_enqueue_style( 'rpbchessboard-npm' );
?>

<?php if ( $model->getDiagramAlignment() === 'center' ) : ?>
<p class="rpbchessboard-spacerBefore"></p>
<?php endif; ?>

<div id="<?php echo esc_attr( $model->getUniqueID() ); ?>" class="rpbchessboard-chessboard <?php echo esc_attr( 'rpbchessboard-diagramAlignment-' . $model->getDiagramAlignment() ); ?>">
	<noscript>
		<div class="rpbchessboard-javascriptWarning">
			<?php esc_html_e( 'You must activate JavaScript to enhance chess diagram visualization.', 'rpb-chessboard' ); ?>
		</div>
	</noscript>
	<div class="rpbchessboard-chessboardAnchor"></div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var selector = '#' + <?php echo wp_json_encode( $model->getUniqueID() ); ?> + ' .rpbchessboard-chessboardAnchor';
			RPBChessboard.renderFEN($(selector), <?php echo wp_json_encode( $model->getWidgetArgs() ); ?>);
		});
	</script>
</div>

<?php if ( $model->getDiagramAlignment() === 'center' ) : ?>
<p class="rpbchessboard-spacerAfter"></p>
<?php endif; ?>
