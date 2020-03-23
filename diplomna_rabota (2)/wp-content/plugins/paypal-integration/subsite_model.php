<?php

define( 'WP_CLI_ROOT', '/wp-cli' );
include WP_CLI_ROOT . '';

$output = shell_exec("wp site create --slug=subsite1");//creates new subsite
shell_exec("wp --title = Subsite 1");//sets the title of the new subsite
shell_exec("wp activate plugin hello");//activates plugin hello
shell_exec("wp user create root root@example.com --role=editor");//creates new user called root and gives him editor role which does not allow him to change the settings of the subsite or edit the plugins
echo "<pre>".$output."</pre>";

/*$output2 = shell_exec("wp site create --title = Subsite 1");//sets the title of the new subsite
echo "<pre>".$output."</pre>";
$output3 = shell_exec("wp activate plugin hello");//activates plugin hello
echo "<pre>".$output."</pre>";
$output4 = shell_exec("wp user create root root@example.com --role=editor");//creates new user called root and gives him editor role which does not allow him to change the settings of the subsite or edit the plugins
echo "<pre>".$output4."</pre>";*/

//shell_exec("wp activate plugin hello --network");/*activates the plugin hello for the entire multisite network*/
?>
