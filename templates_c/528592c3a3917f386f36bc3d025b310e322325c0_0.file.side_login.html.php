<?php
/* Smarty version 3.1.29, created on 2020-11-03 05:51:48
  from "C:\UniServerZ\www\mini_shop\test-des\templates\side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa0eff428abd1_41026954',
  'file_dependency' => 
  array (
    '528592c3a3917f386f36bc3d025b310e322325c0' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop\\test-des\\templates\\side_login.html',
      1 => 1604381953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa0eff428abd1_41026954 ($_smarty_tpl) {
?>
<form action="user.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-4 control-label">帳號：</label>
    <div class="col-md-8">
      <input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">密碼：</label>
    <div class="col-md-8">
      <input type="password" name="user_passwd" id="user_passwd" class="form-control" placeholder="請輸入密碼">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4">
      <a href="user.php?op=user_form" class="btn btn-link">註冊</a>
    </label>
    <div class="col-md-8">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form><?php }
}
