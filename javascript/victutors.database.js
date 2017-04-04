victutors.createNS("victutors.database")

victutors.database.document = [];
victutors.database.courseList = ['CSC225', 'CSC305', 'CSC320', 'CSC355', 'CSC360', 'CSC361'];
victutors.database.selectedValue = '';
victutors.database.InitialFooterPosition;

victutors.database.sendFeedBack = function() {
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

victutors.database.gotoTop = function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;
}

victutors.database.getDoc = function() {
    if (victutors.database.selectedValue === '') {
        $('#searchAlert').show();
        return;
    }
    if ($('#filter_all').is(':checked')) {
        victutors.database.populateDocALL();
    } else if ($('#filter_assignment').is(':checked') && $('#filter_exam').is(':checked')) {
        victutors.database.populateDocALL();
    } else if ($('#filter_assignment').is(':checked')) {
        victutors.database.populateDoc('Assignment');
    } else if ($('#filter_exam').is(':checked')) {
        victutors.database.populateDoc('Exam');
    } else { //none
        victutors.database.populateDocALL();
    }

}

victutors.database.populateDocALL = function() {
    var docCount = 0;
    var s = '';
    for (var i = 0; i < victutors.database.document.length; i++) {

        if (victutors.database.document[i].course === victutors.database.selectedValue) {

            if (docCount % 3 == 0) {
                s += '<div class = "w3-row">';
            }
            s += '<div class="w3-col s4 w3-card-12 w3-hover-shadow w3-white">';
            s += '<ul class = "w3-large" style = "margin-left:10px; text-align:left !important; list-style-type: none">';
            s += '<li>科目 - ' + victutors.database.document[i].course + '</li>';
            s += '<li>类型 - ' + victutors.database.document[i].type + '</li>';
            s += '<li>时间 - ' + victutors.database.document[i].year + '-' + victutors.database.document[i].semester + '</li>';
            s += '<li>教授 - ' + victutors.database.document[i].prof_first + ' ' + victutors.database.document[i].prof_last + '</li>';
            s += '<li>信息 - ' + victutors.database.document[i].description + '</li>';
            s += '</ul><button onclick = "victutors.database.download(\'./Database/CSC/' + victutors.database.document[i].link + '\')" style = "margin-left:36%" class="w3-hover-red w3-teal w3-btn w3-large">下载 <i class="fa fa-download" aria-hidden="true"></i></button></div>';

            if ((docCount + 1) % 3 == 0) {
                s += '</div>';
            }
            docCount++;
        }
    }
    if (docCount == 0) {
        $('#emptyAlert').show();
        victutors.database.setLanding();
        victutors.database.selectedValue = '';
        $('.selectpicker').selectpicker('deselectAll');
        $('#filter_all,#filter_exam,#filter_assignment').bootstrapToggle('off'); // Unchecks it
        return;
    }
    if ((docCount + 1) % 3 !== 0) {
        s += '</div>';
    }
    $('#docList').html(s);
    $('#mainContent').css({ 'height': victutors.database.InitialFooterPosition });
}

victutors.database.setLanding = function() {
    var count = 0;
    var s = '';
    for (var i = 0; i < victutors.database.document.length; i++) {

        //set landing page
        if (i % 3 == 0) {
            s += '<div class = "w3-row">';
        }
        s += '<div class="w3-col s4 w3-card-12 w3-hover-shadow w3-white">';
        s += '<ul class = "w3-large" style = "margin-left:10px; text-align:left !important; list-style-type: none">';
        s += '<li>科目 - ' + victutors.database.document[i].course + '</li>';
        s += '<li>类型 - ' + victutors.database.document[i].type + '</li>';
        s += '<li>时间 - ' + victutors.database.document[i].year + '-' + victutors.database.document[i].semester + '</li>';
        s += '<li>教授 - ' + victutors.database.document[i].prof_first + ' ' + victutors.database.document[i].prof_last + '</li>';
        s += '<li>信息 - ' + victutors.database.document[i].description + '</li>';
        s += '</ul><button onclick = "victutors.database.download(\'./Database/CSC/' + victutors.database.document[i].link + '\')" style = "margin-left:36%" class="w3-hover-red w3-teal w3-btn w3-large">下载 <i class="fa fa-download" aria-hidden="true"></i></button></div>';

        if ((i + 1) % 3 == 0) {
            s += '</div>';
        }
        count = i;
    }
    if ((count + 1) % 3 !== 0) {
        s += '</div>';
    }
    $('#docList').html(s);
}

