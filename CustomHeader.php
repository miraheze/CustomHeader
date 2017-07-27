<?php
/**
 * CustomHeader
 *
 * Adds an HTML header to a page, right at the beginning of the <body> tag.
 *
 *
 * @author Brent Laabs (Labster)
 * @authorlink http://www.mediawiki.org/wiki/User:Labster
 * @copyright Brent Laabs 2017
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) )
	die( 'This file is a MediaWiki extension, it is not a vaild entry point' );

$wgExtensionCredits[ 'parserhook' ][] = array(
	'path'            => __FILE__,
	'name'           => 'CustomHeader',
	'author'         => 'Brent Laabs (Labster)',
	'version'        => '1.0',
);

// And inside a class...
class CustomHeaderHooks {
    public static function onSkinTemplateOutputPageBeforeExec( &$skin, &$template ) {
        global $wgCustomHeaderHTML;
        // OutputPage::headElement actually creates the opening <body> tag, so this goes right after
        if ( $wgCustomHeaderHTML ) {
            $template->extend( 'headelement', $wgCustomHeaderHTML );
        }
        return true;
    }
}
