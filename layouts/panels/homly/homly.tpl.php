<?php
/**
 * @file
 * Template for default Panopoly homly.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display homly clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="homly-container homly-top clearfix">
    <div class="homly-top-region homly-headertop panel-panel">
      <div class="homly-top-region-inner homly-top-inner panel-panel-inner">
        <?php print $content['headertop']; ?>
      </div>
    </div>
    <div class="homly-top-region homly-headerfirst panel-panel">
      <div class="homly-top-region-inner homly-headerfirst-inner panel-panel-inner">
        <?php print $content['headerfirst']; ?>
      </div>
    </div>
    <div class="homly-top-region homly-headersecond panel-panel">
      <div class="homly-top-region-inner homly-headersecond-inner panel-panel-inner">
        <?php print $content['headersecond']; ?>
      </div>
    </div>
  </div>

  <div class="homly-container homly-middle clearfix">
    <div class="homly-middle-region homly-columntop panel-panel">
      <div class="homly-middle-region-inner homly-columntop-inner panel-panel-inner">
        <?php print $content['columntop']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-column1 panel-panel">
      <div class="homly-middle-region-inner homly-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-column2 panel-panel">
      <div class="homly-middle-region-inner homly-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-column3 panel-panel">
      <div class="homly-middle-region-inner homly-column3-inner panel-panel-inner">
        <?php print $content['column3']; ?>
      </div>
    </div>
  </div>

  <div class="homly-container homly-middle clearfix">
    <div class="homly-middle-region homly-postcolumntop panel-panel">
      <div class="homly-middle-region-inner homly-postcolumntop-inner panel-panel-inner">
        <?php print $content['postcolumntop']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-postcolumn1 panel-panel">
      <div class="homly-middle-region-inner homly-postcolumn1-inner panel-panel-inner">
        <?php print $content['postcolumn1']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-postcolumn2 panel-panel">
      <div class="homly-middle-region-inner homly-postcolumn2-inner panel-panel-inner">
        <?php print $content['postcolumn2']; ?>
      </div>
    </div>
    <div class="homly-middle-region homly-postcolumn3 panel-panel">
      <div class="homly-middle-region-inner homly-postcolumn3-inner panel-panel-inner">
        <?php print $content['postcolumn3']; ?>
      </div>
    </div>
  </div>

  <div class="homly-container homly-footer clearfix">
    <div class="homly-footer-region homly-footer-column1 panel-panel">
      <div class="homly-footer-region-inner homly-footer-column1-inner panel-panel-inner">
        <?php print $content['footercolumn1']; ?>
      </div>
    </div>
    <div class="homly-footer-region homly-footer-column2 panel-panel">
      <div class="homly-footer-region-inner homly-footer-column2-inner panel-panel-inner">
        <?php print $content['footercolumn2']; ?>
      </div>
    </div>
    <div class="homly-footer-region homly-footer-column3 panel-panel">
      <div class="homly-footer-region-inner homly-footer-column3-inner panel-panel-inner">
        <?php print $content['footercolumn3']; ?>
      </div>
    </div>
  </div>

</div><!-- /.homly -->
