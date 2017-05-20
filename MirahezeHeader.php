<?php
/**
 * MirahezeHeader
 *
 * Adds HTML header to a page
 *
 *
 * @author Brent Laabs (Labster)
 * @authorlink http://www.mediawiki.org/wiki/User:Labster
 * @copyright // TBD
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) )
	die( 'This file is a MediaWiki extension, it is not a vaild entry point' );

$wgExtensionCredits[ 'parserhook' ][] = array(
	'path'            => __FILE__,
	'name'           => 'MirahezeHeader',
	'author'         => 'Brent Laabs (Labster)',
	'version'        => '1.0',
);

$dir = dirname( __FILE__ ) . '/';

$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'MyExtensionHooks::onSkinTemplateOutputPageBeforeExec';

// And inside a class...
public static function onSkinTemplateOutputPageBeforeExec( &$skin, &$template ) { ... }
    global $wgHeaderExtensionHTML;
    // OutputPage::headElement actually creates the opening <body> tag, so this goes right after
    $template->extend( 'headelement', $wgHeaderExtensionHTML );
    return true;
}
