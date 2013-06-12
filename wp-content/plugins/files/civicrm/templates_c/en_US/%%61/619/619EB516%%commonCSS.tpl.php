<?php /* Smarty version 2.6.26, created on 2013-06-07 22:51:40
         compiled from CRM/common/commonCSS.tpl */ ?>
<?php if ($this->_tpl_vars['config']->userSystem->is_drupal == '1'): ?>
  <?php if ($this->_tpl_vars['config']->customCSSURL): ?>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->customCSSURL; ?>
" type="text/css" />
  <?php else: ?>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/deprecate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/civicrm.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/extras.css" type="text/css" />
  <?php endif; ?> 
<?php elseif ($this->_tpl_vars['config']->userFramework == 'Joomla'): ?>
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/deprecate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/civicrm.css" type="text/css" />
  <?php if (! $this->_tpl_vars['config']->userFrameworkFrontend): ?>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/joomla.css" type="text/css" />
  <?php else: ?>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/joomla_frontend.css" type="text/css" />
  <?php endif; ?>
  <?php if ($this->_tpl_vars['config']->customCSSURL): ?>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->customCSSURL; ?>
" type="text/css" />
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/extras.css" type="text/css" />
<?php endif; ?>