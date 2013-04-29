<?php
/**
 * @file
 * Template for Harris-advanced Advanced.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display harris-advanced clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="harris-advanced-container harris-advanced-header clearfix panel-panel">
    <div class="harris-advanced-container-inner harris-advanced-header-inner panel-panel-inner">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="harris-advanced-container harris-advanced-middle-content clearfix">
    <div class="harris-advanced-column-middle-region harris-advanced-middle_first panel-panel">
      <div class="harris-advanced-column-middle-region-inner harris-advanced-middle_first-inner panel-panel-inner">
        <?php print $content['middle_first']; ?>
      </div>
    </div>
    <div class="harris-advanced-column-middle-region harris-advanced-middle_second panel-panel">
      <div class="harris-advanced-column-middle-region-inner harris-advanced-middle_second-inner panel-panel-inner">
        <?php print $content['middle_second']; ?>
      </div>
    </div>
  </div>

  <div class="harris-advanced-container harris-advanced-middle clearfix panel-panel">
    <div class="harris-advanced-container-inner harris-advanced-middle-inner panel-panel-inner">
      <?php print $content['middle_third']; ?>
    </div>
  </div>

  <div class="harris-advanced-container harris-advanced-column-content clearfix">
    <div class="harris-advanced-column-content-region harris-advanced-column1 panel-panel">
      <div class="harris-advanced-column-content-region-inner harris-advanced-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="harris-advanced-column-content-region harris-advanced-content panel-panel">
      <div class="harris-advanced-column-content-region-inner harris-advanced-content-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
    <div class="harris-advanced-column-content-region harris-advanced-column2 panel-panel">
      <div class="harris-advanced-column-content-region-inner harris-advanced-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
  </div>
  <div class="harris-advanced-container harris-advanced-footer clearfix panel-panel">
    <div class="harris-advanced-container-inner harris-advanced-footer-inner panel-panel-inner">
      <?php print $content['footer']; ?>
    </div>
  </div>

</div><!-- /.harris-advanced -->
