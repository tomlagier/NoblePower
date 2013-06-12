<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="span9">
<div id="post-0" class="post error404 not-found">
<h1 class="entry-title"><?php _e('Not Found', 'blankslate'); ?></h1>
<div class="entry-content">
<p><?php _e('Nothing found for the requested page. Try a search instead?', 'blankslate'); ?></p>
<?php get_search_form(); ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>