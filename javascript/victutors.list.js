victutors.createNS('victutors.list');

victutors.list.FacultyList = [
    'CSC : Computer Science － 计算机科学',
    'MATH : Mathematics - 数学',
    'ENGL : English - 英文写作',
    'MUSC : Music - 音乐',
    'STAT : Statistics - 统计学',
    'HINF : Health Information Science - 健康信息科学',
    'ENGR : Engineering - 工程学',
    'PSYC : Psychology - 心理学'
];

victutors.list.CSClist = [];
victutors.list.MATHlist = [];
victutors.list.ENGLlist = [];
victutors.list.MUSClist = [];
victutors.list.ENGRlist = [];
victutors.list.HINFlist = [];
victutors.list.PSYClist = [];
victutors.list.STATlist = [];

victutors.list.SetUplist = function(faculty) {
    switch (faculty) {
        case 'CSC':
            victutors.list.CSClist = [
                victutors.list.CreateNewTutorEntry('Comp 132/139,CSC 110/115,CSC 105,CSC 360', 'Wayne Zhang', '778 922 5080', 'waynez@uvic.ca', 'wayne-zhangyuwei', './Images/img_avatar1.png', './Images/CSC/waynezhang.png', 'UVIC的CSC大四学生. 拥有2年的Tutor经验,辅导过超过10个来自不同专业的学生. Tutor会为你讲解知识概念，辅导你解决习题、考试、编程作业等问题，并免费提供往届的练习题和模拟exam. 价格常年保障 $20/小时. 授课时间请微信联系'),
                victutors.list.CreateNewTutorEntry('CSC 110/115', 'Zhuoli Xiao', '250 891 3238', 'willisx237@163.com', 'xiaozhuoli001', './Images/img_avatar1.png', './Images/CSC/ZuoLiXiao.png', 'CSC研究生在读，辅导科目：CSC 110, CSC 115, CSC 225 (Currently not available), CSC 226 (Currently not available)。价格时间请微信联系'),
                victutors.list.CreateNewTutorEntry('Comp 132/139,CSC 110/115,CSC 105', 'Ace Ye', '778 922 2929', 'zaeye1028@gmail.com', 'yezihan1028', './Images/img_avatar1.png', './Images/CSC/aceye.png', 'UVIC大四学生，CSC专业. 从2015年9月开始做Tutor，辅导过Camosun和Uvic的学生共12人. 擅长画图讲解概念以及解决编程作业. 可以辅导Camosun Comp132, 139. Uvic CSC110, 115. 价格常年每小时20加元. 辅导时间请微信联系'),
                victutors.list.CreateNewTutorEntry('CSC 110/115', 'Zheng Li', '250 857 9020', 'lizheng808@gmail.com', 'li775274833', './Images/img_avatar1.png', './Images/CSC/zhengli.jpg', 'UVIC大三软件工程的学生，有8个月coop经验， 在工作中用的最多的是Java。可以辅导CSC和Math 100和200level的所有课程。价格20/hour.周末随时有空，平常5点以后有空'),
                victutors.list.CreateNewTutorEntry('CSC 110/115', 'Yi Chu', '778 400 3868', 'Chuyiada@gmail.com', '请扫描二维码', './Images/img_avatar1.png', './Images/CSC/chuyi.jpg', 'HINF CSC combined大四学生，拥有4个月Co-op经验. 可以辅导CSC 110, 115, 225. 也可以辅导HINF 130, 140, 200, 201. 除周一、周四外，其他时间全天有空. 价格 $20 / 小时'),
                victutors.list.CreateNewTutorEntry('CSC 110/115,CSC225,CSC230', 'Grace Li', '778 922 4781', '请通过其他方式联系', 'gracelizr', './Images/img_avatar1.png', './Images/CSC/graceli.jpg', 'UVic SENG大三学生。可以辅导CSC110 115 225, 曾辅导过5个学生。请提前三天预约，价格20加元每小时。'),
                victutors.list.CreateNewTutorEntry('CSC 110/115,Python,C', 'Brook Jin', '778 788 8848', 'wellplayedtoday@gmail.com', '请通过其他方式联系', './Images/img_avatar1.png', './Images/NoQRCode.png', '可辅导语言： python，Java，网络安全，C， CSS，Html，PHP. 价格：20/Hour '),
                victutors.list.CreateNewTutorEntry('CSC 110/115,Python,C,C++,CSC230', 'Simon', '请通过其他方式联系', 'superpenshine@gmail.com', 'superpenshing', './Images/img_avatar1.png', './Images/CSC/simon.jpg', 'UVic在校CSC大四学生，辅导不同课程语言包括Java，C，C++， Python。爱好用简单易懂的图形帮你理解算法及数据结构，可以帮忙解析作业。CSC110，CSC115及同级课程$20/h。CSC230，CSC205 微信/email联系'),
                victutors.list.CreateNewTutorEntry('Comp 132/139,Python,C,C++', 'Rob Thorndyke', '250 480 8970', 'rthorndy@gmail.com', 'rthorndy', './Images/img_avatar1.png', './Images/CSC/rthorndy.JPG', 'I am a Computer Science instructor at Camosun College. I specialize in Java, C, C++, python and PHP programming. Topics include Introduction To Programming, Data Structures, Algorithms, Graph Theory, Network Programming. Available most weekends, in the afternoon or evening; please inquire for specific times!'),
                victutors.list.CreateNewTutorEntry('CSC 110/115', 'Dover', '778 922 3861', 'marineincanada@gmail.com', 'CRRCCRRC', './Images/img_avatar1.png', './Images/CSC/Dover.JPG', 'Uvic CS 专业大四学生, 已累计近16 个月 Co-op work. 只专注 CSC110 辅导, 帮助理解概念, 作业解析及考前串讲, review. 擅长用简单例子解释复杂问题. 并可提前帮助理解 data structure, 为CSC115做铺垫. 每天7pm后或周末有空. $20/小时. 若要其他时间辅导可提前预约.'),
                victutors.list.CreateNewTutorEntry('CSC 110/115,CSC225,CSC230,CSC 370,CSC 320,CSC 360,Python', 'Henry Hu', '778 922 4286', 'henryhu94@gmail.com', 'hallowhu', './Images/img_avatar1.png', './Images/NoQRCode.png', '擅长csc106,110, 115, 225, 230, 305, 320, 360, 370等课程。熟悉c, java, 汇编，python, sql和各种算法. 授课时间请提前联系henryhu94@gmail.com, 授课价格视课程难度和时常，平均20刀/小时, 有任何问题的可以直接邮箱联系.')
            ];
            break;
        case 'MATH':
            victutors.list.MATHlist = [
                victutors.list.CreateNewTutorEntry('大学数学', 'Simon Zhu', '778 557 7965', 'zhus@uvic.ca', 'shuqiangzhu3', './Images/img_avatar1.png', '../Images/Math/SimonZhu.JPG', 'UVIC的PHD学生. 2016年秋季UVIC Math109的Instructor. 长期担任学校助教以及私人家教. 可以辅导 MATH 100 - 300 Level 的课(combinatory除外) 价格: 100 level, 200 level $35/小时, 300 level $40/小时. 时间地点微信联系'),
                victutors.list.CreateNewTutorEntry('大学数学', '沈升益', '250 882 6939', 'g.spiritblue@gmail.com', '541520752', './Images/img_avatar3.png', '../Images/Math/shengshengyi.PNG', 'UVIC的数学PHD学生, 可以辅导数学100到300level的课(combinatory除外), 400 level 的 ODE PDE. 授课时间 最好是周2周3周末, 价格一般是100level 30刀/小时, 200level 35, 300 level 40. '),
                victutors.list.CreateNewTutorEntry('统计学,高中数学,大学数学', 'Wayne Lu', '250 507 2503', 'funfunlu@fhotmail.com', 'mogua001', './Images/img_avatar6.png', './Images/Math/waynelu.jpg', 'UVIC的PHD学生. 本科:统计 ＋ 经济, 硕士:统计, 博士:地理. 超过7年家教经验,基本以大学为主,高中和研究生课程为辅, 可以辅导Uvic和Camosun 数学统计课程, 价格根据课程难度而定, 具体请微信联系'),
                victutors.list.CreateNewTutorEntry('高中数学,大学数学', 'Lily Chen', 'N/A', 'mathtutoruvic@gmail.com', 'N/A', './Images/img_avatar1.png', './Images/NoQRCode.png', '目前是UVic机械学院的在读博士，有多年国内外数学家教经验，擅长微积分（uvic math100，101），线性代数（math211），逻辑学（math122）等多种高等数学，平时在培训机构带小学双语数学，也辅导高中11，12年纪的pre-calculus， 价格在25-35刀左右（根据课程和授课地点变化），欢迎需要的同学联系 mathtutoruvic@gmail.com，谢谢!'),
                victutors.list.CreateNewTutorEntry('大学数学', 'Emliy', 'N/A', 'emily99vic@gmail.com', 'emilyS627112', './Images/img_avatar1.png', './Images/ENGL/Emily.jpg', '本人UVic学生，数学成绩优秀，多次考试接近满分，经济课总成绩考过满分，曾从事补习班数学老师，辅导过多名一对一学生，成绩都有明显提高。善于换位思考，提高学习兴趣，帮助学生培养高效学习方法。欢迎有兴趣的家长，同学联系咨询，价格20-30刀，谢谢！'),
                victutors.list.CreateNewTutorEntry('大学数学,Calculus,Linear algebra', '唐鹏', '778 922 5595', 'pengtang268@gmail.com', 'tangpeng268', './Images/img_avatar1.png', './Images/Math/tangpeng.jpg', '本科统计+经济，现UVic stat master在读,。可补Calculus（MATH100/101/200/204）、Linear algebra(MATH110/208/211)以及所有的STAT及相关课程。100/200 level 30一小时，300以上level 35/40一小时。'),
                victutors.list.CreateNewTutorEntry('大学数学,Camosun Math,Linear algebra', 'Ryan Willoughby', '250 686 0198', 'ryan947@gmail.com', 'N/A', './Images/img_avatar1.png', './Images/NoQRCode.png', 'Availability: Mondays to Saturdays from the first week of October until the last week of April. Mondays to Fridays from the week of May until the last week of September.  Subjects Tutored (可辅导): Mathematics 100, 101, 102, 109, 110, 120, 122, 151, 161, 162, 199, 200, 202, 204, 208, 211, 212, 222, 236, 242, 300, 301, 311, 312, 315, 342, 346, 352, 360, 362, 366, 367, 377.  Price: $40.00 per hour'),
                victutors.list.CreateNewTutorEntry('大学数学', '葉啟光', '778 863 2498', 'chikuang@uvic.ca', 'okyeh2111', './Images/img_avatar1.png', './Images/Math/qiguangye.JPG', '本科數學+統計+計算機榮譽學位,UVic統計碩士在讀.可補數學(MATH) 1-2年級所有課程,所有統計(Stat) 課程. 100-200 level $30/hr, 300-400 level 按課收費.')
            ];
            break;
        case 'ENGL':
            victutors.list.ENGLlist = [
                victutors.list.CreateNewTutorEntry('论文辅导', 'Isabel', '778 922 8686', 'N/A', 'leixiaoyun3344', './Images/img_avatar1.png', './Images/ENGL/Isabel.jpg', '需要辅导论文作业的同学，这里有专业的老师帮助您！各位亲爱的同学，如有需要辅导论文作业之类的，请联系我哦！我会帮您推荐最专业最优秀的老师！我们的老师毕业于温哥华知名大学，文学类专业，擅长写作，出过多部文学作品。希望可以帮助到您！'),
                victutors.list.CreateNewTutorEntry('班级授课', 'Isabel', '778 922 8686', 'N/A', 'leixiaoyun3344', './Images/img_avatar3.png', './Images/ENGL/Isabel.jpg', '英语课招生！加拿大老师，会说中文老师是加拿大本地人，在中国做外教6年，主教英语，有专业的教学经验。现招生：小班授课，时间自由灵活，可提前预约！地址在Oak Bay附近.在这里，有丰富有趣的活动，节日聚会和户外课程。我们的老师风趣幽默，将带你体验不一样的学习氛围，让学习变得轻松有趣！'),
                victutors.list.CreateNewTutorEntry('雅思辅导', 'Susan Kang', '604 338 7544', 'writingabc123@gmail.com', 'susankankan', './Images/img_avatar6.png', './Images/ENGL/Susan.jpg', '毕业于美国俄亥俄州大学国际商学硕士 及 北卡罗莱纳州英语教学硕士，专业辅导雅思及托福考试25年。2015年取得加拿大TESL(英语教学证照)，成为加拿大合格英语老师，辅导学生大多在半年至一年内取得理想成绩(雅思6-8分，托福85-108分)，并申请入学名牌大学(UBC,SFU,UT及美国名牌大学等)。老师认真负责，经验丰富，题库完整教授考试答题技巧，能让学生在短时间内考到理想成绩'),
                victutors.list.CreateNewTutorEntry('雅思辅导', 'Emliy', 'N/A', 'emily99vic@gmail.com', 'emilyS627112', './Images/img_avatar1.png', './Images/ENGL/Emily.jpg', '本人UVic学生一名，曾在北京雅思担任雅思老师，负责听力，阅读，口语。在UVic期间，曾获得经济学学期总成绩满分，数学考试多次接近满分，熟知雅思、初高中数学教学内容，善于提高学生考试成绩。现利用暑期时间愿意帮助同学们提高雅思，数学等科目的成绩，提高孩子的学习兴趣，欢迎感兴趣的家长和同学联系我')
            ];
            break;
        case 'MUSC':
            victutors.list.MUSClist = [
                victutors.list.CreateNewTutorEntry('钢琴', 'Jasmine Huang', '250 884 3368', 'N/A', 'yaping415', './Images/img_avatar1.png', './Images/Music/jasminehuang.jpg', '本人現在開始當鋼琴家教陪練 或是任何程度的伴奏需求 有17 年的學琴經歷 從8歲開始到現在都唸音樂班 專攻鋼琴主修 价格 30分钟:20$ 45分钟:30$ 60分钟:45$ 有需要的請聯繫電話250 884 3368 微信 yaping415'),
                victutors.list.CreateNewTutorEntry('吉他', '黄昊天', 'N/A', 'N/A', 'huhaotian123', './Images/img_avatar3.png', './Images/Music/haotianhuang.jpg', '我目前在维多利亚大学就读音乐表演专业本科，乐器是古典吉他。普通话教学，一节课40刀，一个小时左右。我只教古典吉他演奏和基础乐理。学生要求每天保证有30分钟以上的练习。如果你真的希望会演奏一门乐器，了解古典音乐，请联系我。如果只是学着玩玩的，请勿打扰。'),
                victutors.list.CreateNewTutorEntry('吉他', '黄蒜蒜', 'N/A', 'N/A', 'louis57', './Images/img_avatar6.png', './Images/Music/suansuanhuang.jpg', '本人练习吉他12年之久，参加过国内外多次演出，有多年的吉他教学经验。在维多利亚已经教琴两年。吉他教学主要针对吉他初学者，中级吉他学习者。教授内容包括木吉他和弦，指法，弹唱，演奏技巧，基础乐理知识等等。内容丰富欢迎大家咨询加入。具体学习时间及费用请大家加微信louis57咨询。感谢大家一如既往地支持！欢迎加入!愿我们共同学习，共同进步！'),
                victutors.list.CreateNewTutorEntry('小提琴', 'Kevin Chen', '306 202 7789', 'N/A', 'wxid_z6n661xhc18y22', './Images/img_avatar1.png', './Images/NoQRCode.png', '老师是拥有超过10年小提琴经验的CBC,目前在VCM进修小提琴课程。多次参与演出，比赛以及独奏会。曾经超多3次获得VCM颁发的奖学金，并被推选代表BC省参加加拿大国内小提琴比赛。只限英语教学，价格时间请微信或则电话联系（老师只能听懂简单的中文）')
            ];
            break;
        case 'ENGR':
            victutors.list.ENGRlist = [
                victutors.list.CreateNewTutorEntry('机械工程', 'Alfred Luo', '778 350 1436', 'sddxldq@gmail.com', 'sddxldq', './Images/img_avatar1.png', './Images/ENGR/alfredluo.JPG', 'Uvic 机械工程大四学生 可以辅导大二前所有工程类课程。 精通热力学和固体力学。 价格请微信联系，一般4点后都有时间'),
                victutors.list.CreateNewTutorEntry('软件工程', 'Zheng Li', '250 857 9020', 'lizheng808@gmail.com', 'li775274833', './Images/img_avatar1.png', './Images/CSC/zhengli.jpg', 'UVIC大三软件工程的学生，有8个月coop经验， 在工作中用的最多的是Java。可以辅导CSC和Math 100和200level的所有课程。价格20/hour.周末随时有空，平常5点以后有空'),
                victutors.list.CreateNewTutorEntry('Electrical Engineering', 'Ryan Willoughby', '250 686 0198', 'ryan947@gmail.com', 'N/A', './Images/img_avatar1.png', './Images/NoQRCode.png', 'Electrical Engineering 216, 220, 250, 260, 310.  Availability: Mondays to Saturdays from the first week of October until the last week of April. Mondays to Fridays from the week of May until the last week of September.  Price: $40.00 per hour')
            ];
            break;
        case 'HINF':
            victutors.list.HINFlist = [
                victutors.list.CreateNewTutorEntry('HINF 130/140, HINF 200/201', 'Yi Chu', '778 400 3868', 'Chuyiada@gmail.com', '请扫描二维码', './Images/img_avatar1.png', './Images/HINF/chuyi.jpg', 'HINF CSC combined大四学生，拥有4个月Co-op经验. 可以辅导HINF 130, 140, 200, 201. 除周一、周四外，其他时间全天有空. 价格 $20 / 小时'),
                victutors.list.CreateNewTutorEntry('HINF 130/140, HINF 200/201', 'Neil', '604 537 6630', 'neil89757@gmail.com', 'Sandmam', './Images/img_avatar1.png', './Images/HINF/neil.JPG', 'HINF大三学生，有在VIHA实习的经验。可辅导HINF130，140，200，201，320，381。具体时间请微信咨询.')
            ];
            break;
        case 'PSYC':
            victutors.list.PSYClist = [
                victutors.list.CreateNewTutorEntry('PSYC 11&12, Social Studies', 'Vincent Liu', '604 773 1878', 'N/A', '请扫描二维码', './Images/img_avatar1.png', './Images/PSYC/vincentliu.JPG', '目前Camosun College 大一 BA.Psychology&Criminal Justice双专业在读 可以辅导高中Psychology11&12, AP Pyschology, IB Psychology & Social Studies 10-12'),
                victutors.list.CreateNewTutorEntry('Psychology300A/300B', 'Ryan Willoughby', '250 686 0198', 'ryan947@gmail.com', 'N/A', './Images/img_avatar1.png', './Images/NoQRCode.png', 'Psychology 300A, 300B.  Availability: Mondays to Saturdays from the first week of October until the last week of April. Mondays to Fridays from the week of May until the last week of September.  Price: $40.00 per hour')
            ];
            break;
        case 'STAT':
            victutors.list.STATlist = [
                victutors.list.CreateNewTutorEntry('STAT100/200', '唐鹏', '778 922 5595', 'pengtang268@gmail.com', 'tangpeng268', './Images/img_avatar1.png', './Images/Math/tangpeng.jpg', '本科统计+经济，现UVic stat master在读,。可补Calculus（MATH100/101/200/204）、Linear algebra(MATH110/208/211)以及所有的STAT及相关课程。100/200 level 30一小时，300以上level 35/40一小时。'),
                victutors.list.CreateNewTutorEntry('STAT100/200', 'Wayne Lu', '250 507 2503', 'funfunlu@fhotmail.com', 'mogua001', './Images/img_avatar6.png', './Images/Math/waynelu.jpg', 'UVIC的PHD学生. 本科:统计 ＋ 经济, 硕士:统计, 博士:地理. 超过7年家教经验,基本以大学为主,高中和研究生课程为辅, 可以辅导Uvic和Camosun 数学统计课程, 价格根据课程难度而定, 具体请微信联系'),
                victutors.list.CreateNewTutorEntry('STAT252/254', 'Ryan Willoughby', '250 686 0198', 'ryan947@gmail.com', 'N/A', './Images/img_avatar1.png', './Images/NoQRCode.png', 'Statistics 252, 254, 255, 256, 260, 261, 350, 353, 354, 450.  Availability: Mondays to Saturdays from the first week of October until the last week of April. Mondays to Fridays from the week of May until the last week of September.  Price: $40.00 per hour'),
                victutors.list.CreateNewTutorEntry('Uvic STAT', '葉啟光', '778 863 2498', 'chikuang@uvic.ca', 'okyeh2111', './Images/img_avatar1.png', './Images/Math/qiguangye.JPG', '本科數學+統計+計算機榮譽學位,UVic統計碩士在讀.可補數學(MATH) 1-2年級所有課程,所有統計(Stat) 課程. 100-200 level $30/hr, 300-400 level 按課收費.')
            ];
            break;
    }
};

victutors.list.CreateNewTutorEntry = function(_subject, _name, _phone, _email, _weChat, _imgsrc, _barcode, _introduction) {
    return { Subject: _subject, Name: _name, Phone: _phone, Email: _email, WeChat: _weChat, Image: _imgsrc, Barcode: _barcode, Introduction: _introduction };
};