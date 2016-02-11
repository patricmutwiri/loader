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
        $grid  = array();
        if(!empty($menuid)){ 
            $tmenu = $menu->getItem($menuid);
            //$grid .= json_encode($tmenu);
            $childs = $menu->getItems('parent_id', $menuid);
            if( !empty($childs) )
            {
                $grid[] = $childs;
            }
        } else {
            $grid[] = '';
        }
        return $grid;
    }
}