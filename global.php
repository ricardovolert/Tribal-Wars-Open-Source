<?php
/**
 * Tribal Wars - Open-Souce
 *
 * @author    ekilnu
 * @copyright 2011 (C) by ekilnu
 *
 * @license   Attribution-NonCommercial-NoDerivs 3.0 Unported <http://creativecommons.org/licenses/by-nc-nd/3.0/>
 * @version   1.0.0
 */

/** we need php version 5.3.x and higher! **/
if (!strnatcmp(phpversion(), '5.3.0')) {
  die('You need PHP VERSION 5.3.x or 5.4.x to running');
}

// bind core files
require_once(dirname(__FILE__).'/lib/Template.class.php');
?>