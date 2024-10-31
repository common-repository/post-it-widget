<?php
/*
Plugin Name: Add Post widget
Plugin URI: http://phppoet.com/post-it-widget-wordpress-plugin/
Description: this plugin will allow you to create a widget which will alow admin , subscribers , contributors to post from sidebar widget . 
Version: 1.2.5
Author: Parbat patel
Author URI: http://phppoet.com
Author email:admin@fastanswers.net
License: GPLv2

Post it widget wordpress plugin
Copyright (C) 2012, parbat patel - admin@fastanswers.net

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**********************
* Global variables  ***
**********************/
$piw_prefix = 'piw_';
$piw_plugin_name="post widget";
$piw_options = get_option('piw_settings'); // Retrive our plugins options from database

/**********************
*include scripts file*
**********************/

include ('piw-scripts.php');

/**********************
*include other files***
**********************/


include ('piw-adminsettings.php');

/**********************
*Create Plugin links***
**********************/

include ('piw-pluginlinks.php');

/**********************
*include function file*
**********************/

include ('piw-functions.php');
include ('piw-extra-functions.php');

/**********************
*include plugin options page*
**********************/

include ('piw-plugin-options.php');


?>