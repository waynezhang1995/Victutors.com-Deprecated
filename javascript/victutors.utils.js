victutors.createNS('victutors.utils');

victutors.utils.tQuestionNo = 0;
victutors.utils.tShowAnswer = 0;
victutors.utils.sQuestionNo = 0;
victutors.utils.sShowAnswer = 0;
victutors.utils.selectedValue; // selectpicker value

victutors.utils.tAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.utils.tQuestionNo;
    if (no1 !== no2) {
        if (no2 !== 0) {
            $('#ta' + no2).hide();
            $('#tq' + no2).html('<i class="fa fa-plus" aria-hidden="true"></i>');
        }
        $('#ta' + no1).show();
        $('#tq' + no1).html('<i class="fa fa-minus" aria-hidden="true"></i>');
        victutors.utils.tQuestionNo = no1;
        victutors.utils.tShowAnswer = 1;
    } else {
        if (victutors.utils.tShowAnswer === 0) {
            $('#ta' + str).show();
            victutors.utils.tShowAnswer = 1;
            $('#tq' + str).html('<i class="fa fa-minus" aria-hidden="true"></i>');
        } else {
            $('#ta' + str).hide();
            victutors.utils.tShowAnswer = 0;
            $('#tq' + str).html('<i class="fa fa-plus" aria-hidden="true"></i>');
        }
    }
};

victutors.utils.sAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.utils.sQuestionNo;
    if (no1 !== no2) {
        if (no2 !== 0) {
            $('#sa' + no2).hide();
            $('#sq' + no2).html('<i class="fa fa-plus" aria-hidden="true"></i>');
        }
        $('#sa' + no1).show();
        $('#sq' + no1).html('<i class="fa fa-minus" aria-hidden="true"></i>');
        victutors.utils.sQuestionNo = no1;
        victutors.utils.sShowAnswer = 1;
    } else {
        if (victutors.utils.sShowAnswer === 0) {
            $('#sa' + str).show();
            victutors.utils.sShowAnswer = 1;
            $('#sq' + str).html('<i class="fa fa-minus" aria-hidden="true"></i>');
        } else {
            $('#sa' + str).hide();
            victutors.utils.sShowAnswer = 0;
            $('#sq' + str).html('<i class="fa fa-plus" aria-hidden="true"></i>');
        }
    }
};

victutors.utils.sendFeedBack = function() {
    var subject = $('#feedback_subject').val();
    var text = $('#feedback_text').val();
    var emailcontent = { 'subject': subject, 'text': text };
    $.ajax({
        url: 'feedback.php',
        type: 'POST',
        data: { 'email': JSON.stringify(emailcontent) },
        success: function(response) {
            $('#FeedbackModal').hide();
            $('#feedbackAlert').show();
        }
    });
};

victutors.utils.sendTutorInfo = function() {
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
        url: 'uploadtxt.php',
        type: 'POST',
        data: {
            'info': JSON.stringify(emailcontent)
        },
        success: function(response) {
            $('#joinUsModal').hide();
            $('#newTutorAlert').show();
        }
    });
};

victutors.utils.GetTutorByFaculty = function() { // eslint-disable-line space-before-function-paren
    if (typeof victutors.utils.selectedValue === 'undefined') {
        $('#searchAlert').show();
        return;
    }
    sessionStorage.setItem('faculty', victutors.utils.selectedValue); // set session storage (faculty that user searching for)
    window.open('Tutorlist.php', '_self');
};

victutors.utils.DBlogin = function() {
    window.open('database.php', '_self');
};

// push content downward if navbar gets shrinked
victutors.utils.ReSize = function() {
    var w = $('#TopNavBar').height();
    var h = $('#TopNavBar').width();
    if (h <= 1060) { // hide title
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
};

victutors.utils.gotoTop = function() {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
    return false;
};

$(window).scroll(function() {
    // gotoTop button
    if ($(window).scrollTop() > 300) {
        $('#GoToTopButton').show();
    } else {
        $('#GoToTopButton').fadeOut();
    }
});

$(document).ready(function() {
    // check page size and make adjustment
    victutors.utils.ReSize();

    $('.partner_tag').click(function() {
        event.preventDefault();
        $('#partnerModal div.w3-modal-content img').attr('src', './Images/Partner/' + this['id']);
        $('#partnerModal div.w3-modal-content img').attr('class', this['id']);
        $('#partnerModal').show();
        $('#partnerModal span').show();
    });

    $('#Fselecter').selectpicker({ 'selectedText': '', style: 'btn-default' });
    // faculty selecter
    $('#Fselecter').change(function() {
        var selectedText = $(this).find('option:selected').text();
        var faculty = selectedText.split(' ');
        victutors.utils.selectedValue = faculty[0];
    });

    $('#fileInput').on('change', function() {
        var fileData = $('#fileInput').prop('files')[0];
        if (!new RegExp(/(jpg)|(jpeg)|(bmp)|(gif)|(png)/i).test(fileData.name.split('.')[1])) {
            alert('只限上传图片文件，请重新选择！');
            return;
        }
        $('#state').html('正在上传！如长时间没有结果,请用电脑端上传或联系我们！');
        var formData = new FormData();
        formData.append('file', fileData);
        $.ajax({
            url: 'uploadimage.php', // point to server-side PHP script
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            type: 'post',
            success: function(response) {
                $('#imgSpinner').hide();
                $('#state').html('上传完成！');
                console.log(response);
                $('#ImgUpLoad').attr('src', response + fileData.name);
                $('#ImgUpLoad').css({ 'width': '200px', 'height': '170px', 'margin-left': '50px', 'margin-bottom': '30px' });
            }
        });
    });
});