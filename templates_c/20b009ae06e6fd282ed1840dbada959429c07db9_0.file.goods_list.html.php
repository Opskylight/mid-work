<?php
/* Smarty version 3.1.29, created on 2020-11-10 05:43:30
  from "C:\UniServerZ\www\test-des\templates\goods_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa2882724f12_06255206',
  'file_dependency' => 
  array (
    '20b009ae06e6fd282ed1840dbada959429c07db9' => 
    array (
      0 => 'C:\\UniServerZ\\www\\test-des\\templates\\goods_list.html',
      1 => 1604986999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa2882724f12_06255206 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
        <div class="caption">
          <div style="height: 30px;">
            <h3><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</b></a></h3>
          </div>
          <div>
            <button class="btn btn-secondary" type="button"><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
">評論此商品</a></button>
          </div>
          <div class="ratings" class="row">
            <div class="empty_star">★★★★★</div>
            <div class="full_star">★★★★★</div>
            </div>
          <div class="row">
            <div class="col-md-6">售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
            <div class="col-md-6">人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</div>
          </div>
        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
?>
</div>

共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件商品
<?php echo $_smarty_tpl->tpl_vars['bar']->value;
}
}
