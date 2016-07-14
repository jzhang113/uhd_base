<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * ###  Full Width Wrappers  ###
 *
 * This page template that has 100% width wrappers, which effectively
 * divide the page up into sections to you can style with full width
 * backgrounds. AT Commerce uses markup similar to this to achieve
 * its style - its worth checking out to see how I did this.
 *
 * To use copy this to your subtheme and rename it page.tpl.php,
 * or enable this in theme settings under "Site Tweaks".
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
?>
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if ($page['menu_bar'] || $primary_navigation || $secondary_navigation): ?>
      <div id="nav-wrapper">
        <div class="container clearfix">
          <?php print render($page['menu_bar']); ?>
          <?php if ($primary_navigation): print $primary_navigation; endif; ?>
          <?php if ($secondary_navigation): print $secondary_navigation; endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if($page['leaderboard']): ?>
      <div id="leaderboard-wrapper">
        <div class="container clearfix">
          <?php print render($page['leaderboard']); ?>
        </div>
      </div>
    <?php endif; ?>


    <div id="featured-image" data-stellar-ratio=".9">
      <div class="fio featured-image-overlay"></div>
      <?php print render($page['featured_image']); ?>
    </div>

    <div id="header-wrapper">
      <div class="container clearfix">
        <header<?php print $header_attributes; ?>>

          <!-- start: UH&D title -->
          <h2 id="org-title">University Housing &amp; Dining</h2>
          <!-- end: UH&D title -->

          <!-- start: UH&D sites menu -->
          <ul id="uhd-sites-links">
            <li class="housing first">
              <a href="https://housing.uiowa.edu/">Housing</a>
            </li>
            <li class="dining">
              <a href="https://dining.uiowa.edu/">Dining</a>
            </li>
            <li class="catering">
              <a href="https://catering.uiowa.edu/">Catering</a>
            </li>
            <!-- <li class="vending">
              <a href="https://vending.uiowa.edu/">Vending</a>
            </li> -->
            <li class="mothership last">
              <a href="https://housing.uiowa.edu/uhd-admin/">UH&amp;D Admin</a>
            </li>
          </ul>
          <!-- end: UH&D sites menu -->

          <!--HERE-->

        <?php print render($page['header']); ?>

        </header>
      </div>
    </div>

    <div id="content-wrapper"><div class="container">

      <div id="uhd-title-bar">
        <?php if ($breadcrumb): ?>
          <?php print $breadcrumb; ?>
        <?php endif; ?>

        <a id="nav-link" href="#block-system-main-menu">Nav</a>

        <?php if ($site_logo || $site_name || $site_slogan): ?>
          <!-- start: Branding -->
          <div<?php print $branding_attributes; ?>>

            <?php if ($site_logo): ?>
              <div id="logo" data-stellar-ratio=".5">
                <?php print $site_logo; ?>
              </div>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
              <!-- start: Site name and Slogan hgroup -->
              <hgroup<?php print $hgroup_attributes; ?>>

                <?php if ($site_name): ?>
                  <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                <?php endif; ?>

                <?php if ($site_slogan): ?>
                  <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                <?php endif; ?>

              </hgroup><!-- /end #name-and-slogan -->
            <?php endif; ?>


          </div><!-- /end #branding -->
        <?php endif; ?>


      </div>

      <div id="columns"><div class="columns-inner clearfix">
        <div id="content-column"><div class="content-inner">



          <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
            <header<?php print $content_header_attributes; ?>>

              <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                <div id="tasks">

                  <?php if ($primary_local_tasks): ?>
                    <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($secondary_local_tasks): ?>
                    <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($action_links = render($action_links)): ?>
                    <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                  <?php endif; ?>

                </div>
              <?php endif; ?>
              <!-- Check to see if the title is being controlled elsewhere. -->
              <?php if (!empty($title_override)): ?>
              <?php else: ?>
                <h1 id="page-title"><?php print $title; ?></h1>
              <?php endif; ?>
            </header>
          <?php endif; ?>



          <?php if ($page['secondary_content']): ?>
            <div id="secondary-content-wrapper">
              <div class="container clearfix">
                <?php print render($page['secondary_content']); ?>
              </div>
            </div>
          <?php endif; ?>

          <?php print render($page['highlighted']); ?>

          <<?php print $tag; ?> id="main-content">

            <!-- Breadcrumbs don't live here anymore -->

            <?php if ($messages || $page['help']): ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>
            <?php endif; ?>

            <?php print render($title_prefix); ?>

            <!-- Tasks don't live here anymore -->

            <?php if ($content = render($page['content'])): ?>
              <div id="content">
                <?php print $content; ?>
              </div>
            <?php endif; ?>

            <?php print $feed_icons; ?>

            <?php print render($title_suffix); // Prints page level contextual links ?>

          </<?php print $tag; ?>>

          <?php print render($page['content_aside']); ?>

        </div></div>

        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>

      </div></div>
    </div></div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <footer<?php print $footer_attributes; ?>>
            <?php print render($page['footer']); ?>

            <div id="uhd_base_footer">
              <ul class="uhd-footer-links">
                <li class="home">
                  <a href="https://www.housing.uiowa.edu/"><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'uhd_base') . '/images/full-wordmark-wt.png'; ?>" title="University Housing &amp; Dining at The University of Iowa" alt="University Housing &amp; Dining at The University of Iowa" /></a>
                </li>
                <li class="admin"><h3><a href="https://housing.uiowa.edu/uhd-admin">UH&amp;D Admin</a></h3>
                  <ul>
                    <li><a href="https://housing.uiowa.edu/uhd-admin/employment-opportunities">Employment</a></li>
                    <li><a href="https://housing.uiowa.edu/uhd-admin/about-us">Organization</a></li>
                    <li><a href="https://housing.uiowa.edu/uhd-admin/uhd-policies">Policies &amp; Procedures</a></li>
                  </ul>
                </li>
                <li class="housing"><h3><a href="https://housing.uiowa.edu">Housing</a></h3>
                  <ul>
                    <li><a href="https://housing.uiowa.edu/living-learning-communities">Living Learning Communities</a></li>
                    <li><a href="https://housing.uiowa.edu/residence-halls">Residence Halls</a></li>
                    <li><a href="https://housing.uiowa.edu/life-iowa">Life@Iowa</a></li>
                  </ul>
                </li>
                <li class="dining"><h3><a href="https://dining.uiowa.edu">Dining</a></h3>
                  <ul>
                    <li><a href="https://dining.uiowa.edu">Locations</a></li>
                    <li><a href="https://dining.uiowa.edu/market-place-menus">Menus</a></li>
                    <li><a href="https://dining.uiowa.edu/meal-plan-rates">Meal Plan Info</a></li>
                  </ul>
                </li>
                <li class="last catering"><h3><a href="https://catering.uiowa.edu">Catering</a></h3>
                  <ul>
                    <li><a href="https://catering.uiowa.edu/menus">Menus</a></li>
                    <li><a href="https://imu.uiowa.edu/meetings/">Meetings</a></li>
                    <li><a href="https://catering.uiowa.edu/weddings/">Weddings</a></li>
                  </ul>
                </li>
                <!-- <li class="last vending"><h3>Vending</h3>
                  <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>

          </footer>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
