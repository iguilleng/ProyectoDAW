<?php
	session_start();
	session_destroy();
	header ('location:http://localhost/proyecto/index.html');
?>