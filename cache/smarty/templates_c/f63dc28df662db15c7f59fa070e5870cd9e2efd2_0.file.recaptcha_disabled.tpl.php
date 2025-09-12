<?php
/* Smarty version 4.5.3, created on 2025-09-05 09:12:38
  from 'C:\xampp\htdocs\Suitecrm\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba5c2e20f3a3_06033684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f63dc28df662db15c7f59fa070e5870cd9e2efd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1754026600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba5c2e20f3a3_06033684 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
