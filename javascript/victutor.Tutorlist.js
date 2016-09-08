victutor.createNS("victutor.Tutorlist")

victutor.Tutorlist.selectedValue; //selectpicker value
victutor.Tutorlist.SelectedFaculty; //faculty user searching for
victutor.Tutorlist.SelectedTutorList;

$(function () {
    // 创建一个上传参数
    var uploadOption =
        {
            // 提交目标
            action: "uploadimage.php",
            // 服务端接收的名称
            name: "file",
            // 自动提交
            autoSubmit: false,
            // 选择文件之后…
            onChange: function (file, extension) {
                if (new RegExp(/(jpg)|(jpeg)|(bmp)|(gif)|(png)/i).test(extension)) {
                    //file ok

                    $("#filepath").val(file);
                    $('#up').click();

                } else {
                    alert("只限上传图片文件，请重新选择！");
                }
            },

            onSubmit: function (file, extension) {
                $("#state").val("正在上传" + file + "..");
                $('#imgSpinner').show();
            },
            // 上传完成之后
            onComplete: function (file, response) {
                $('#imgSpinner').hide();
                $("#state").val("上传完成！");
                console.log(response);
                $('#ImgUpLoad').attr("src", response + file);

            }
        }

    // 初始化图片上传框
    var oAjaxUpload = new AjaxUpload('#selector', uploadOption);

    // 给上传按钮增加上传动作
    $("#up").click(function () {
        oAjaxUpload.submit();
    });
});

victutor.Tutorlist.gotoTop = function () {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;
}

victutor.Tutorlist.GetTutorList = function (faculty) {
    var s = '';
    switch (faculty) {
        case 'CSC':
            for (i = 0; i < victutor.list.CSClist.length; i++) {
                var item = victutor.list.CSClist[i];
                s = victutor.Tutorlist.GetTutorDetail(i, s, item);
            }
            $('#TutorListAll').html(s);
            break;
        case 'MATH':
            for (i = 0; i < victutor.list.MATHlist.length; i++) {
                var item = victutor.list.MATHlist[i];
                s = victutor.Tutorlist.GetTutorDetail(i, s, item);
            }
            $('#TutorListAll').html(s);
            break;
        case 'ECON':
            for (i = 0; i < victutor.list.ECONlist.length; i++) {
                var item = victutor.list.ECONlist[i];
                s = victutor.Tutorlist.GetTutorDetail(i, s, item);
            }
            $('#TutorListAll').html(s);
            break;
        case 'STATS':
            for (i = 0; i < victutor.list.STATlist.length; i++) {
                var item = victutor.list.STATlist[i];
                s = victutor.Tutorlist.GetTutorDetail(i, s, item);
            }
            $('#TutorListAll').html(s);
            break;
        default:
            break;
    }
}

victutor.Tutorlist.GetTutorDetail = function (i, s, item) {
    var color = '';
    if (i % 2 === 0) {
        color = '<div class="w3-card-12 w3-hover-shadow w3-white">';
    } else {
        color = '<div class="w3-card-12 w3-hover-shadow w3-pale-green">';
    }
    s += color;
    s += '<div class="w3-row">';
    s += '<div class="w3-col s6 w3-center">';
    s += '<div class="col-sm-5 w3-left" style = "top:8px;width:100% !important">';
    s += '<table class = "w3-large" style="width:100%">'
    s += '<tr><td><p style = "margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-user"></span> 姓名: ' + item.Name + '</p></td></tr>';
    s += '<tr><td><p style = "margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-phone"></span> 电话: ' + item.Phone + '</p></td></tr>';
    s += '<tr><td><p style = "margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-envelope"></span> 邮箱: ' + item.Email + '</p></td></tr>';
    s += '<tr><td><p style = "margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-qrcode"></span> 微信: ' + item.WeChat + '</p></td></tr>';
    s += '</table>';
    s += '</div>';
    s += '</div>';
    s += '<div class="w3-col s6 w3-center"><img src=\'' + item.Barcode + '\' alt="WeChat" style="float:right;width: 190px"></div>';
    s += '</div>';
    s += '</div>';
    return s;
}

