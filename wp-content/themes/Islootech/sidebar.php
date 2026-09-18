<?php
/**
 * The Right Sidebar displayed on page templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
            <div class="well sidebar-nav">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("sidebar-page");
                }
                ?>
            </div>
            
        </div>
    </div>
</div>