victutors.createNS("victutors.utils");


victutors.utils.tQuestionNo = 0;
victutors.utils.tShowAnswer = 0;
victutors.utils.sQuestionNo = 0;
victutors.utils.sShowAnswer = 0;

victutors.utils.tAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.utils.tQuestionNo;
    if (no1 != no2) {
        if (no2 != 0) {
            $('#ta' + no2).hide();
            $('#tq' + no2).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
        $('#ta' + no1).show();
        $('#tq' + no1).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        victutors.utils.tQuestionNo = no1;
        victutors.utils.tShowAnswer = 1;
    } else {
        if (victutors.utils.tShowAnswer == 0) {
            $('#ta' + str).show();
            victutors.utils.tShowAnswer = 1;
            $('#tq' + str).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        } else {
            $('#ta' + str).hide();
            victutors.utils.tShowAnswer = 0;
            $('#tq' + str).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
    }
}

victutors.utils.sAnswer = function(question) {
    var str = question;
    str = str.substring(2);
    var no1 = Number(str);
    var no2 = victutors.utils.sQuestionNo;
    if (no1 != no2) {
        if (no2 != 0) {
            $('#sa' + no2).hide();
            $('#sq' + no2).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
        $('#sa' + no1).show();
        $('#sq' + no1).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        victutors.utils.sQuestionNo = no1;
        victutors.utils.sShowAnswer = 1;
    } else {
        if (victutors.utils.sShowAnswer == 0) {
            $('#sa' + str).show();
            victutors.utils.sShowAnswer = 1;
            $('#sq' + str).html("<i class='fa fa-minus' aria-hidden='true'></i>");
        } else {
            $('#sa' + str).hide();
            victutors.utils.sShowAnswer = 0;
            $('#sq' + str).html("<i class='fa fa-plus' aria-hidden='true'></i>");
        }
    }
}

victutors.utils.sendFeedBack = function() {
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

$(document).ready(function() {
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