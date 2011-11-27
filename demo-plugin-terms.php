<?php
/*
 Plugin Name: Demo Plugin Terms
 Plugin URI: http://website-in-a-weekend.net/demo-plugins/demo-plugin-paths/
 Description: Utility plugin for keeping track of paths and constants in WordPress plugin development.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  Copyright 2009 David M. Doolin  (email : david.doolin@gmail.com)
 * Public domain.  Use this code. Make billions. Pay it forward.
 */



if (!class_exists("demo_plugin_terms")) {
	
    class demo_plugin_terms {

        function demo_plugin_terms() {
            add_action('admin_menu', array(&$this, 'on_admin_menu'));
        }

        function on_admin_menu() {
            add_options_page('Demo Terms Page', 'Demo Terms', 'administrator', __FILE__ , array (&$this, 'paths_options'));
        }

        function paths_options() {
        	/**
        	 * Move all the html to it's own
        	 * file, makes everything much cleaner.
        	 */
            include('terms.php');	
		}
        
    }
	
}
					
					
$wpdpd = new demo_plugin_terms();

?>
