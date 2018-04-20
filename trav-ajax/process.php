<?php

echo 'Processing...';

if( isset( $_GET['name'] ) ) {
	echo 'Get: Your name is ' . $_GET['name'];
}

if( isset( $_POST['name'] ) ) {
	echo 'Post: Your name is ' . $_POST['name'];
}
