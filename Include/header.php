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
                    <button class="w3-teal w3-large w3-btn w3-hover-red" style="margin-left:20px" onclick="victutors.utils.GetTutorByFaculty()">搜索家教&nbsp;
						<i class="fa fa-search" aria-hidden="true"></i></button>
                </li>
                <li id="databaseModal_">
                    <a class="w3-hover-red" onclick="document.getElementById('databaseModal').style.display='block'">
                        <font color="black">
                            <i><b>题库分享&nbsp;&nbsp;<i class="fa fa-database" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="joinusModal">
                    <a class="w3-hover-red" onclick="document.getElementById('joinUsModal').style.display='block'">
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