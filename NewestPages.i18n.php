<?php

/**
 * Internationalisation file for the NewestPages extension
 * @package MediaWiki
 * @subpackage Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */

function efNewestPagesMessages( $single = false ) {
	$messages = array(

'en' => array(
'newestpages' => 'Newest pages',
'newestpages-header' => "'''This page lists the $1 newest pages on the wiki.'''",
'newestpages-limitlinks' => 'Show up to $1 pages',
'newestpages-namespace' => 'Namespace:',
'newestpages-none' => 'No entries were found.',
'newestpages-ns-header' => "'''This page lists the $1 newest pages in the $2 namespace.'''",
'newestpages-showing' => 'Listing $1 newest pages:',
'newestpages-submit' => 'Go',
'newestpages-showredir' => 'Show redirect pages',
'newestpages-hideredir' => 'Hide redirect pages',
),

	);
	return $single ? $messages['en'] : $messages;
}

?>