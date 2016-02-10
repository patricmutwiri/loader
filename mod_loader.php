<?php
/**
 * loader entry
 * 
 * @package    Mods
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://https://github.com/patricmutwiri/loader
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$loader = modLoaderHelper::getLoader($params);
require JModuleHelper::getLayoutPath('mod_loader');