<?php
session_start();
function redirect($url) {
	header("Location: ". $url);
	exit();
}
function login_check() {
	if (!isset($_SESSION['admin_id'])) {
		redirect('404.php');
	}
}

function login_check2() {
	if (isset($_SESSION['admin_id'])) {
		redirect('adminPg.php');
	}
}
function redc_index(){
    redirect('index.php');
}


?>