<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <header class="header" id="header" role="banner">
    <div class="header_layout">
      <div id="page-logo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>
      </div>

      <div class="my_header">
        <?php print render($page['header']); ?>
      </div>
    </div>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    

  </header>

  <div id="main">

    <div id="navigation">
      <div id="nav-superfish">
        <?php print render($page['navigation']); ?>
      </div>

      <?php if(!$is_front){ ?>
        <div id="nav-breadcrumb">
          <?php print $breadcrumb; ?>
        </div>
      <?php } ?>

    </div>

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      
      <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>
      
      <a id="main-content"></a>
      <?php if(!$is_front){ ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?> 
      <?php print render($title_suffix); ?>
      <?php } ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      
    </div>
      <?php print $feed_icons; ?>
    </div>

    

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>

    <div id="gray"></div>
    
    <div class="popup" id="popup">
      <div class="popup-content">
        <div class="left-nav" id='left_nav'>
            <img src="../sites/all/themes/yoxo/images/login-logo.png"/>
        </div>

        <div class="right-min" id="right-min">
          <a class="guanbi"></a>
          <ul>
            <li>登录</li>
            <li>注册</li>
          </ul>
          <div class="tabCon">
            <form action="/user" method="post" id="user-login" accept-charset="UTF-8">
              <div>
                <div class="form-item form-type-textfield form-item-name">
                  <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required"></div>
                <div class="form-item form-type-password form-item-pass">
                  <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required"></div>
                <input type="hidden" name="form_build_id" value="">
                <input type="hidden" name="form_id" value="user_login">
                <div class="form-password"><a>忘记密码？</a></div>
                <div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="登录" class="form-submit"></div>
              </div>
            </form>
           
            <form class="user-info-from-cookie" enctype="multipart/form-data" action="/user/register" method="post" id="user-register-form" accept-charset="UTF-8">
              <div>
                <div id="edit-account" class="form-wrapper">
                  <div class="form-item form-type-textfield form-item-name">
                    <input class="username form-text required" type="text" id="edit-name" name="name" value="" size="60" maxlength="60"> 
                  </div>
                <div class="form-item form-type-textfield form-item-mail">
                    <input type="text" id="edit-mail" name="mail" value="" size="60" maxlength="254" class="form-text required"> 
                </div>
                <input type="hidden" name="timezone" value="Asia/Shanghai">
              </div>
              <input type="hidden" name="form_build_id" value="">
              <input type="hidden" name="form_id" value="user_register_form">
              <div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="注册" class="form-submit"></div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>

    
   
