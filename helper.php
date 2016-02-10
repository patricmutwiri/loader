<?php
/**
* 
 * @package    Mods
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://https://github.com/patricmutwiri/loader
 */
class ModLoaderHelper
{    
    public static function getLoader($params)
    {
        $menuid = $params->get('menu_id');
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        if(!empty($menuid)){ 
            $grid  = '<div class="col-xs-12">';
            
            $grid .= '<div>';
        } else {
            $grid = '';
        }
        return $grid;
    }
}