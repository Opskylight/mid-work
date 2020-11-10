<?php
/* Smarty version 3.1.29, created on 2020-11-10 07:25:46
  from "C:\UniServerZ\www\test-des\templates\goods_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa407aa30fe0_16204218',
  'file_dependency' => 
  array (
    '57debd57ac5477d85b08c55429de1ed5a8a460e0' => 
    array (
      0 => 'C:\\UniServerZ\\www\\test-des\\templates\\goods_display.html',
      1 => 1604993136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa407aa30fe0_16204218 ($_smarty_tpl) {
?>
<link rel="stylesheet" href="pingfen.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="pingfen.js"><?php echo '</script'; ?>
>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
&goods_amount=1" class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
        <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger">刪除商品</a>
      <?php }?>
    </div>
    <textarea id="tex"></textarea>
    <div>
    <button class="btn btn-secondary" type="submit">評論</button>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#goods" aria-controls="goods" role="tab" data-toggle="tab"><b>商品介紹</b></a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab"><b>退換貨須知</b></a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab"><b>售後服務</b></a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab"><b>特別說明</b></a></li>
  <li role="presentation"><a href="#think" aria-controls="think" role="tab" data-toggle="tab"><b>評論區</b></a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="goods">
    <h3><b>商品介紹</b></h3>
    <p><b><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</b></p>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3><b>退換貨須知</b></h3>
    <ul>
      <li><b>商品到貨享十天猶豫期之權益</b><span class="text-danger"><b>（注意！猶豫期非試用期）</b></span><b>，辦理退貨商品必須是全新狀態且包裝完整，否則將會影響退貨權限。</b></li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3><b>售後服務</b></h3>
    <ul>
      <li><b>如您收到商品，請依正常程序儘速檢查商品，若商品發生新品瑕疵之情形，您可申請更換新品或退貨，請直接點選</b><a href="#" target="_blank"><b>聯絡我們</b></a>。</li>
      <li><b>若您對於購買流程、付款方式、退貨及商品運送方式有疑問，你可直接點選</b><a href="#" target="_blank"><b>會員中心</b></a>。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3><b>特別說明</b></h3>
    <ul>
      <li><b>本公司對於所販售具遞延性之商品或服務，消費者權益均受保障。如因合作廠商無法提供商品或服務，請與本公司聯繫辦理退貨或換成等值商品。</b></li>
      <li><b>※特惠商品，不適用折價券</b></li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="think">
    <h3><b>評論</b></h3>
    <ul><b>
      <li>此功能尚未完備</li>
      <li>敬請期待</li>
    </b></ul>
  </div>
</div>


<?php }
}
