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

<div class="w3-container">
    <nav id="TopNavBar" class="w3-xlarge navbar-inverse navbar navbar-fixed-top w3-white">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php"><img id="victutors_icon" style="float:left;margin-top:9px;margin-right:6px" class="w3-left" src="./Images/victutors_icon.png" alt="victutors_Icon" width="10%">
                    <a class="w3-xlarge navbar-brand" href="index.php">
                        <font color="black">victutors.com</font>
                    </a>
            </div>
            <ul class="w3-right nav navbar-nav " style="right:0px;position:absolute">
                <li id="NavSearchPanel" style="margin-right:10px;margin-top:8px">
                    <select id="Fselecter" class="selectpicker show-tick show-menu-arrow" data-width="300px" title="选择专业" data-live-search="true"></select>
                    <button class="w3-teal w3-large w3-btn w3-hover-red" style="margin-left:20px" onclick="victutors.Tutorlist.GetTutorByFaculty()">搜索家教&nbsp;
						<i class="fa fa-search" aria-hidden="true"></i></button>
                </li>
                <li id="joinusModal">
                    <a class="w3-hover-red" onclick="document.getElementById('aboutusModal').style.display='block'">
                        <font color="black">
                            <i><b>成为家教&nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="contactModal">
                    <a class="w3-hover-red" onclick="document.getElementById('ContactUsModal').style.display='block'">
                        <font color="black">
                            <i><b>联系我们&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="feedbackModal">
                    <a class="w3-hover-red" onclick="document.getElementById('FeedbackModal').style.display='block'">
                        <font color="black">
                            <i><b>问题反馈&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="qandaModal">
                    <a class="w3-hover-red" onclick="document.getElementById('FAQModal').style.display='block'">
                        <font color="black">
                            <i><b>疑难解答&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Contact staff button -->
<div id="serviceButton" class="w3-theme-border w3-animate-left" style="position: fixed; left:0px ;bottom:100px; z-index: 999;display:none">
    <button onmouseover="victutors.Tutorlist.ShowHideServerPanel(1)" class="w3-center w3-border w3-hover-grey w3-dark-grey w3-btn w3-large"><b>联<br>系<br>客<br>服</b>
			</button>
</div>

<!-- Contact staff slidng panel -->
<nav id="services" class="w3-sidenav Server-PanelTutorList w3-dark-grey" style="border:solid;border-width:thin;bottom:100px !important">
    <a onclick="victutors.Tutorlist.ShowHideServerPanel(0)" class="w3-right w3-closenav w3-text-white">Close &times;</a>
    <p class="w3-left w3-large w3-text-white" style="margin:0"><b>寻找太麻烦？</b></p>
    <img class="w3-left" style="width: 80px;height: 80px;" src="./Images/WeChat.png" style="width: 50%">
    <a onclick="document.getElementById('ContactUsModal').style.display='block'" class="w3-right w3-text-white" style="padding-right:10px;padding-top:10px">点击联系我们<br>我们来帮您!<br>请联系客服</a>
</nav>

