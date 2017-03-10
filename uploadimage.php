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
        move_uploaded_file(

            // this is where the file is temporarily stored on the server when uploaded
            // do not change this
            $_FILES['file']['tmp_name'],

            // this is where you want to put the file and what you want to name it
            // in this case we are putting in a directory called "uploads"
            // and giving it the original filename
            $path . $_FILES['file']['name']
        );
        echo $path;
    }
    else
    {
        echo 'no files';
    }
?>