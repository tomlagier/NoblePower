<?php /* Smarty version 2.6.26, created on 2013-06-07 22:23:01
         compiled from CRM/Contact/Form/Edit/Address/address_name.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'CRM/Contact/Form/Edit/Address/address_name.tpl', 29, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['name'] )): ?>
  <tr>
      <td colspan="2">
        <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['name']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-address-name",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
<br />
        <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['name']['html']; ?>

      </td>
  </tr>
<?php endif; ?>