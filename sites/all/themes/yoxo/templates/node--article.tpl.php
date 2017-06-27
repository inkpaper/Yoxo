<article class="node node-article <?php echo is_sticky();?> view-mode-full node-by-viewer clearfix">

<!-- JiaThis Button BEGIN -->
<div class="article-share">
<div class="jiathis_style_24x24">
	
	<a class="jiathis_button_cqq"></a>
	<a class="jiathis_button_weixin"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
</div>
<!-- JiaThis Button END -->
<?php echo get_article_page_html(); ?>
<?php echo get_article_author_mes_html(); ?>
<?php echo get_article_related_html(); ?>
<?php print render($content['comments']); ?>
<?php if (! $user->uid and ! $content['comments']): ?>
    <?php print render($content['links']); ?>
  <?php endif; ?>

</article>