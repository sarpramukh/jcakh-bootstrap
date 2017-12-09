  `         <?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './dbFile.php';
echo 'Login Successfully';
?>
<a href="index.php<?php session_destroy();?>"> LogOut </a>
<?php
echo '<br/>';
/* @var $_SESSION type */
echo 'Welcome '. \dbSelect($conn, $_SESSION['username']);
echo '<br/>';
