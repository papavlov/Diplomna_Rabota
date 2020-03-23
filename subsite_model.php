<?php

//define( 'WP_CLI_ROOT', '/wp-cli' );
//include WP_CLI_ROOT . '/php/wp-cli.php';
shell_exec("wp site create --slug=subsite1");//creates new subsite
shell_exec("wp site create --title = Subsite 1");//sets the title of the new subsite
shell_exec("wp activate plugin hello");//activates plugin hello
shell_exec("wp user create root root@example.com --role=editor");//creates new user called root and gives him editor role which does not allow him to change the settings of the subsite or edit the plugins
//shell_exec("wp activate plugin hello --network");/*activates the plugin hello for the entire multisite network*/
?>
