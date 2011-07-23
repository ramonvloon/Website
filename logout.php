<?
session_start();
session_destroy(); //stopt de sessie en gaat naar het loginscherm
header("location:login.php");
?>