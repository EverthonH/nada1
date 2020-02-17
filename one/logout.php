<?php
session_start();
//unset
session_destroy();
header('Location: index.php');
exit();