<?php
$reversed = strrev($_POST['input']);
header('Location: http://' . $_SERVER['HTTP_HOST'] . "/reverse.php?reversed=$reversed");