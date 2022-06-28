<?php
/* Smarty version 3.1.43, created on 2022-06-27 14:51:00
  from 'C:\wamp64\www\bestplace\themes\theme_optima_electronic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9a7b4567d63_92800563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '008a1a8f7c77c79917e9f738433d847c786d36b7' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\themes\\theme_optima_electronic\\templates\\page.tpl',
      1 => 1655883512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9a7b4567d63_92800563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28315499062b9a7b454c3b7_44321922', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6957396162b9a7b4551b06_34994879 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_59659643062b9a7b454f423_23248913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6957396162b9a7b4551b06_34994879', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_26610400662b9a7b455a369_60616255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_163109623262b9a7b455cf04_05168759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_31171820762b9a7b45585d8_97797673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26610400662b9a7b455a369_60616255', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163109623262b9a7b455cf04_05168759', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_63455301862b9a7b4562ff7_85088506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_170557125762b9a7b45612a7_96436791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63455301862b9a7b4562ff7_85088506', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_28315499062b9a7b454c3b7_44321922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_28315499062b9a7b454c3b7_44321922',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_59659643062b9a7b454f423_23248913',
  ),
  'page_title' => 
  array (
    0 => 'Block_6957396162b9a7b4551b06_34994879',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_31171820762b9a7b45585d8_97797673',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_26610400662b9a7b455a369_60616255',
  ),
  'page_content' => 
  array (
    0 => 'Block_163109623262b9a7b455cf04_05168759',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_170557125762b9a7b45612a7_96436791',
  ),
  'page_footer' => 
  array (
    0 => 'Block_63455301862b9a7b4562ff7_85088506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59659643062b9a7b454f423_23248913', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31171820762b9a7b45585d8_97797673', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170557125762b9a7b45612a7_96436791', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
