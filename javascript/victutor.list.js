victutor.createNS("victutor.list")

victutor.list.FacultyList = [
    'CSC : Computer Science － 计算机科学',
    'MATH : Mathematics - 数学',
    'ECON : Economics － 经济学',
    'STATS : Statistics － 统计学',
];

victutor.list.CSClist = [];
victutor.list.MATHlist = [];
victutor.list.ECONlist = [];
victutor.list.STATlist = [];


victutor.list.SetUplist = function (faculty) {
    switch (faculty){
        case 'CSC':
            victutor.list.CSClist = [
                victutor.list.CreateNewTutorEntry("CSC", "Wayne Zhang", "123", "email1", "wechat1", "./Images/img_avatar1.png", "./Images/WeChat.png"),
                victutor.list.CreateNewTutorEntry("CSC", "You Guess", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat2.png"),
                victutor.list.CreateNewTutorEntry("CSC", "Who Knows", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat4.png"),
                victutor.list.CreateNewTutorEntry("CSC", "Ace Ye", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png")
            ];
        return victutor.list.CSClist;
        case 'MATH':
            victutor.list.MATHlist = [
                victutor.list.CreateNewTutorEntry("MATH", "MATH1", "123", "email1", "wechat1", "./Images/img_avatar1.png", "../Images/WeChat.png"),
                victutor.list.CreateNewTutorEntry("MATH", "MATH2", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat.png"),
                victutor.list.CreateNewTutorEntry("MATH", "MATH3", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat4.png"),
                victutor.list.CreateNewTutorEntry("MATH", "MATH4", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat2.png")
            ];
        return victutor.list.MATHlist;
        case 'ECON':
            victutor.list.ECONlist = [
                victutor.list.CreateNewTutorEntry("ECON", "ECON1", "123", "email1", "wechat1", "./Images/img_avatar1.png", "./Images/WeChat4.png"),
                victutor.list.CreateNewTutorEntry("ECON", "ECON2", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat2.png"),
                victutor.list.CreateNewTutorEntry("ECON", "ECON3", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat.png"),
                victutor.list.CreateNewTutorEntry("ECON", "ECON4", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png")
            ];
        return victutor.list.ECONlist;
        case 'STATS':
            victutor.list.STATlist = [
                victutor.list.CreateNewTutorEntry("STAT", "STATS1", "123", "email1", "wechat1", "./Images/img_avatar1.png", "./Images/WeChat4.png"),
                victutor.list.CreateNewTutorEntry("STAT", "STATS2", "456", "email2", "wechat2", "./Images/img_avatar3.png", "./Images/WeChat.png"),
                victutor.list.CreateNewTutorEntry("STAT", "STATS3", "789", "email3", "wechat3", "./Images/img_avatar6.png", "./Images/WeChat2.png"),
                victutor.list.CreateNewTutorEntry("STAT", "STATS4", "abc", "email4", "wechat4", "./Images/img_avatar1.png", "./Images/WeChat.png"),
            ];
        return victutor.list.STATlist;
    }
}

victutor.list.CreateNewTutorEntry = function (_faculty, _name, _phone, _email, _weChat, _imgsrc, _barcode) {
    return { Faculty: _faculty, Name: _name, Phone: _phone, Email: _email, WeChat: _weChat, Image: _imgsrc, Barcode: _barcode };
}



