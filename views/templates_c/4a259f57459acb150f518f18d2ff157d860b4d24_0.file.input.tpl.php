<?php /* Smarty version 3.1.27, created on 2015-10-28 22:18:09
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18643871995630cb11c18cb7_91069619%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a259f57459acb150f518f18d2ff157d860b4d24' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl',
      1 => 1446038283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18643871995630cb11c18cb7_91069619',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5630cb11cba224_66757921',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5630cb11cba224_66757921')) {
function content_5630cb11cba224_66757921 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18643871995630cb11c18cb7_91069619';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>メールアドレス登録フォーム</title>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../../js/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../../js/messages_ja.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../../js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $("#signupForm").validate({
    rules: {
      email: {
        required: true,
        email: true
      }
    }
  });
});
  <?php echo '</script'; ?>
>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Seapa</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <form id="signupForm" action="result" class="form-signin required" method="post">
      <h3 class="form-signin-heading">メールアドレス登録</h3>
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
      </div>
      <button type="submit" id="submit" class="btn btn-lg btn-primary btn-block" name="submit"/>新規登録</button>
    </form>
  </div>
</body>
</html>
<?php }
}
?>