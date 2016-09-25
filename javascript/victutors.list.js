victutors.createNS("victutors.list")

victutors.list.FacultyList = [
    'CSC : Computer Science － 计算机科学',
    'MATH : Mathematics - 数学',
    'ECON : Economics － 经济学',
    'ENGL : English - 英文写作',
    'MUSC : Music - 音乐'
];

victutors.list.CSClist = [];
victutors.list.MATHlist = [];
victutors.list.ECONlist = [];
victutors.list.ENGLlist = [];
victutors.list.MUSClist = [];

victutors.list.SetUplist = function (faculty) {
    switch (faculty){
        case 'CSC':
            victutors.list.CSClist = [
                victutors.list.CreateNewTutorEntry("大学计算机", "Wayne Zhang", "778 922 5080", "waynez@uvic.ca", "wayne-zhangyuwei", "./Images/img_avatar1.png", "./Images/CSC/waynezhang.png","UVIC的CSC大四学生. 拥有2年的Tutor经验,辅导过超过10个来自不同专业的学生. Tutor会为你讲解知识概念，辅导你解决习题、考试、编程作业等问题，并免费提供往届的练习题和模拟exam. 价格常年保障 $20/小时. 授课时间请微信联系"),
                victutors.list.CreateNewTutorEntry("大学计算机", "Zhuoli Xiao", "250 891 3238", "willisx237@163.com", "xiaozhuoli001", "./Images/img_avatar1.png", "./Images/CSC/ZuoLiXiao.png","CSC研究生在读，辅导科目：CSC 110, CSC 115, CSC 225 (Currently not available), CSC 226 (Currently not available)。价格时间请微信联系"),
                victutors.list.CreateNewTutorEntry("大学计算机", "Ace Ye", "778 922 2929", "zaeye1028@gmail.com", "yezihan1028", "./Images/img_avatar1.png", "./Images/CSC/aceye.png","UVIC大四学生，CSC专业. 从2015年9月开始做Tutor，辅导过Camosun和Uvic的学生共12人. 擅长画图讲解概念以及解决编程作业. 可以辅导Camosun Comp132, 139. Uvic CSC110, 115. 价格常年每小时20加元. 辅导时间请微信联系"),
                victutors.list.CreateNewTutorEntry("大学计算机", "Zheng Li", "250 857 9020", "lizheng808@gmail.com", "li775274833", "./Images/img_avatar1.png", "./Images/CSC/zhengli.jpg", "UVIC大三软件工程的学生，有8个月coop经验， 在工作中用的最多的是Java。可以辅导CSC和Math 100和200level的所有课程。价格20/hour.周末随时有空，平常5点以后有空"),
                victutors.list.CreateNewTutorEntry("大学计算机", "Yi Chu", "778 400 3868", "Chuyiada@gmail.com", "请扫描二维码", "./Images/img_avatar1.png", "./Images/CSC/chuyi.jpg", "HINF CSC combined大四学生，拥有4个月Co-op经验. 可以辅导CSC 110, 115, 225. 也可以辅导HINF 130, 140, 200, 201. 除周一、周四外，其他时间全天有空. 价格 $20 / 小时")
            ];
        return victutors.list.CSClist;
        case 'MATH':
            victutors.list.MATHlist = [
                victutors.list.CreateNewTutorEntry("大学数学", "Simon Zhu", "778 557 7965", "zhus@uvic.ca", "shuqiangzhu3", "./Images/img_avatar1.png", "../Images/Math/SimonZhu.JPG","UVIC的PHD学生. 2016年秋季UVIC Math109的Instructor. 长期担任学校助教以及私人家教. 可以辅导 MATH 100 - 300 Level 的课(combinatory除外) 价格: 100 level, 200 level $35/小时, 300 level $40/小时. 时间地点微信联系"),
                victutors.list.CreateNewTutorEntry("大学数学", "沈升益", "250 882 6939", "g.spiritblue@gmail.com", "541520752", "./Images/img_avatar3.png", "../Images/Math/shengshengyi.PNG","UVIC的数学PHD学生, 可以辅导数学100到300level的课(combinatory除外), 400 level 的 ODE PDE. 授课时间 最好是周2周3周末, 价格一般是100level 30刀/小时, 200level 35, 300 level 40. "),
                victutors.list.CreateNewTutorEntry("统计学,高中数学,大学数学", "Wayne Lu", "250 507 2503", "funfunlu@fhotmail.com", "mogua001", "./Images/img_avatar6.png", "./Images/Math/waynelu.jpg","UVIC的PHD学生. 本科:统计 ＋ 经济, 硕士:统计, 博士:地理. 超过7年家教经验,基本以大学为主,高中和研究生课程为辅, 可以辅导Uvic和Camosun 数学统计课程, 价格根据课程难度而定, 具体请微信联系"),
                victutors.list.CreateNewTutorEntry("高中数学,大学数学", "Lily Chen", "N/A", "mathtutoruvic@gmail.com", "N/A", "./Images/img_avatar1.png", "./Images/NoQRCode.png","目前是UVic机械学院的在读博士，有多年国内外数学家教经验，擅长微积分（uvic math100，101），线性代数（math211），逻辑学（math122）等多种高等数学，平时在培训机构带小学双语数学，也辅导高中11，12年纪的pre-calculus， 价格在25-35刀左右（根据课程和授课地点变化），欢迎需要的同学联系 mathtutoruvic@gmail.com，谢谢!")
            ];
        return victutors.list.MATHlist;
        case 'ECON':
            victutors.list.ECONlist = [
                victutors.list.CreateNewTutorEntry("ECON", "ECON1", "123", "email1", "wechat1", "./Images/img_avatar1.png", "./Images/WeChat4.png",""),
                victutors.list.CreateNewTutorEntry("ECON", "ECON2", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat2.png",""),
                victutors.list.CreateNewTutorEntry("ECON", "ECON3", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat.png",""),
                victutors.list.CreateNewTutorEntry("ECON", "ECON4", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png","")
            ];
        return victutors.list.ECONlist;
        case 'ENGL':
            victutors.list.ENGLlist = [
                victutors.list.CreateNewTutorEntry("ENGL", "ENGL1", "123", "email1", "wechat1", "./Images/img_avatar1.png", "./Images/WeChat4.png",""),
                victutors.list.CreateNewTutorEntry("ENGL", "ENGL2", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat2.png",""),
                victutors.list.CreateNewTutorEntry("ENGL", "ENGL3", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat.png",""),
                victutors.list.CreateNewTutorEntry("ENGL", "ENGL4", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png","")
            ];
        return victutors.list.ENGLlist;
        case 'MUSC':
            victutors.list.MUSClist = [
                victutors.list.CreateNewTutorEntry("钢琴", "Jasmine Huang", "250 884 3368", "N/A", "yaping415", "./Images/img_avatar1.png", "./Images/Music/jasminehuang.jpg","本人現在開始當鋼琴家教陪練 或是任何程度的伴奏需求 有17 年的學琴經歷 從8歲開始到現在都唸音樂班 專攻鋼琴主修 价格 30分钟:20$ 45分钟:30$ 60分钟:45$ 有需要的請聯繫電話250 884 3368 微信 yaping415"),
                victutors.list.CreateNewTutorEntry("吉他", "黄昊天", "N/A", "N/A", "huhaotian123", "./Images/img_avatar3.png", "./Images/Music/haotianhuang.jpg","我目前在维多利亚大学就读音乐表演专业本科，乐器是古典吉他。普通话教学，一节课40刀，一个小时左右。我只教古典吉他演奏和基础乐理。学生要求每天保证有30分钟以上的练习。如果你真的希望会演奏一门乐器，了解古典音乐，请联系我。如果只是学着玩玩的，请勿打扰。"),
                victutors.list.CreateNewTutorEntry("吉他", "黄蒜蒜", "N/A", "N/A", "louis57", "./Images/img_avatar6.png", "./Images/Music/suansuanhuang.jpg","本人练习吉他12年之久，参加过国内外多次演出，有多年的吉他教学经验。在维多利亚已经教琴两年。吉他教学主要针对吉他初学者，中级吉他学习者。教授内容包括木吉他和弦，指法，弹唱，演奏技巧，基础乐理知识等等。内容丰富欢迎大家咨询加入。具体学习时间及费用请大家加微信louis57咨询。感谢大家一如既往地支持！欢迎加入!愿我们共同学习，共同进步！"),
                victutors.list.CreateNewTutorEntry("MUSC", "MUSC3", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png","")
            ];
        return victutors.list.MUSClist;
    }
}

victutors.list.CreateNewTutorEntry = function (_subject, _name, _phone, _email, _weChat, _imgsrc, _barcode,_introduction) {
    return { Subject: _subject, Name: _name, Phone: _phone, Email: _email, WeChat: _weChat, Image: _imgsrc, Barcode: _barcode,Introduction: _introduction };
}



