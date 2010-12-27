<?php 
/*
 Plugin Name: Demo Plugin Menu
 Plugin URI: http://website-in-a-weekend.net/demo-plugins/
 Description: A brief description of the Plugin.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  
Copyright (c) 2009, David M. Doolin
http://website-in-a-weekend.net/

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, 
are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, 
this list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright 
notice, this list of conditions and the following disclaimer in the 
documentation and/or other materials provided with the distribution.

* Neither the name of Website In A Weekend nor the names of its contributors 
may be used to endorse or promote products derived from this software 
without specific prior written permission.


THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, 
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR 
PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR 
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, 
EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, 
PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR 
PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY 
OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING 
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS 
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
 
// FirePHP initialization. 
//require_once('FirePHPCore/FirePHP.class.php');
//ob_start();


if (!class_exists("demo_plugin_menu")) {

    class demo_plugin_menu {
    
        function demo_plugin_menu() {
            add_action('admin_menu', array(&$this, 'add_demo_menu'));
        }
        

        function add_demo_menu() {
            if (function_exists('add_menu_page')) {
              
                add_menu_page('Menu Page Title', 'Menu Title', 
                      'administrator', __FILE__, 
                array(&$this, 'demo_menu_page'), 
                WP_PLUGIN_URL.'/demo-plugin-adminmenu/award_star_gold_1.ico');
                
                add_submenu_page(__FILE__, 'Page Title', 'Submenu Title', 
                      'administrator', 'submenu_handle', 
                array(&$this, 'demo_submenu_page'));
            }
        }
    
        function demo_menu_page() {    
      ?>
      <div class="wrap">
          <h2>Demo Menu Page</h2>
          Does nothing but demonstrate menu.
      </div>
      <?php 
        }

        function demo_submenu_page() {
      ?>
      <div class="wrap">
          <h2>Demo Submenu Page</h2>
          Does nothing but demonstrate submenu. 
      </div>
      <?php 
        }
    }
}

$wpdpd = new demo_plugin_menu();


?>