<div id="block-block-11" class="block block-block contextual-links-region first odd">
<!-- 以下是标签 -->
<div id="block-tagadelic-taxonomy-tagadelic-taxonomy" class="block block-tagadelic-taxonomy contextual-links-region odd">
<?php echo get_tag_taxonomy(); ?>
</div>
<!-- 以上是标签 -->



<!-- 以下是搜索框 -->
<div id="block-search-form" class="block block-search contextual-links-region even" role="search">
	<form action="/search/node" method="post" id="search-block-form" accept-charset="UTF-8">
		<div>
		<div class="container-inline">
	      	<h2 class="element-invisible">搜索表单</h2>
		    <div class="form-item form-type-textfield form-item-search-block-form">
		  		<label class="element-invisible" for="edit-search-block-form--2">搜索 </label>
		 		<input title="请输入您想搜索的关键词。" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" placeholder="搜索你喜欢的">
			</div>
			<input type="hidden" name="form_build_id" >
			<input type="hidden" name="form_token" >
			<input type="hidden" name="form_id" value="search_block_form">
		</div>
		</div>
	</form>
</div>
<!-- 以上是搜索框 -->



<div id="block-block-11-content">
	<ul class="waterfall-topic-list">
		<?php echo get_all_waterfall_article(); ?>
	</ul>
</div>
</div>