//push content downward if navbar gets shrinked
victutor.Tutorlist.ReSize = function () {
    var w = $('#TopNavBar').height();
    var h = $('#TopNavBar').width();
    if (h <= 1060) { //hide title
        $('.navbar-brand').hide();
        $('#Victutor_icon').css({ 'height': 40, 'width': 55, 'margin-top': 5 });
    } else {
        $('.navbar-brand').show();
        $('#Victutor_icon').css({ 'height': 28, 'width': 53, 'margin-top': 9 });
    }
    if ($('#TopNavBar').height() > 100) {
        $('#mainContent').css({ 'margin-top': w + 50 });
    } else {
        $('#mainContent').css({ 'margin-top': 70 });
    }


}

victutor.Tutorlist.ShowHideServerPanel = function (flag) {
    if (flag == 0) {
        $('#services').hide();
        $('#serviceButton').delay(1000).show();
    } else {
        $('#serviceButton').hide();
        $('#services').show();
    }
}

victutor.Tutorlist.GetTutorByFaculty = function () {

    if (typeof victutor.Tutorlist.selectedValue === 'undefined') {
        $('#searchAlert').show();
        return;
    }
    sessionStorage.setItem('faculty', victutor.Tutorlist.selectedValue); //set session storage (faculty that user searching for)
    window.open('Tutorlist.php', '_self');
}

victutor.Tutorlist.setPage = function () {
    var title = "";
    switch (victutor.Tutorlist.SelectedFaculty) {
        case 'CSC':
            title = "Computer Science - 计算机科学家教名单";
            $('#title').html(title);
            break;
        case 'MATH':
            title = "Mathematics - 数学家教名单";
            $('#title').html(title);
            break;
        case 'ECON':
            title = "Economics - 经济学家教名单";
            $('#title').html(title);
            break;
        case 'STATS':
            title = "Statistics - 统计学家教名单";
            $('#title').html(title);
            break;
    }
    victutor.Tutorlist.GetTutorList(victutor.Tutorlist.SelectedFaculty);
}

victutor.Tutorlist.SetUpSelectPicker = function () {
    for (i = 0; i < victutor.list.FacultyList.length; i++) {
        $('#Fselecter').append('<option>' + victutor.list.FacultyList[i] + '</option>');
    }
}
/****************************/

//document ready start from here
$(document).ready(function () {

    //Get faculty send by index.php
    victutor.Tutorlist.SelectedFaculty = sessionStorage.getItem("faculty");

    //initialize Tutor list
    victutor.Tutorlist.SelectedTutorList = victutor.list.SetUplist(victutor.Tutorlist.SelectedFaculty);

    victutor.Tutorlist.setPage();

    //check page size and make adjustment
    victutor.Tutorlist.ReSize();

    //setup Select Picker
    victutor.Tutorlist.SetUpSelectPicker();

    //set background image height
    $('.wall').height($('#test').position().top);

    // go to top tooltip
    $('[data-toggle="gotop"], [data-toggle="title"], [data-toggle="showlist"], [data-toggle="gonext"]').tooltip({
        trigger: 'hover'
    });
    //footer current time
    document.getElementById("CurrentTime").innerHTML = Date();

    /**
     * Triggered when we scroll the page
     */
    $(window).scroll(function () {

        //gotoTop button
        if ($(window).scrollTop() > 300) {
            $('#GoToTopButton').show();
        } else {
            $('#GoToTopButton').fadeOut();
        }

    })

    $('#Fselecter').selectpicker({ 'selectedText': '', style: 'btn-default' });
    //faculty selecter
    $('#Fselecter').change(function () {
        var selectedText = $(this).find("option:selected").text();
        var faculty = selectedText.split(" ");
        victutor.Tutorlist.selectedValue = faculty[0];
    });
});






