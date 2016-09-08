<?php
    error_reporting(E_ERROR);
    date_default_timezone_set('America/Vancouver');
    if(count($_FILES) > 0)
    {
        $path = 'Upload/' . date('20ymdHis',time()) . '/';
        setcookie('mycookie', $path);
        if (!is_dir($path)) mkdir($path);
        $f = $_FILES['file'];
        $filename = $path . $f['name'];
        move_uploaded_file($f['tmp_name'], $filename);
        echo $path;
    }
    else
    {
        echo 'no files';
    }

?>