victutors.database.populateDoc = function(type) {
    var docCount = 0;
    var s = '';
    for (var i = 0; i < victutors.database.document.length; i++) {

        if (victutors.database.document[i].type === type && victutors.database.document[i].course === victutors.database.selectedValue) {

            if (docCount % 3 == 0) {
                s += '<div class = "w3-row">';
            }
            s += '<div class="w3-col s4 w3-card-12 w3-hover-shadow w3-white">';
            s += '<ul class = "w3-large" style = "margin-left:10px; text-align:left !important; list-style-type: none">';
            s += '<li>科目 - ' + victutors.database.document[i].course + '</li>';
            s += '<li>类型 - ' + victutors.database.document[i].type + '</li>';
            s += '<li>时间 - ' + victutors.database.document[i].year + '-' + victutors.database.document[i].semester + '</li>';
            s += '<li>教授 - ' + victutors.database.document[i].prof_first + ' ' + victutors.database.document[i].prof_last + '</li>';
            s += '<li>信息 - ' + victutors.database.document[i].description + '</li>';
            s += '</ul><button onclick = "victutors.database.download(\'./Database/CSC/' + victutors.database.document[i].link + '\')" style = "margin-left:36%" class="w3-hover-red w3-teal w3-btn w3-large">下载 <i class="fa fa-download" aria-hidden="true"></i></button></div>';

            if ((docCount + 1) % 3 == 0) {
                s += '</div>';
            }
            docCount++;
        }
    }
    if (docCount == 0) {
        $('#emptyAlert').show();
        victutors.database.setLanding();
        victutors.database.selectedValue = '';
        $('.selectpicker').selectpicker('deselectAll');
        $('#filter_all,#filter_exam,#filter_assignment').bootstrapToggle('off'); // Unchecks it
        return;
    }
    if ((docCount + 1) % 3 !== 0) {
        s += '</div>';
    }

    $('#docList').html(s);
    $('#mainContent').css({ 'height': victutors.database.InitialFooterPosition });
}

victutors.database.getDocAll = function() {
    victutors.database.setLanding();
    victutors.database.selectedValue = '';
    $('.selectpicker').selectpicker('deselectAll');
    $('#filter_all,#filter_exam,#filter_assignment').bootstrapToggle('off'); // Unchecks it
}

victutors.database.download = function(path) {
    window.location = path;
}

victutors.database.setUpSelectPicker = function() {
    for (i = 0; i < victutors.database.courseList.length; i++) {
        $('#selecter').append('<option class = "w3-large">' + victutors.database.courseList[i] + '</option>');
    }
    $('#selecter').selectpicker({ 'selectedText': '', style: 'btn-default btn-lg' });
}

$(window).scroll(function() {
    //gotoTop button
    if ($(window).scrollTop() > 300) {
        $('#GoToTopButton').show();
    } else {
        $('#GoToTopButton').fadeOut();
    }
})

victutors.database.DBlogin = function() {
    if ($('#databasePassword').val() === victutors.list.databasePassword) {
        sessionStorage.setItem('database', true);
        document.getElementById('databaseModal').style.display = 'none';
    } else {
        $('#databaseErrorAlert').show();
    }
}

$(document).ready(function() {

    //load document
    victutors.database.setUpSelectPicker();
    $.ajax({
        url: "getDocument.php",
        type: 'GET',
        success: function(response) {
            var result = JSON.parse(response);
            var array = $.map(result, function(value, index) {
                return [value];
            });
            array.forEach(function(element) {
                var tmp = element.split('.');
                var data = tmp[0].split('-');
                var format = tmp[1];
                var file = {
                    'course': data[0],
                    'type': data[1],
                    'year': data[2],
                    'semester': data[3],
                    'prof_first': data[4],
                    'prof_last': data[5],
                    'description': data[6],
                    'link': element
                }
                victutors.database.document.push(file);
            }, this);
            victutors.database.setLanding();
            victutors.database.InitialFooterPosition = $('#mainContent').height();
        },
        error: function() {
            alert("error");
        }
    });

    $('#selecter').change(function() {
        victutors.database.selectedValue = $(this).find("option:selected").text();
    });
});