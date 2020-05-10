<?php

define( 'WP_CLI_ROOT', 'wp-cli' );
include WP_CLI_ROOT . '';

$output = shell_exec("wp site create --slug=subsite1");//creates new subsite
shell_exec("wp --title = Subsite 1");//sets the title of the new subsite
shell_exec("wp activate plugin hello");//activates plugin hello
shell_exec("wp user create root root@example.com --role=editor");//creates new user called root and gives him editor role which does not allow him to change the settings of the subsite or edit the plugins
echo "<pre>".$output."</pre>";

/*<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'paypal-integration/v1', '/subsite/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'create_subsite',
  ) );
} );*/

/*$output2 = shell_exec("wp site create --title = Subsite 1");//sets the title of the new subsite
echo "<pre>".$output."</pre>";
$output3 = shell_exec("wp activate plugin hello");//activates plugin hello
echo "<pre>".$output."</pre>";
$output4 = shell_exec("wp user create root root@example.com --role=editor");//creates new user called root and gives him editor role which does not allow him to change the settings of the subsite or edit the plugins
echo "<pre>".$output4."</pre>";*/

//shell_exec("wp activate plugin hello --network");/*activates the plugin hello for the entire multisite network*/
//wpmu_create_blog( $domain, $path, $title, $user_id, $options = array(), $network_id = 1 );
?>
