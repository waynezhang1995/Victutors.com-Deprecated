victutors.createNS("victutors.Tutorlist")

victutors.Tutorlist.selectedValue; //selectpicker value
victutors.Tutorlist.SelectedFaculty; //faculty user searching for
victutors.Tutorlist.SelectedTutorList;
victutors.Tutorlist.PageTitle;
victutors.Tutorlist.InitialFooterPosition;

victutors.Tutorlist.gotoTop = function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;
}

victutors.Tutorlist.GetRandom = function(tutoramount, randomArray) {
    if (!randomArray.length) { //at very beginning, we need to fill in all the posible numbers. Here bewteen 0 and # of tutors
        for (var i = 0; i < tutoramount; i++) {
            randomArray.push(i);
        }
    }
    var index = Math.floor(Math.random() * randomArray.length); //get a random number between 0 and array length
    var val = randomArray[index]; //get value at that position. At beginning: index = val; After: index != val
    randomArray.splice(index, 1); //remove that value
    return val;
}

var order = 0;
var tags = new Array(); //contains all the tags
var currentlist;

victutors.Tutorlist.GetTutorList = function(faculty) {
    var s = '';
    order = 0;
    switch (faculty) {
        case 'CSC':
            var CSCTutors = [];
            var TutorCount = victutors.list.CSClist.length;
            for (i = 0; i < victutors.list.CSClist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, CSCTutors);
                var item = victutors.list.CSClist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.CSClist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'MATH':
            var MATHTutors = [];
            var TutorCount = victutors.list.MATHlist.length;
            for (i = 0; i < TutorCount; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, MATHTutors);
                var item = victutors.list.MATHlist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.MATHlist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'ECON':
            var ECONTutors = [];
            var TutorCount = victutors.list.ECONlist.length;
            for (i = 0; i < TutorCount; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, ECONTutors);
                var item = victutors.list.ECONlist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.ECONlist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'ENGL':
            var ENGLTutors = [];
            var TutorCount = victutors.list.ENGLlist.length;
            for (i = 0; i < victutors.list.ENGLlist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, ENGLTutors);
                var item = victutors.list.ENGLlist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.ENGLlist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'MUSC':
            var MUSCTutors = [];
            var TutorCount = victutors.list.MUSClist.length;
            for (i = 0; i < victutors.list.MUSClist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, MUSCTutors);
                var item = victutors.list.MUSClist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.MUSClist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'ENGR':
            var ENGRTutors = [];
            var TutorCount = victutors.list.ENGRlist.length;
            for (i = 0; i < victutors.list.ENGRlist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, ENGRTutors);
                var item = victutors.list.ENGRlist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.ENGRlist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'HINF':
            var HINFTutors = [];
            var TutorCount = victutors.list.HINFlist.length;
            for (i = 0; i < victutors.list.HINFlist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, HINFTutors);
                var item = victutors.list.HINFlist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.HINFlist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        case 'PSYC':
            var PSYCTutors = [];
            var TutorCount = victutors.list.PSYClist.length;
            for (i = 0; i < victutors.list.PSYClist.length; i++) {
                var index = victutors.Tutorlist.GetRandom(TutorCount, PSYCTutors);
                var item = victutors.list.PSYClist[index];
                //get tags
                var itemtags = item.Subject.split(",");
                for (j = 0; j < itemtags.length; j++) {
                    if (tags.indexOf(itemtags[j]) == -1) {
                        tags.push(itemtags[j]);
                    }
                }
                s = victutors.Tutorlist.GetTutorDetail(index, s, item);
            }
            currentlist = victutors.list.PSYClist;
            victutors.Tutorlist.SetUpTags(tags);
            $('#TutorListAll').html(s);
            break;
        default:
            break;
    }
}

victutors.Tutorlist.SetUpTags = function(tags) {
    var buttonlist = ["btn-primary", "btn-success", "btn-info", "btn-warning", "btn-danger", "btn-default"];
    var s = "";
    s += "<div class = \"w3-text-white w3-large\">";
    s += "<div class = \"w3-text-white w3-xlarge\"><p>分类选择:  </p>";
    s += "<button style = \"margin-right:10px;margin-bottom:10px\" type=\"button\" id = \"tag0\" class = \"w3-large btn btn-default\" onclick = \"victutors.Tutorlist.ShowListByTags('all')\">完整名单</button>";
    for (i = 0; i < tags.length; i++) {
        s += "<button style = \"margin-right:10px;margin-bottom:10px\" type=\"button\" id = \"tag" + i + "\" class = \"w3-large btn " + buttonlist[i % buttonlist.length] + "\" onclick = \"victutors.Tutorlist.ShowListByTags('" + tags[i] + "')\">" + tags[i] + "</button>";
    }
    s += "</div>";
    s += "</div>";
    $("#searchTags").html(s);
}

