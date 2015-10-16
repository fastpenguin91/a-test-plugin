<?php
/*
  Plugin Name: A Test Plugin
*/

add_action( 'admin_notices', 'hello_world' );

function hello_world(){
	echo "Hello world!!!";
}


?>