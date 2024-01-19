<?php

session_start();

session_destroy();

header("Location: home page\index.php");
exit;