victutors.createNS("victutors.functions")

victutors.functions.length;
victutors.functions.selectedValue;

victutors.functions.tQuestionNo = 0;
victutors.functions.tShowAnswer = 0;
victutors.functions.sQuestionNo = 0;
victutors.functions.sShowAnswer = 0;

victutors.functions.tAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.functions.tQuestionNo;
    if (no1 != no2) {
        if (no2 != 0) {
            $('#ta' + no2).hide();
            $('#tq' + no2).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
        $('#ta' + no1).show();
        $('#tq' + no1).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        victutors.functions.tQuestionNo = no1;
        victutors.functions.tShowAnswer = 1;
    } else {
        if (victutors.functions.tShowAnswer == 0) {
            $('#ta' + str).show();
            victutors.functions.tShowAnswer = 1;
            $('#tq' + str).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        } else {
            $('#ta' + str).hide();
            victutors.functions.tShowAnswer = 0;
            $('#tq' + str).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
    }
}

victutors.functions.sAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.functions.sQuestionNo;
    if (no1 != no2) {
        if (no2 != 0) {
            $('#sa' + no2).hide();
            $('#sq' + no2).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
        $('#sa' + no1).show();
        $('#sq' + no1).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        victutors.functions.sQuestionNo = no1;
        victutors.functions.sShowAnswer = 1;
    } else {
        if (victutors.functions.sShowAnswer == 0) {
            $('#sa' + str).show();
            victutors.functions.sShowAnswer = 1;
            $('#sq' + str).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        } else {
            $('#sa' + str).hide();
            victutors.functions.sShowAnswer = 0;
            $('#sq' + str).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
    }
}

victutors.functions.responsive = function() {
    var x = document.getElementById("navbarlist");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

victutors.functions.DBlogin = function() {
    window.open('database.php', '_self');
}

victutors.functions.sendFeedBack = function() {
    var subject = $('#feedback_subject').val();
    var text = $('#feedback_text').val();
    var emailcontent = { 'subject': subject, 'text': text };
    $.ajax({
        url: "feedback.php",
        type: 'POST',
        data: { "email": JSON.stringify(emailcontent) },
        success: function(response) {
            //response = response.replace(/\r?\n|\r/g, "");
            //alert(response);
            $('#FeedbackModal').hide();
            $('#feedbackAlert').show();
        }
    });
}

victutors.functions.sendTutorInfo = function() {
    if ($('#newTutorIntro').val() === '') {
        $('#newTutorMoreInfoAlert').css({ 'z-index': 9999 });
        $('#newTutorMoreInfoAlert').show();
        return;
    }
    var name = $('#uname').val();
    var phone = $('#uphone').val();
    var wechat = $('#uwechat').val();
    var subject = $('#usubject').val();
    var email = $('#uemail').val();
    var content = $('#newTutorIntro').val();
    var emailcontent = { 'name': name, 'phone': phone, 'wechat': wechat, 'subject': subject, 'email': email, 'content': content };
    $.ajax({
        url: "uploadtxt.php",
        type: 'POST',
        data: {
            "info": JSON.stringify(emailcontent)
        },
        success: function(response) {
            //response = response.replace(/\r?\n|\r/g, "");
            //alert(response);
            $('#joinUsModal').hide();
            $('#newTutorAlert').show();
        }
    });
}

//user search for faculty
victutors.functions.GetTutorByFaculty = function() {
    if (typeof victutors.functions.selectedValue === 'undefined') {
        $('#searchAlert').show();
        return;
    }
    sessionStorage.setItem('faculty', victutors.functions.selectedValue); //set session storage (faculty that user search for)
    window.open('Tutorlist.php', '_self');
}

victutors.functions.SetUpSelectPicker = function() {
    $('#Fselecter').append('<option class="w3-large w3-left w3-text-red" disabled>向下滑动查看更多选择</option>');
    for (i = 0; i < victutors.list.FacultyList.length; i++) {
        $('#Fselecter').append('<option class="w3-large w3-left-align">' + victutors.list.FacultyList[i] + '</option>');
    }
}

victutors.functions.loadPartner = function (id) {
    //alert('./Images/Partner/' + id + '.jpg')
    $('#partnerModal .imageFrame').css({'background-image': 'url("/Images/Partner/' + id + '.jpg")'});
    $('#partnerModal').show();
}
/****************************/

//document ready start from here
$(document).ready(function() {

    //set search and title
    $('#searchToolPanel').css({ 'margin-top': (window.innerHeight / 2 - 125) + 20 });
    victutors.functions.length = window.outerWidth;

    // go to top tooltip
    $('[data-toggle="gotop"]').tooltip({
        trigger: 'hover'
    });

    //setup select picker
    victutors.functions.SetUpSelectPicker();
    //footer current time
    $(window).scroll(function() {

        //gotoTop button
        if ($(window).scrollTop() > 300) {
            $('#GoToTopButton').show();
        } else {
            $('#GoToTopButton').fadeOut();
        }

    })

    $('#Fselecter').selectpicker({ 'selectedText': '', style: 'btn-default btn-lg' });
    //faculty selecter
    $('#Fselecter').change(function() {
        var selectedText = $(this).find("option:selected").text();
        var faculty = selectedText.split(" ");
        victutors.functions.selectedValue = faculty[0];
    });
    // device detection
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        console.log("Mobile device detected");
        $('#adService, #Home_Icon, #searchPanelIcon, #feedbackModal, #qandaModal').hide();
        $('#myTopnav').css({ 'position': '' });
        $('#myTopnav').attr('data-toggle', 'collapse');
        $('#myTopnav').attr('data-target', '#Navbar');
        $('#serviceButton').empty();
        $('#imageUpload').html('<p class="w3-text-red">请使用电脑端上传微信二维码或联系我们.对您照成的不便我们深感歉意</p>');
        $('#tutorInfoUpload').css({ 'margin-left': '35%', 'margin-top': 50 });
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
            },
            error: function(message) {
                console.log(message);
            }
        });
    });
});