victutors.Tutorlist.ShowListByTags = function(tag) {
    var s = "";
    var Tutors = [];
    var TutorCount = currentlist.length;
    for (i = 0; i < currentlist.length; i++) {
        var index = victutors.Tutorlist.GetRandom(TutorCount, Tutors);
        var item = currentlist[index];
        var itemtags = item.Subject.split(",");
        if (itemtags.indexOf(tag) != -1 || tag == 'all') {
            s = victutors.Tutorlist.GetTutorDetail(index, s, item);
        }
    }
    if (tag != 'all') {
        $('#title').html(victutors.Tutorlist.PageTitle + " - " + tag);
    } else {
        $('#title').html(victutors.Tutorlist.PageTitle);
    }

    $('#TutorListAll').html(s);
    // $('#mainContent').css({ 'min-height': victutors.Tutorlist.InitialFooterPosition });
}

victutors.Tutorlist.GetTutorDetail = function(i, s, item) {
    var color = '';
    if (order % 2 === 0) {
        color = '<div class="w3-card-12 w3-hover-shadow w3-white">';
    } else {
        color = '<div class="w3-card-12 w3-hover-shadow w3-pale-green">';
    }
    order++;
    s += color;
    s += '<div class="w3-row" >';
    s += '<div class="w3-col s4 w3-center">';
    s += '<div class="col-sm-5 w3-left" style = "top:8px;width:100% !important">';
    s += '<table class = "w3-large" style="cursor:default;width:100%">';
    s += '<tr><td><p style = "cursor:default;margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-user"></span> 姓名: ' + item.Name + '</p></td></tr>';
    s += '<tr><td><p style = "cursor:default;margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-phone"></span> 电话: ' + item.Phone + '</p></td></tr>';
    s += '<tr><td><p style = "cursor:default;margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-envelope"></span> 邮箱: ' + item.Email + '</p></td></tr>';
    s += '<tr><td><p style = "cursor:default;margin-top:10px" class = "w3-left"><span class="glyphicon glyphicon-qrcode"></span> 微信: ' + item.WeChat + '</p></td></tr>';
    s += '</table>';
    s += '</div>';
    s += '</div>';
    s += '<div class="w3-center w3-col s4 "><p style = "text-align: justify;text-justify: inter-word;font-size:15px;margin-top:10px">' + item.Introduction + '</p></div>';
    s += '<div style="cursor:default" class="w3-right w3-col s4"><img src=\'' + item.Barcode + '\' alt="WeChat" style="float:right;width: 190px;height:190px"></div>';
    s += '</div>';
    s += '</div>';
    return s;
}

//push content downward if navbar gets shrinked
victutors.Tutorlist.ReSize = function() {
    var w = $('#TopNavBar').height();
    var h = $('#TopNavBar').width();
    if (h <= 1060) { //hide title
        $('.navbar-brand').hide();
        $('#victutors_icon').css({ 'height': 40, 'width': 55, 'margin-top': 5 });
    } else {
        $('.navbar-brand').show();
        $('#victutors_icon').css({ 'height': 28, 'width': 53, 'margin-top': 9 });
    }
    if ($('#TopNavBar').height() > 100) {
        $('#mainContent').css({ 'margin-top': w + 50 });
    } else {
        $('#mainContent').css({ 'margin-top': 70 });
    }
}

victutors.Tutorlist.ShowHideServerPanel = function(flag) {
    if (flag == 0) {
        $('#services').hide();
        $('#serviceButton').delay(1000).show();
    } else {
        $('#serviceButton').hide();
        $('#services').show();
    }
}

victutors.Tutorlist.GetTutorByFaculty = function() {

    if (typeof victutors.Tutorlist.selectedValue === 'undefined') {
        $('#searchAlert').show();
        return;
    }
    sessionStorage.setItem('faculty', victutors.Tutorlist.selectedValue); //set session storage (faculty that user searching for)
    window.open('Tutorlist.php', '_self');
}

