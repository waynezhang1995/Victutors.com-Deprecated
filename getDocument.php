<?php
    error_reporting(E_ERROR);
    $path = './Database/CSC';
    $files = array_diff(scandir($path), array('.', '..'));
    echo json_encode($files);
?>