
<?php 
    $node=$result ['node'];
    $image_uri = $node->field_image['und'][0]['uri'];
    $image_uri = file_create_url($image_uri);
    $author_img = get_author_image($node->uid);
    $comment_count = $node->comment;
 ?>
 
<!-- <li class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <h3 class="title"<?php print $title_attributes; ?>>
        <a href="<?php print $url; ?>" ><?php print $title;?></a>
    </h3>
    <?php print render($title_suffix); ?>
    <div class="search-snippet-info">
        <?php if ($snippet): ?>
            <p class="search-snippet"<?php print $content_attributes; ?>><?php print $snippet; ?></p>
        <?php endif; ?>
        <p class="clearfix meta-info">
            <a class="link" href="<?php print $url; ?>" target="_blank"><?php print $url; ?></a>
            <span class="time">
                <?php
                $date = date_create_from_format('m/d/Y - H:i', $info_split['date']);
                print date_format($date, 'Y.m.d');
                ?></span>
        </p>
    </div>
</li> -->

<li>
    <img class='content-image-uri' src=<?php print $image_uri;?>>
    <div class='content-image-title'><?php print $title;?></div>
    <div class='content-create-time'><?php
                $date = date_create_from_format('m/d/Y - H:i', $info_split['date']);
                print date_format($date, 'Y.m.d H:i');
                ?></div>
    <img class='content-author-img' src=<?php print $author_img;?>>
    <div class='content-author-name'><?php print $info_split['user'];?></div>
    <a class='content-attention-button' href='#'>关注</a>
    <div class='author-message'>
        <span class='content-article-favorite'>33</span>
        <span class='content-article-comment'><?php print $comment_count ;?></span>
        <span class='content-article-browse'>2333</span>
    </div>
</li>