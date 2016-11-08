<?php
    ob_start();
    date_default_timezone_set('America/Vancouver');
    $path = $_COOKIE['mycookie'];
    if (!is_dir($path)){
        $path = 'Upload/' . date('20ymdHis',time()) . '/';
        mkdir($path);
    }
    $path = './' . $path. 'info.txt';
    $myfile = fopen($path, "w") or die("Unable to open file!");
    $Info = json_decode($_POST["info"]);

    $txt = "name: ".$Info->name."\r\n".
            "phone: ".$Info->phone."\r\n".
            "wechat: ".$Info->wechat."\r\n".
            "subject: ".$Info->subject."\r\n".
            "email: ".$Info->email."\r\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    setcookie('mycookie');

    //send email to info@victutors.com
    $message = wordwrap($txt, 70, "\r\n");
    mail('info@victutors.com', 'New tutor just registered', $message);

    echo "OK"
?>