<?php /* Smarty version 2.6.26, created on 2013-06-07 22:26:16
         compiled from CRM/common/info.tpl */ ?>
<?php if ($this->_tpl_vars['infoMessage']): ?>
  <div class="messages status <?php echo $this->_tpl_vars['infoType']; ?>
"<?php if ($this->_tpl_vars['infoOptions']): ?> data-options='<?php echo $this->_tpl_vars['infoOptions']; ?>
'<?php endif; ?>>
    <div class="icon inform-icon"></div>
    <span class="msg-title"><?php echo $this->_tpl_vars['infoTitle']; ?>
</span>
    <span class="msg-text"><?php echo $this->_tpl_vars['infoMessage']; ?>
</span>
  </div>
<?php endif; ?>