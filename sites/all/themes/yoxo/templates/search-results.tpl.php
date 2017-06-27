<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<?php

$results_count= 0;
 foreach ($results as $key => $value) {
  $results_count++;
}
 ?>
<?php if ($search_results): ?>
  <div class="search-counts">共搜索到<?php print_r($results_count) ; ?>条结果</div>
  <ul class="quicktabs-search">
  <li class="first">
    <a id="quicktabs-pb" >瀑布流</a></li>
  <li class="last">
    <a id="quicktabs-tw" >图文</a></li>
</ul>

<?php endif; ?>

<div class="drupal-search-page">
    <?php if ($search_results): ?>
      <ol class="search-results waterfall-topic-list <?php print $module; ?>-results">
        <?php print $search_results; ?>
      </ol>
      <div class="cuhksz-page">
        <?php print $pager; ?>
      </div>
    <?php else : ?>
      <h2><?php print t('Your search yielded no results');?></h2>
      <?php print search_help('search#noresults', drupal_help_arg()); ?>
    <?php endif; ?>
</div>

