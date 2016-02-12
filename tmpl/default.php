<?php 
/**
* 
 * @package    Mods
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://https://github.com/patricmutwiri/loader
 */
defined('_JEXEC') or die; 
?>
<div id = "grid_loader col-xs-12">
<?php 
$doc = JFactory::getDocument();
JHtml::_('bootstrap.framework');
$module = JModuleHelper::getModule( 'mod_loader' );
$path = JURI::root().'modules/'.$module->module.'/loader.js';
$path2 = JURI::root().'modules/'.$module->module.'/loader.css';
$doc->addScript($path);
$doc->addStyleSheet($path2);
$tot = count($loader);
if($tot < 2) {
	$loader = $loader[0];
}
if(is_array($loader)) {
	$menu = $loader;
	$count = count($loader);
	for ($i=0; $i < $count; $i++) { 
		$div_id = 'div'.$i;
		$link = $menu[$i]->link.'&Itemid='.$menu[$i]->id; ?>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 grids" id="<?php echo $div_id ?>"></div>
		<script type="text/javascript">
				var url = '<?php echo $link; ?>',div = '<?php echo $div_id ?>';
				geturl(url,div);
		</script>
		<?php 	
	} 
} ?>
</div>