<body id="mainbody" style="zoom:90%" onresize="victutors.Tutorlist.ReSize()">
    <!-- Content -->
    <div id="mainContent" class="w3-content w3-container">
        <p class="w3-text-white w3-xlarge" id="title" style="margin-top:20px;margin-bottom:20px"></p>
        <div id="searchTags">
        </div>
        <div id="TutorListAll" style="margin-top:0px;margin-bottom:50px">
        </div>
    </div>

    <!-- Fixed Button -->
    <div class="w3-theme-border" id="GoToTopButton" style="display:none;position: fixed; padding: 5px; bottom: 60px; right: 35px; height: 50px; z-index: 999">
        <button class="w3-text-white w3-hover-text-teal w3-xxxlarge w3-animate-right glyphicon glyphicon-chevron-up" data-toggle="gotop" title="Go to Top" style="padding: 0; border: none; background: none; outline: none;color:black" onclick="victutors.Tutorlist.gotoTop()">
	</div>


	<!-- Footer -->
	<footer id = "footerpanel" class="w3-container w3-padding-10 w3-center" style = "z-index:-1">
		<p style = "margin-top:10px">
		<span><a href = "#" ><b class = "w3-text-white">免责声明</b></a></span>
		<span><b class = "w3-text-white"> ｜ </b><a href = "#" ><b class = "w3-text-white">广告服务</b></a></span>
		</p>
		<p class = "w3-text-white">© Victutor.com - VICTUTORS ALL RIGHTS RESERVED</p>
	</footer>

    <div id="aboutusModal" class="w3-modal" style="z-index:999">
        <div class="w3-modal-content w3-animate-top w3-card-8">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('aboutusModal').style.display='none'" class="w3-closebtn">&times;</span>
                <h2 class="w3-center w3-lobster">成为家教</h2>
            </header>
            <div class="w3-container">
                <div>
                    <div class="w3-row-padding" style="height:380px">
                        <div class="w3-half">
                            <div class="w3-group w3-half">
                                <label>姓名:</label> <input class="w3-round w3-input w3-border w3-hover-border-black" style="width: 80%;" type="text" name="name" id="uname" />
                            </div>
                            <div class="w3-group w3-half">
                                <label>电话:</label> <input class="w3-round w3-input w3-border w3-hover-border-black" style="width: 80%;" type="text" name="phone" id="uphone" />
                            </div>
                            <div class="w3-group w3-half">
                                <label>微信:</label> <input class="w3-round w3-input w3-border w3-hover-border-black" style="width: 80%;" type="text" name="wechat" id="uwechat" />
                            </div>
                            <div class="w3-group w3-half">
                                <label>学科:</label> <input class="w3-round w3-input w3-border w3-hover-border-black" style="width: 80%;" type="text" name="subject" id="usubject" />
                            </div>
                            <div class="w3-group">
                                <label>邮箱:</label> <input class="w3-round w3-input w3-border w3-hover-border-black" style="width: 90%;" type="text" name="email" id="uemail" />
                            </div>
                            <div class="w3-group">
                                <label style="display:block;float:left" for="introduction">自我介绍(辅导科目,授课时间,授课价格等等):</label>
                                <textarea id="newTutorIntro" class="w3-round w3-input w3-border w3-hover-border-black" style="vertical-align: top;width: 90%;" rows="4" cols="70" name="introduction"></textarea>
                            </div>

                        </div>
                        <div id="imageUpload" class="w3-half">
                            <div class="w3-group">
                                <img id="ImgUpLoad" class="w3-center" src="./Images/Imgupload.png" alt="WeChat" style="width: 200px;height:170px;margin-left: 50px;margin-bottom: 30px;">
                                <label style="margin-left: 25px;display:block">
								<i id="imgSpinner" class="fa fa-spinner fa-spin" style="font-size:24px;display: none"></i>
								请上传微信二维码：
								<input id="fileInput" type="file" style="display:none;" />
								<input class="w3-teal w3-btn" id="uploadPic" style="display:inline-block" type="button" value="选择图片" onclick="document.getElementById('fileInput').click();" /></label>
                                <br />
                                <p>上传状态和结果：<span class="w3-text-red" id="state"></span></p>
                            </div>
                        </div>
                    </div>
                    <div id="tutorInfoUpload" style="margin-left:50%;margin-bottom:10px">
                        <button type="submit" onclick="victutors.Tutorlist.sendTutorInfo()" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
    </div>
    </div>
    </div>
    <footer class="w3-container w3-teal">
        <p class="w3-center w3-lobster ">www.victutors.com</p>
    </footer>
    </div>
    </div>

    <div id="FAQModal" class="w3-modal" style="z-index:998">
        <div class="w3-modal-content w3-animate-top w3-card-8">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('FAQModal').style.display='none'" class="w3-closebtn">&times;</span>
                <h2 class="w3-center w3-lobster">常见问题解答</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding" style="height:500px">
                    <div class="w3-half">
                        <h3 class="w3-center">For Students</h3>
                        <div class="w3-large" style="margin-top:30px">
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="sq21"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.sAnswer('ta21')">如何使用Victutors</button>
                                </div>
                                <span id="sa21" style="display:none">
                                <p style="margin-top: 5px">我们提倡尽可能的简化搜索步骤，您只需要在搜索栏中选择专业并点击搜索。</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="sq22"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.sAnswer('ta22')">我要如何联系家教</button>
                                </div>
                                <span id="sa22" style="display:none">
                                <p style="margin-top: 5px">在您选择好合适的家教后，您可以通过家教名片中的电话，微信，邮箱以及扫描微信二维码等上述方式联系家教。</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="sq23"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.sAnswer('ta23')">Victutors上家教值得信赖吗</button>
                                </div>
                                <span id="sa23" style="display:none">
                                <p style="margin-top: 5px">Victutors上的家教都是通过验证审核的，他们提供最好的服务</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="sq24"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.sAnswer('ta24')">我需要交任何的费用吗</button>
                                </div>
                                <span id="sa24" style="display:none">
                                <p style="margin-top: 5px">我们是完全免费的一个服务性平台，无论对于家教还是用户我们至始至终不会收取任何费用</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="sq25"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.sAnswer('ta25')">搜索栏中没有我想找学科</button>
                                </div>
                                <span id="sa25" style="display:none">
                                <p style="margin-top: 5px">您可以通过<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a>，我们来帮您寻找</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w3-half">
                        <h3 class="w3-center">For Tutors</h3>
                        <div class="w3-large" style="margin-top:30px">
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq1"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta1')">我在这里发布信息收费吗</button>
                                </div>
                                <span id="ta1" style="display:none">
                                <p style="margin-top: 5px">我们为家教提供一个完全免费的平台。所以家教在这里发布信息至始至终都不用支付任何费用。</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq2"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta2')">在家教名单里家教的位置是如何排列的</button>
                                </div>
                                <span id="ta2" style="display:none">
                                <p style = "margin-top: 5px">在列表里家教的排列顺序是完全随机的。每次登录或刷新界面家教的排列顺序都会改变。我们保证每一位家教都有公平的机会被学生联系。</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq3"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta3')">我想发布家教信息</button>
                                </div>
                                <span id="ta3" style="display:none">
                                <p style = "margin-top: 5px">我们欢迎个人以及团队入驻Victutors.com。您只需要点击右上角的‘家教入驻’并填写相关资料，我们将在24小时内审核发布您的信息！</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq4"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta4')">学生如何联系家教</button>
                                </div>
                                <span id="ta4" style="display:none">
                                <p style="margin-top: 5px">学生可以通过以下方式联系家教：电话，微信，邮箱。我们建议您填写尽可能多的信息方便学生联系。</p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq5"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta5')">如何保证信息隐私</button>
                                </div>
                                <span id="ta5" style="display:none">
                                <p style="margin-top: 5px">您输入的信息都是基于完全自愿的原则。我们不会向外发布提供任何您的信息。详情您参考<a href="#"><b class="w3-text-teal">免责声明</b></a></p>
                                </span>
                            </div>
                            <div style="margin-bottom:20px">
                                <div class="w3-text-teal">
                                    <span id="tq6"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style="background-color:white" onclick="victutors.Tutorlist.tAnswer('ta6')">我的家教团队想集体入驻</button>
                                </div>
                                <span id="ta6" style="display:none">
                                <p style="margin-top: 5px">我们欢迎任何的家教团队。当然团队发布任何信息都是完全免费的。我们会依据您的团队打造一个独特的团队窗口。详情请<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a></p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-teal">
                <p class="w3-center w3-lobster ">www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!--feedback -->
    <div id="FeedbackModal" class="w3-modal" style="z-index:999">
        <div class="w3-modal-content w3-animate-top w3-card-8">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('FeedbackModal').style.display='none'" class="w3-closebtn">&times;</span>
                <h2 class="w3-center w3-lobster">意见反馈</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding " style="height:380px ">
                    <div class="w3-group ">
                        <label class="w3-large ">您想搜索的学科?</label> <input id="feedback_subject " class="w3-round w3-input w3-border w3-hover-border-black " style="width: 100%; " type="text " name="subject_help " />
                    </div>
                    <div class="w3-center w3-group ">
                        <label class="w3-large " style="display:block;float:left " for="introduction_help ">您宝贵的意见:</label>
                        <textarea id="feedback_text " class="w3-round w3-input w3-border w3-hover-border-black " style="vertical-align: left;width: 100%; " rows="4 " cols="70 " name="introduction_help "></textarea>
                    </div>
                    <div class="w3-center " style="margin-bottom:10px ">
                        <button onclick="victutors.Tutorlist.sendFeedBack() " type="submit" class="w3-large w3-teal w3-btn w3-padding-10 ">Submit</button>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-teal ">
                <p class="w3-center w3-lobster ">www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!-- Contact -->
    <div id="ContactUsModal" class="w3-modal " style="z-index:999 ">
        <div class="w3-modal-content w3-animate-top w3-card-8 ">
            <header class="w3-container w3-teal ">
                <span onclick="document.getElementById( 'ContactUsModal').style.display='none' " class="w3-closebtn ">&times;</span>
                <h2 class="w3-center w3-lobster ">联系我们</h2>
            </header>
            <div id="contact " class="w3-large container-fluid bg-grey " style="margin-bottom:100px;margin-top:100px ">
                <div class="row ">
                    <div class="w3-half ">
                        <p style="padding-left:80px;margin-bottom: 25px ">
                            <span class="glyphicon glyphicon-map-marker "></span> 地址：University of Victoria
                        </p>
                        <p style="padding-left:80px;margin-bottom: 25px ">
                            <span class="glyphicon glyphicon-phone "></span> 电话：778 922 5080
                        </p>
                        <p style="padding-left:80px;margin-bottom: 25px ">
                            <span class="glyphicon glyphicon-envelope "></span> 邮箱：info@victutors.com
                        </p>
                    </div>
                    <div class="w3-half w3-center ">
                        <img src="./Images/WeChat.png " alt="WeChat " style="width: 35% ">
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-teal ">
                <p class="w3-center w3-lobster ">www.victutors.com</p>
            </footer>
        </div>
    </div>

    <div id="searchAlert" class="w3-modal ">
        <div class="w3-modal-content w3-animate-top w3-card-8 " style="width:30% ">
            <header class="w3-container w3-red ">
                <span onclick="document.getElementById( 'searchAlert').style.display='none' " class="w3-closebtn ">&times;</span>
                <h2 class="w3-red ">错误！<br/>搜索科目不能为空，请重新输入</h2>
            </header>
        </div>
    </div>

    <div id="feedbackAlert" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-8" style="width:30% ">
            <header class="w3-container w3-red ">
                <span onclick="document.getElementById( 'feedbackAlert').style.display='none' " class="w3-closebtn ">&times;</span>
                <h2 class="w3-red ">谢谢您的反馈😊<br/>感谢您长期以来的支持！</h2>
            </header>
        </div>
    </div>
    <div id="newTutorMoreInfoAlert" class="w3-modal ">
        <div class="w3-modal-content w3-animate-top w3-card-8 " style="width:30% ">
            <header class="w3-container w3-red ">
                <span onclick="document.getElementById( 'newTutorMoreInfoAlert').style.display='none' " class="w3-closebtn ">&times;</span>
                <h2 class="w3-red ">请填写完整信息😓<br/>更多的信息有助于学生联系您!<br/>您的支持是我们前进的动力！</h2>
            </header>
        </div>
    </div>
    <div id="newTutorAlert" class="w3-modal ">
        <div class="w3-modal-content w3-animate-top w3-card-8 " style="width:30% ">
            <header class="w3-container w3-red ">
                <span onclick="document.getElementById( 'newTutorAlert').style.display='none' " class="w3-closebtn ">&times;</span>
                <h2 class="w3-red ">谢谢您的加入😊<br/>我们将在第一时间审核更新您的信息!<br/>您的支持是我们前进的动力！</h2>
            </header>
        </div>
    </div>
</body>

</html>