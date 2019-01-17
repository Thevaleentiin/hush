<?php
session_start();
session_destroy();
header('location: /hush/index.php');