victutors.Tutorlist.setPage = function() {
    var title = "";
    switch (victutors.Tutorlist.SelectedFaculty) {
        case 'CSC':
            title = "Computer Science - 计算机科学家教名单";
            victutors.Tutorlist.PageTitle = title;
            $('#title').html(title);
            break;
        case 'MATH':
            title = "Mathematics - 数学家教名单";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
        case 'MUSC':
            title = "Music - 音乐家教名单";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
        case 'ENGL':
            title = "English - 英文家教名单";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
        case 'ENGR':
            title = "Engineering - 工程学家教名单";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
        case 'HINF':
            title = "Health Information Science - 健康信息科学";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
        case 'PSYC':
            title = "Psychology - 心理学";
            $('#title').html(title);
            victutors.Tutorlist.PageTitle = title;
            break;
    }
    victutors.Tutorlist.GetTutorList(victutors.Tutorlist.SelectedFaculty);
}

victutors.Tutorlist.SetUpSelectPicker = function() {
        for (i = 0; i < victutors.list.FacultyList.length; i++) {
            $('#Fselecter').append('<option>' + victutors.list.FacultyList[i] + '</option>');
        }
    }
    /****************************/

//document ready start from here
$(document).ready(function() {

    //Get faculty send by index.php
    victutors.Tutorlist.SelectedFaculty = sessionStorage.getItem("faculty");

    //initialize Tutor list
    victutors.Tutorlist.SelectedTutorList = victutors.list.SetUplist(victutors.Tutorlist.SelectedFaculty);

    victutors.Tutorlist.setPage();

    //check page size and make adjustment
    victutors.Tutorlist.ReSize();

    //setup Select Picker
    victutors.Tutorlist.SetUpSelectPicker();

    //set background image height
    victutors.Tutorlist.InitialFooterPosition = $('#mainContent').height();
    // go to top tooltip
    $('[data-toggle="gotop"], [data-toggle="title"], [data-toggle="showlist"], [data-toggle="gonext"]').tooltip({
        trigger: 'hover'
    });

    /**
     * Triggered when we scroll the page
     */
    $(window).scroll(function() {

        //gotoTop button
        if ($(window).scrollTop() > 300) {
            $('#GoToTopButton').show();
        } else {
            $('#GoToTopButton').fadeOut();
        }

    })

    $('#Fselecter').selectpicker({ 'selectedText': '', style: 'btn-default' });
    //faculty selecter
    $('#Fselecter').change(function() {
        var selectedText = $(this).find("option:selected").text();
        var faculty = selectedText.split(" ");
        victutors.Tutorlist.selectedValue = faculty[0];
    });

    // device detection
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        console.log("Mobile device detected");
        $('#feedbackModal, #contactModal, #qandaModal').hide();

        $(window).resize(function() {
            if ($("#TopNavBar").width() <= 800) {
                $('#contactModal').hide();
            } else {
                $('#contactModal').show();
            }

            if ($("#TopNavBar").width() <= 640) {
                $('#joinusModal').hide();
            } else {
                $('#joinusModal').show();
            }

            if ($("#TopNavBar").width() <= 542) {
                $('#victutors_icon').hide();
            } else {
                $('#victutors_icon').show();
            }
        });
    }

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        console.log("Mobile device detected");
        $('#imageUpload').html('<p style="margin-top: 70%" class="w3-text-red">请使用电脑端上传微信二维码或联系我们.对您照成的不便我们深感歉意</p>');
        $('#tutorInfoUpload').css({ 'margin-left': '35%', 'margin-top': 50 });
        $('#mainContent').css({ 'min-height': 1508 });
    }

    $('#fileInput').on('change', function() {
        var file_data = $('#fileInput').prop('files')[0];
        if (!new RegExp(/(jpg)|(jpeg)|(bmp)|(gif)|(png)/i).test(file_data.name.split('.')[1])) {
            alert("只限上传图片文件，请重新选择！");
            return;
        }
        $("#state").html("正在上传！如长时间没有结果,请用电脑端上传或联系我们！");
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: 'uploadimage.php', // point to server-side PHP script
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(response) {
                $('#imgSpinner').hide();
                $("#state").html("上传完成！");
                console.log(response);
                $('#ImgUpLoad').attr("src", response + file_data.name);
                $('#ImgUpLoad').css({ 'width': '200px', 'height': '170px', 'margin-left': '50px', 'margin-bottom': '30px' });
            }
        });
    });
});