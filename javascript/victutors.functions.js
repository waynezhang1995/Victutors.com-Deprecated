victutors.createNS('victutors.functions');

victutors.functions.length;
victutors.functions.selectedValue;

victutors.functions.responsive = function() {
    var x = document.getElementById('navbarlist');
    if (x.className === 'topnav') {
        x.className += ' responsive';
    } else {
        x.className = 'topnav';
    }
};

// user search for faculty
victutors.functions.GetTutorByFaculty = function() {
    if (typeof victutors.functions.selectedValue === 'undefined') {
        $('#searchAlert').show();
        return;
    }
    sessionStorage.setItem('faculty', victutors.functions.selectedValue); // set session storage (faculty that user search for)
    window.open('Tutorlist.php', '_self');
};

victutors.functions.SetUpSelectPicker = function() {
    $('#Fselecter').append('<option class="w3-large w3-left w3-text-red" disabled>向下滑动查看更多选择</option>');
    for (i = 0; i < victutors.list.FacultyList.length; i++) {
        $('#Fselecter').append('<option class="w3-large w3-left-align">' + victutors.list.FacultyList[i] + '</option>');
    }
};

// document ready start from here
$(document).ready(function() {
    // set search and title
    $('#searchToolPanel').css({ 'margin-top': (window.innerHeight / 2 - 125) + 20 });
    victutors.functions.length = window.outerWidth;

    // go to top tooltip
    $('[data-toggle="gotop"]').tooltip({
        trigger: 'hover'
    });

    // setup select picker
    victutors.functions.SetUpSelectPicker();

    $('#Fselecter').selectpicker({ 'selectedText': '', style: 'btn-default btn-lg' });
    // faculty selecter
    $('#Fselecter').change(function() {
        var selectedText = $(this).find('option:selected').text();
        var faculty = selectedText.split(' ');
        victutors.functions.selectedValue = faculty[0];
    });

    // device detection
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        console.log('Mobile device detected');
        $('#adService, #Home_Icon, #searchPanelIcon, #feedbackModal, #qandaModal').hide();
        $('#serviceButton').empty();
        $('#imageUpload').html('<p class="w3-text-red">请使用电脑端上传微信二维码或联系我们.对您照成的不便我们深感歉意</p>');
        $('#tutorInfoUpload').css({ 'margin-left': '35%', 'margin-top': 50 });
    }
});