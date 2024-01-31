<?php
session_start();

$_SESSION = array();
session_destroy();
header('Location: /SPA301/index.php?action=login');