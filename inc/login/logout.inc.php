<?php

session_start();
session_unset();
session_destroy();
header("Location: ../../content.php?logout=sucess");
exit();