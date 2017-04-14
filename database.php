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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script type="text/javascript" src="./javascript/victutors.js"></script>
    <script src="./lib/Javascript/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./javascript/victutors.database.js"></script>
    <script type="text/javascript" src="./javascript/victutors.utils.js"></script>
    <script type="text/javascript" src="./javascript/victutors.list.js"></script>
    <script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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
<body id="mainbody" style="zoom:90%">
    <!-- Content -->
    <div id="mainContent" class="w3-content w3-container" style="max-width: 1080px; margin-top: 70px; margin-bottom: 100px">
        <div class="container-fluid">
            <div>
                <div class="w3-card-8" style="background-color:red; border:none">
                    <h2 style="color:white"><b>免责声明:</b></h2>
                    <h3 style="color:white"><b>因为资源有限,目前只提供CSC课程相关资料.对您照成的不便我们深感歉意.</b></h3>
                    <p style="color:white">Victutors创建本题库只为内部学习交流使用，不得用于任何商业用途</p>
                    <p style="color:white">本题库试题作业资源由各位CSC战友提供。资源来之不易，望各位战友万加珍惜</p>
                    <p style="color:white">同时也恳请各位战友匿名分享习题资源，学CSC不易，多一份习题，多一些拿高分的可能性</p>
                    <p style="color:white">部分题库资源可在UVic官网（www.uvic.ca）搜索找到</p>
                </div>
            </div>
            <div class="w3-card-12 w3-hover-shadow w3-white">
                <div class="w3-row">
                    <div class="w3-col m6">
                        <div class="w3-center w3-container">
                            <h2 style="margin-bottom:30px" class="w3-xxlarge">选择科目 <i class="fa fa-search" aria-hidden="true"></i></h2>
                            <select id="selecter" class="selectpicker show-tick show-menu-arrow" data-width="400px" title="请选择科目,文件类型后点击搜索" data-live-search="true"></select>
                        </div>
                    </div>
                    <div class="w3-col m3">
                        <ul style="text-align:left !important; margin-left:20%; margin-top:10%; list-style-type: none;" class="w3-center">
                            <li style="margin-top:10%">
                                <input id="filter_all" type="checkbox" data-toggle="toggle" data-on="ALL" data-off="ALL" data-width="120">
                            </li>
                            <li style="margin-top:10%">
                                <input id="filter_assignment" type="checkbox" data-toggle="toggle" data-on="Assignment" data-off="Assignment" data-width="120">
                            </li>
                            <li style="margin-top:10%">
                                <input id="filter_exam" type="checkbox" data-toggle="toggle" data-on="Exam" data-off="Exam" data-width="120">
                            </li>
                        </ul>
                    </div>
                    <div class="w3-center w3-col m3">
                        <button onclick="victutors.database.getDoc()" style="margin-right:10px;margin-top:30%" class="w3-hover-red w3-teal w3-btn w3-xlarge">搜索</button>
                        <button onclick="victutors.database.getDocAll()" style="margin-top:30%" class="w3-hover-red w3-teal w3-btn w3-xlarge">显示全部</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="docList" class="container-fluid"></div>
    </div>

    <?php include 'Include/footer.php'; ?>
	<?php include 'Include/modals.php'; ?>
    <?php include 'Include/alerts.php'; ?>
</body>
</html>