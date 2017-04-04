victutors.createNS("victutors.functions")

victutors.functions.length;
victutors.functions.selectedValue;

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

    $('.partner_tag').click(function() {
        $('#partnerModal div.w3-modal-content img').attr('src', './Images/Partner/' + this['id']);
        $('#partnerModal div.w3-modal-content img').attr('class', this['id']);
        $('#partnerModal').show();
        $('#partnerModal span').show();
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