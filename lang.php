<?php
$lang =isset($_GET['set']) ? $_GET['set']: 'EN';
/* session_save_path('/home/users/web/b782/ipg.sapientiacorporation/cgi-bin/tmp'); */
session_start();
$_SESSION['lang']=$lang;