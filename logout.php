<?php
session_start();
session_unset();
session_destroy();

require_once('./../ordering_system/inc/loginScript.php');

redirect('login.php');
die();
