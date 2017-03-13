<!DOCTYPE html>
<html>
<head>
    <title>victutors - 维多利亚家教网 !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/lib/CSS/w3.css">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/CSS/index1.css">
    <link href="/Images/favicon.ico" rel="icon" type="Images/x-icon" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="/javascript/bootstrap-select.js"></script>
  
    <script type="text/javascript" src="/javascript/victutors.js"></script>
    <script type="text/javascript" src="/javascript/victutors.list.js"></script>
    <script type="text/javascript" src="/javascript/victutors.functions.js"></script>
</head>
<body>
<div id="Navbar">
        <ul id="navbarlogo">
            <li><a href="#home" class="w3-left"><img src="/Images/icon_white.png">victutors.com</a></li>
        </ul>
        <ul id="navbarlist" class="topnav">
            <li id="home_link"><a href="#home">Victutor</a></li>
            <li><a href="#database" class="w3-btn" onclick="document.getElementById('databaseModal').style.display = 'block'">题库分享</a></li>
            <li><a href="#joinus" class="w3-btn" onclick="document.getElementById('joinUsModal').style.display = 'block'">成为家教</a></li>
            <li><a href="#about" class="w3-btn" onclick="document.getElementById('ContactUsModal').style.display = 'block'">联系我们</a></li>
            <li><a href="#feedback" class="w3-btn" onclick="document.getElementById('FeedbackModal').style.display = 'block'">问题反馈</a></li>
            <li><a href="#q&a" class="w3-btn" onclick="document.getElementById('FAQModal').style.display = 'block'">疑难解答</a></li>
            <li class="icon"><a href="javascript:void(0);" onclick="victutors.functions.responsive()">&#9776;</a></li>
        </ul>
    </div>
    <div id="MainBody">
        <div id="search_panel">
            <h1>维多利亚家教网aqqa</h1>
            <div>
                <select id="Fselecter" class="selectpicker" data-live-search="true" data-width="auto" title="选择专业">
                </select>

                <button id="search_button" class="w3-btn w3-hover-red"
                        onclick="victutors.functions.GetTutorByFaculty()">
                    搜索家教
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="zoomzone">
        <img id="partner" src="/Images/vichelp.jpg" style="display:none;">
    </div>
    <div id="Footer" class="w3-bottom">
        <div class="row no-gutters">
            <ul class="footer col-sm-4">
                <li><a href="#" >© Victutors.com - VICTUTORS ALL RIGHTS RESERVED</a></li>
            </ul>
            <ul class="footer col-sm-4 text-center">
                <li><a href="#">免责声明</a></li>
                <li><a href="#">广告服务</a></li>
            </ul>
            <ul class="footer col-sm-4 text-center">
                <li><a href="#">合作伙伴</a></li>
                <li><a href="#"><img src="/Images/vichelp_s.png" 
                    onmouseover="document.getElementById('partner').style.display = 'block'"
                    onmouseout="document.getElementById('partner').style.display = 'none'"></a></li>
            </ul>
            
        </div>
    </div>

    <!--Assignments database modal-->
    <div id="databaseModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-1">
            <header class="w3-container">
                <span onclick="document.getElementById('databaseModal').style.display='none'"
                      class="w3-closebtn">&times;</span>
                <h3>题库分享</h3>
            </header>
            <div class="w3-container">
                <div id="warning" class="w3-card-8">
                    <h3><b>免责声明</b></h3>
                    <p>Victutors创建本题库只为内部学习交流使用 不得用于任何商业用途</p>
                    <p>本题库试题作业资源由各位UVic战友提供 资源来之不易 望各位战友万加珍惜</p>
                    <p>同时恳请各位战友匿名分享习题资源 学习不易 多一份习题 多一些拿高分的可能</p>
                    <p>部分题库资源可在UVic官网(www.uvic.ca)搜索找到</p>
                </div>
                <div class="w3-center">
                    <button onclick="victutors.functions.DBlogin()" type="submit" class="w3-teal w3-btn">登录题库</button>
                </div>
            </div>
            <footer class="w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!--Join us Modal, become a tutor-->>
    <div id="joinUsModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-8">
            <header class="w3-container">
                <span onclick="document.getElementById('joinUsModal').style.display = 'none'"
                      class="w3-closebtn">&times;</span>
                <h3 class="w3-center w3-lobster">成为家教</h3>
            </header>
            <div class="w3-container">
                    <div class="w3-row-padding" >
                        <div class="w3-half">
                            <div class="left-row-input w3-half" >
                                <label>姓名:</label> <input class="w3-round w3-input w3-border w3-hover-border-black"
                                                           type="text" name="name" id="uname" />
                            </div>
                            <div class="right-row-input w3-half">
                                <label>学科:</label> <input class="w3-round w3-input w3-border w3-hover-border-black"
                                                          type="text" name="subject" id="usubject" />
                            </div>
                            <div class="left-row-input w3-half">
                                <label>电话:</label> <input class="w3-round w3-input w3-border w3-hover-border-black"
                                                          type="text" name="phone" id="uphone" />
                            </div>
                            <div class="right-row-input w3-half">
                                <label>微信:</label> <input class="w3-round w3-input w3-border w3-hover-border-black"
                                                         type="text" name="wechat" id="uwechat" />
                            </div>
                            
                            <div class="middle-input">
                                <label>邮箱:</label> <input class="w3-round w3-input w3-border w3-hover-border-black"
                                                          type="text" name="email" id="uemail" />
                            </div>
                            <div class="middle-input">
                                <label>自我介绍(辅导科目,授课时间,授课价格等等):</label>
                                <textarea id="newTutorIntro" class="w3-round w3-input w3-border w3-hover-border-black" style="vertical-align: top;" rows="4" cols="70" name="introduction"></textarea>
                            </div>

                        </div>
                        <div class="w3-half">
                            <div class="group">
                                <div class="w3-center"><img id="ImgUpLoad" src="/Images/Imgupload.png" style="width:50%" alt="WeChat"></div>
                                <div class="w3-center">
                                    <label>
                                        <i id="imgSpinner" class="fa fa-spinner fa-spin" style="font-size:24px;display: none"></i>
                                        请上传微信二维码：<input class="w3-teal w3-btn"
                                                        type="button" value="选取图片" id="selector" />
                                    </label>
                                    <br />
                                    <br />
                                    <label>选择的图片路径：</label><input style="border-style:none;" type="text" readonly="readonly" value="" id="filepath" />
                                    <input style="display:none" type="button" value="上传" id="up" />
                                    <br />
                                    <label>上传状态和结果：</label><input style="border-style:none;" type="text" readonly="readonly" value="" id="state" />
                                    <br />                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-center" >
                        <button type="submit" onclick="victutors.functions.sendTutorInfo()" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
                    </div>
            </div>
            <footer class="w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!--Contact us Modal-->
    <div id="ContactUsModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-1">
            <header class="w3-container">
                <span onclick="document.getElementById('ContactUsModal').style.display = 'none'"
                      class="w3-closebtn">&times;</span>
                <h3>联系我们</h3>
            </header>
            <div id="contact" class="w3-container">
                <div class="w3-half">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 地址：University of Victoria</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> 电话：778 922 5080</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> 邮箱：info@victutors.com</p>
                </div>
                <div class="w3-half w3-center">
                    <img src="/Images/WeChat.png" alt="WeChat">
                </div>
            </div>
            <footer class="w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!--feedback modal-->
    <div id="FeedbackModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-1">
            <header class="w3-container">
                <span onclick="document.getElementById('FeedbackModal').style.display='none'"
                      class="w3-closebtn">&times;</span>
                <h3>意见反馈</h3>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-group">
                        <label>您想搜索的学科?</label> <input id="feedback_subject"
                                                                        class="w3-round w3-input w3-border w3-hover-border-black"
                                                                        type="text" name="subject_help" />
                    </div>
                    <div class="w3-group">
                        <label for="introduction_help">您宝贵的意见:</label>
                        <textarea id="feedback_text" class="w3-round w3-input w3-border w3-hover-border-black" rows="4" cols="70" name="introduction_help"></textarea>
                    </div>
                    <div class="w3-center">
                        <button onclick="victutors.functions.sendFeedBack()" type="submit" class="w3-large w3-teal w3-btn">Submit</button>
                    </div>
                </div>
            </div>
            <footer class="w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>

    <!--FAQ modal-->
    <div id="FAQModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-1">
            <header class="w3-container">
                <span onclick="document.getElementById('FAQModal').style.display='none'"
                      class="w3-closebtn">&times;</span>
                <h3>常见问题解答</h3>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-half">
                        <h3 class="w3-center">For Students</h3>
                        <div>
                            <div>
                                <div>
                                    <span id="sq21"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.sAnswer('ta21')">如何使用Victutors</button>
                                </div>
                                <div id="sa21" style="display:none">
                                    <p>我们提倡尽可能的简化搜索步骤，您只需要在搜索栏中选择专业并点击搜索。</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="sq22"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.sAnswer('ta22')">我要如何联系家教</button>
                                </div>
                                <div id="sa22" style="display:none">
                                    <p >在您选择好合适的家教后，您可以通过家教名片中的电话，微信，邮箱以及扫描微信二维码等上述方式联系家教。</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="sq23"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.sAnswer('ta23')">Victutors上家教值得信赖吗</button>
                                </div>
                                <div id="sa23" style="display:none">
                                    <p >Victutors上的家教都是通过验证审核的，他们提供最好的服务</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="sq24"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.sAnswer('ta24')">我需要交任何的费用吗</button>
                                </div>
                                <div id="sa24" style="display:none">
                                    <p >我们是完全免费的一个服务性平台，无论对于家教还是用户我们至始至终不会收取任何费用</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="sq25"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.sAnswer('ta25')">搜索栏中没有我想找学科</button>
                                </div>
                                <div id="sa25" style="display:none">
                                    <p >您可以通过<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a>，我们来帮您寻找</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-half">
                        <h3 class="w3-center">For Tutors</h3>
                        <div>
                            <div>
                                <div>
                                    <span id="tq1"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.tAnswer('ta1')">我在这里发布信息收费吗</button>
                                </div>
                                <div id="ta1" style="display:none">
                                    <p >我们为家教提供一个完全免费的平台。所以家教在这里发布信息至始至终都不用支付任何费用。</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="tq2"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.tAnswer('ta2')">家教名单里家教的位置是如何排列的</button>
                                </div>
                                <div id="ta2" style="display:none">
                                    <p >在列表里家教的排列顺序是完全随机的。每次登录或刷新界面家教的排列顺序都会改变。我们保证每一位家教都有公平的机会被学生联系。</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="tq3"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.tAnswer('ta3')">我想发布家教信息</button>
                                </div>
                                <div id="ta3" style="display:none">
                                    <p >我们欢迎个人以及团队入驻Victutors.com。您只需要点击右上角的‘家教入驻’并填写相关资料，我们将在24小时内审核发布您的信息！</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="tq4"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.tAnswer('ta4')">学生如何联系家教</button>
                                </div>
                                <div id="ta4" style="display:none">
                                    <p >学生可以通过以下方式联系家教：电话，微信，邮箱。我们建议您填写尽可能多的信息方便学生联系。</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="tq5"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button onclick="victutors.functions.tAnswer('ta5')">如何保证信息隐私</button>
                                </div>
                                <div id="ta5" style="display:none">
                                    <p >您输入的信息都是基于完全自愿的原则。我们不会向外发布提供任何您的信息。详情您参考<a href="#"><b class="w3-text-teal">免责声明</b></a></p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span id="tq6"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button  onclick="victutors.functions.tAnswer('ta6')">我的家教团队想集体入驻</button>
                                </div>
                                <div id="ta6" style="display:none">
                                    <p >我们欢迎任何的家教团队。当然团队发布任何信息都是完全免费的。我们会依据您的团队打造一个独特的团队窗口。详情请<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>

</body>
</html>
