<div id="wrap">

  <div id="header-wrap">
    <div id="header-wrap-inner">
      <header id="header">
        <div id="site-info">
          <?php if ($logo): ?>
            <div id="site-logo">
              <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>">
                <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
              </a>
            </div>
          <?php endif; ?>
          <?php if ($site_name || $site_slogan): ?>
            <div id="site-name-slogan">
              <?php if ($site_name): ?>
                <div id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>">
                    <?php print $site_name; ?>
                  </a>
                </div>
              <?php endif; ?>
              <?php if ($site_slogan): ?>
                <div id="site-slogan">
                  <?php print $site_slogan; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <div class="clearfix"></div>
        </div>

        <div id="site-navigation-wrap">
          <div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
          <a href="#sidr-main" id="navigation-toggle">
            <span class="fa fa-bars"></span>Menu
          </a>
          <nav id="site-navigation" role="navigation">
            <div id="main-menu">
              <?php
              $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              print drupal_render($main_menu_tree);
              ?>
              <div class="clearfix"></div>
            </div>
          </nav>
        </div>
        <div class="clearfix"></div>
      </header>
    </div>
  </div>

  <?php if ($is_front): ?>
    <?php if (theme_get_setting('slideshow_display', 'multipurpose')): ?>
      <div id="homepage-slider-wrap" class="clr flexslider-container">
        <div id="homepage-slider" class="flexslider">
          <ul class="slides clr">
            <li>
              <img src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/slide-image-1.jpg'; ?>">
            </li>
            <li>
              <img src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/slide-image-2.jpg'; ?>">
            </li>
            <li>
              <img src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/slide-image-3.jpg'; ?>">
            </li>
          </ul>
        </div>
      </div>
    <?php endif; ?>

    <div class="front-page-header">
      <div class="front-page-header-inner">
        <div class="front-page-header-wrapper">
          <div class="front-page-header-wrapper-inner">
            <h1>TKD Fénix</h1>
            <h2>Začni s námi cvičit!</h2>
            <h3>První 2 týdny zcela zdarma</h3>
            <div class="front-page-header-wrapper-inner-button"><a href="/chci-zacit">Jdu do toho!</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="front-page-about-us">
      <div class="front-page-about-us-inner">
        <div class="front-page-about-us-inner-header">
          <?php
          $block = block_load('block', '14');
          $output = _block_get_renderable_array(_block_render_blocks(array($block)));
          print drupal_render($output);
          ?>
        </div>
        <div class="front-page-about-us-inner-cols">
          <div class="front-page-about-us-inner-col front-page-about-us-inner-col-1">
            <div class="front-page-about-us-inner-col-inner">
              <div class="front-page-about-us-inner-icon">
                <a href="#co-je-tkd">
                  <img src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/tkd-icon.svg'; ?>">
                </a>
              </div>
              <?php
              $block = block_load('block', '3');
              $output = _block_get_renderable_array(_block_render_blocks(array($block)));
              print drupal_render($output);
              ?>
            </div>
          </div>
          <div class="front-page-about-us-inner-col front-page-about-us-inner-col-2">
            <div class="front-page-about-us-inner-col-inner">
              <div class="front-page-about-us-inner-icon">
                <a href="#proc-trenovat-s-nami"><i class="fa fa-shield"></i></a>
              </div>
              <?php
              $block = block_load('block', '4');
              $output = _block_get_renderable_array(_block_render_blocks(array($block)));
              print drupal_render($output);
              ?>
            </div>
          </div>
          <div class="front-page-about-us-inner-col front-page-about-us-inner-col-3">
            <div class="front-page-about-us-inner-col-inner">
              <div class="front-page-about-us-inner-icon">
                <a href="/chci-zacit"><i class="fa fa-question"></i></a>
              </div>
              <?php
              $block = block_load('block', '5');
              $output = _block_get_renderable_array(_block_render_blocks(array($block)));
              print drupal_render($output);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>


  <?php if ($page['preface_first'] || $page['preface_middle'] || $page['preface_last'] || $page['header']): ?>
    <div id="preface-wrap" class="site-preface clr">
      <div id="preface" class="clr">
        <?php if ($page['preface_first'] || $page['preface_middle'] || $page['preface_last']): ?>
          <div id="preface-block-wrap" class="clr">
            <?php if ($page['preface_first']): ?><div class="span_1_of_3 col col-1 preface-block ">
              <?php print render($page['preface_first']); ?>
              </div><?php endif; ?>
            <?php if ($page['preface_middle']): ?><div class="span_1_of_3 col col-2 preface-block ">
              <?php print render($page['preface_middle']); ?>
              </div><?php endif; ?>
            <?php if ($page['preface_last']): ?><div class="span_1_of_3 col col-3 preface-block ">
              <?php print render($page['preface_last']); ?>
              </div><?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if ($page['header']): ?>
          <div class="preface-wrap-inner">
            <?php print render($page['header']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>


  <div id="main" class="site-main clr">
    <?php
    $sidebarclass = "";
    if ($page['sidebar_first']) {
      $sidebarclass = "left-content";
    }
    ?>
    <div id="primary" class="content-area clr">
      <section id="content" role="main" class="site-content <?php print $sidebarclass; ?> clr">
        <?php if (theme_get_setting('breadcrumbs')): ?><?php if ($breadcrumb): ?><div id="breadcrumbs"><?php print $breadcrumb; ?></div><?php endif; ?><?php endif; ?>
        <?php print $messages; ?>
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <div id="content-wrap">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clr"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </section>

      <?php if ($page['sidebar_first']): ?>
        <aside id="secondary" class="sidebar-container" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside> 
      <?php endif; ?>
    </div>
  </div>

  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer']): ?>
    <div id="footer-wrap" class="site-footer clr">
      <div id="footer" class="clr">
        <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?>
          <div id="footer-block-wrap" class="clr">
            <?php if ($page['footer_first']): ?><div class="span_1_of_3 col col-1 footer-block ">
              <?php print render($page['footer_first']); ?>
              <?php if (theme_get_setting('socialicon_display', 'multipurpose')): ?>
                <?php
                $twitter_url = check_plain(theme_get_setting('twitter_url', 'multipurpose'));
                $facebook_url = check_plain(theme_get_setting('facebook_url', 'multipurpose'));
                $youtube_url = check_plain(theme_get_setting('youtube_url', 'multipurpose'));
                $instagram_url = check_plain(theme_get_setting('instagram_url', 'multipurpose'));
                ?>
                  <div id="footer-social">
                    <div class="footer-social-share">Najdete nás na:</div>
                    <ul>
                      <?php if ($facebook_url): ?><li>
                          <a target="_blank" title="<?php print $site_name; ?> na Facebooku" href="<?php print $facebook_url; ?>"><img alt="Facebook" src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/social/black/facebook.svg'; ?>"> </a>
                        </li><?php endif; ?>
                      <?php if ($twitter_url): ?><li>
                          <a target="_blank" title="<?php print $site_name; ?> na Twitteru" href="<?php print $twitter_url; ?>"><img alt="Twitter" src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/social/black/twitter.svg'; ?>"> </a>
                        </li><?php endif; ?>
                      <?php if ($youtube_url): ?><li>
                          <a target="_blank" title="<?php print $site_name; ?> na Youtube" href="<?php print $youtube_url; ?>"><img alt="Google+" src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/social/black/youtube.svg'; ?>"> </a>
                        </li><?php endif; ?>
                      <?php if ($instagram_url): ?><li>
                          <a target="_blank" title="<?php print $site_name; ?> na Instagramu" href="<?php print $instagram_url; ?>"><img alt="Pinterest" src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/images/social/black/instagram.svg'; ?>"> </a>
                        </li><?php endif; ?>
                    </ul>
                  </div>
                <?php endif; ?>
              </div><?php endif; ?>
            <?php if ($page['footer_second']): ?><div class="span_1_of_3 col col-2 footer-block ">
              <?php print render($page['footer_second']); ?>
              </div><?php endif; ?>
            <?php if ($page['footer_third']): ?><div class="span_1_of_3 col col-3 footer-block ">
              <?php print render($page['footer_third']); ?>
              </div><?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($page['footer']): ?>
          <div class="span_1_of_1 col col-1">
            <?php print render($page['footer']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <footer id="copyright-wrap" class="clear">
    <div id="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></a>. <?php print t('Support & Management'); ?>  <a href="http://www.klepikov.cz/" title="Alexandr Klepikov" target="_blank">Alexandr Klepikov</a>.</div>
  </footer>
</div>