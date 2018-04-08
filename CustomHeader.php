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
