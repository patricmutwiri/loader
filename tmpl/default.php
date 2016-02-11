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
$doc->addScript($path);
if(is_array($loader)) {
	$menu = $loader[0];
	$count = count($loader[0]);
	for ($i=0; $i < $count; $i++) { 
		$div_id = 'div'.$i;
		$link = $menu[$i]->link.'&Itemid='.$menu[$i]->id;
		echo '<div class="col-xs-12 col-sm-6 col-md-3" id="'.$div_id.'">'; ?>
			<script type="text/javascript">
				geturl("<?php echo $link ?>","<?php echo $div_id ?>");
			</script>
		<?php echo '<div>';
	}
} ?>
</div>
