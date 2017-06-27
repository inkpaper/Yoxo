<div id="block-block-2" class="block block-block contextual-links-region odd">
    <div class="side-bar-article">
        <div class="side-bar-article-list">
            <p class="side-bar-article-title">
                最热文章
            </p>
            <ol class="side-bar-article-ol hot-article-list">
            <?php echo get_hot_article_list(); ?> 
            </ol>
        </div>
        <div class="side-bar-article-list">
            <p class="side-bar-article-title">
                最新文章
            </p>
            <ol class="side-bar-article-ol new-article-list">
            <?php echo get_new_article_list(); ?> 
            </ol>
        </div>
        <div class="side-bar-article-list">
            <p class="side-bar-article-title">
                随机文章
            </p>
            <ol class="side-bar-article-ol">
            <?php echo get_rand_article_list(); ?>
            </ol>
        </div>
    </div>
</div>