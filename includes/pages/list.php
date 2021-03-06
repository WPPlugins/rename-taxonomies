<?php defined( 'ABSPATH' ) or exit;
/**
 * List taxonomies
 *
 * @package    WebMan Rename Taxonomies
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0
 * @version  1.0
 */





// Required files

	require_once( self::$plugin_dir . 'includes/classes/class-list-table.php' );



// Helper variables

	$list = new WebMan_Rename_Taxonomies_List_table();



?>

<h1><?php esc_html_e( 'Rename Taxonomies', 'rename-taxonomies' ); ?></h1>

	<p>
		<strong><?php esc_html_e( 'List of registered taxonomies:', 'rename-taxonomies' ); ?></strong><br>
		<em><?php esc_html_e( '(Click the taxonomy name to edit its details)', 'rename-taxonomies' ); ?></em>
	</p>

	<p class="description dashicons-before dashicons-editor-help">
		<?php esc_html_e( '(*) Items in the list are sorted alphabetically by (the customized) "Taxonomy Title" field.', 'rename-taxonomies' ); ?>
	</p>

	<?php

	/*
	SPOILER

	Let's continue...
	Yes, he also had a "valaška", special shepherd's axe.
	@link  https://en.wikipedia.org/wiki/Shepherd%27s_axe

	J u _ o _ í k

	SPOILER
	*/

	// Display the list of taxonomies

		$list->display();
