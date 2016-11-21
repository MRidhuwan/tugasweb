<?php
error_reporting(E_ALL^(E_NOTICE | E_WARNING));
session_start();

if (!isset($_SESSION['username']))
{
	header("location:./index.html");
	exit;
}
?>