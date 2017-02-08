<?php /* Smarty version 3.1.27, created on 2017-02-08 11:16:03
         compiled from "\wamp64\www\global-promotion-2017\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13618589afdf347fc05_83777651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33aa4e34aa7aaf172736a9f2e42d8be6031fb6e1' => 
    array (
      0 => '\\wamp64\\www\\global-promotion-2017\\manager\\templates\\default\\welcome.tpl',
      1 => 1486551413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13618589afdf347fc05_83777651',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589afdf3487900_33036132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589afdf3487900_33036132')) {
function content_589afdf3487900_33036132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13618589afdf347fc05_83777651';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>