<!DOCTYPE html>

<html id="mainPage" lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Enable Mobile Version !!!     <meta name="viewport" content="width=device-width, initial-scale=1">      -->

    <title>victutors - 维多利亚家教网 !</title>
    <link rel="stylesheet" href="./lib/CSS/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/custom.css">
    <link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script type="text/javascript" src="./javascript/victutors.js"></script>
    <script src="./lib/Javascript/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./javascript/victutors.Tutorlist.js"></script>
    <script type="text/javascript" src="./javascript/victutors.list.js"></script>
    <script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
    <script type="text/javascript" src="./javascript/victutors.utils.js"></script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Lato", sans-serif
        }
    </style>
</head>

<?php include 'Include/header.php' ;?>
<!-- Contact staff button -->
<div id="serviceButton" class="w3-theme-border w3-animate-left">
    <button onmouseover="victutors.Tutorlist.ShowHideServerPanel(1)" class="w3-center w3-border w3-btn w3-large"><b>联<br>系<br>客<br>服</b>
			</button>
</div>

<!-- Contact staff slidng panel -->
<nav id="services" class="w3-border w3-sidenav Server-PanelTutorList">
    <a onclick="victutors.Tutorlist.ShowHideServerPanel(0)" class="w3-right w3-closenav w3-text-white">Close &times;</a>
    <p class="w3-left w3-large w3-text-white" style="margin:0"><b>寻找太麻烦？</b></p>
    <img class="w3-left" src="./Images/WeChat.png">
    <a onclick="document.getElementById('ContactUsModal').style.display='block'" class="w3-right w3-text-white help">点击联系我们<br>我们来帮您!<br>请联系客服</a>
</nav>

<body id="mainbody">
    <!-- Content -->
    <div id="mainContent" class="w3-content w3-container">
        <p class="w3-text-white w3-xlarge" id="title"></p>
        <div id="searchTags">
        </div>
        <div id="TutorListAll">
        </div>
    </div>

	<?php include 'Include/footer.php'; ?>
    <?php include 'Include/modals.php'; ?>
    <?php include 'Include/alerts.php'; ?>
</body>

</html>