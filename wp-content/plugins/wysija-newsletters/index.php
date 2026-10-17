<?php
/*
Plugin Name: MailPoet 2
Plugin URI: http://www.mailpoet.com/
Description: Create and send newsletters or automated emails. Capture subscribers with a widget. Import and manage your lists. This version is being replaced by MailPoet 3. Support offered to Premium customers only. Updates are limited to security issues.
Version: 2.10.2
Author: MailPoet
Author URI: http://www.mailpoet.com/
License: GPLv2 or later
Text Domain: wysija-newsletters
Domain Path: /languages/
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
*/
/*require vital parts*/
defined( 'ABSPATH' ) or die( 'Not allowed' );
// WP 6.7+ warns when translations are requested before 'init'. MailPoet 2 builds translated config defaults while this
// file loads, so register the domain now: real translations when a .mo exists for the locale, otherwise the same no-op
// object WordPress would install later (its own loader at init merges real translations into it).
$wysija_locale = determine_locale();
if ( ! load_textdomain( 'wysija-newsletters', dirname( __FILE__ ) . '/languages/wysija-newsletters-' . $wysija_locale . '.mo', $wysija_locale ) && ! isset( $GLOBALS['l10n']['wysija-newsletters'] ) ) {
	$GLOBALS['l10n']['wysija-newsletters'] = new NOOP_Translations();
}
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'base.php');
