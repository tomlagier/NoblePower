<?php /* Smarty version 2.6.27, created on 2013-06-12 17:44:53
         compiled from CRM/common/wysiwyg.tpl */ ?>

<?php if ($this->_tpl_vars['includeWysiwygEditor']): ?>
    <?php if ($this->_tpl_vars['defaultWysiwygEditor'] == 1): ?>
        <script>
                    if (typeof(jQuery) != 'function')
            var jQuery = cj;
        </script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
packages/tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
packages/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
    <?php elseif ($this->_tpl_vars['defaultWysiwygEditor'] == 2): ?>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
packages/ckeditor/ckeditor.js"></script>
    <?php endif; ?>
<?php endif; ?>