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
    $txt = "name: ".$_POST["name"]."\r\n";
    fwrite($myfile, $txt);
    $txt = "phone: ".$_POST["phone"]."\r\n";
    fwrite($myfile, $txt);
    $txt = "email: ".$_POST["email"]."\r\n";
    fwrite($myfile, $txt);
    $txt = "wechat: ".$_POST["wechat"]."\r\n";
    fwrite($myfile, $txt);
    $txt = "subject: ".$_POST["subject"];
    fwrite($myfile, $txt);
    fclose($myfile);
    setcookie('mycookie');
    echo "
         <html lang='zh-CN'>
         <meta charset='UTF-8'>
            <div style = 'text-align:center'><font size='6' color='red'>
            <p >上传成功! 谢谢您的支持，我们将在24小时内更新您的信息</p>

            <p>您将在 <span id='counter'> 3</span> 秒后返回主页.</p>
            <script type='text/javascript'>
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=1) {
                    location.href = 'index.php';
                }
                i.innerHTML = parseInt(i.innerHTML)-1;
            }
            setInterval(function(){ countdown(); },900);
            </script>
            </div>
        </html>

        "
    //header('Location: index.php');
    //exit();
?>