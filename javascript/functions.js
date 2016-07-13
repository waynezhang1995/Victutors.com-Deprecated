function SendEmail() {
	// must have a cc field eventhough its empty!!
	var link = "mailto:waynez@uvic.com" + "?cc=" + "&subject="
			+ escape(document.getElementById('subject').value) + "&body="
			+ escape(document.getElementById('content').value);
	window.location.href = link;
}

function gotoTop() {
	$("html, body").animate({
		scrollTop : 0
	}, "slow");
	return false;
}

function LoadTutorList(faculty) {
	var s = '';
	s += '<div class="w3-modal-content w3-animate-top w3-card-8"> ';
	s += '<header class="w3-container w3-teal"> ';
	s += '<span onclick="document.getElementById(\'TutorList\').style.display=\'none\' " class="w3-closebtn">&times;</span> ';
	s += '<h2 class="w3-center w3-lobster">' + faculty + '</h2>';
	s += '</header>';
	s += '<div class="w3-container" style="postion: absolute; length: 500px; height: 400px; margin-top: 30px"> </div>';
	s += '<footer class="w3-container w3-teal"> <p class="w3-center w3-lobster ">www.Victutor.com</p></footer>';
	s += '</div>';

	$('#ListOfTutor').html(s);
	document.getElementById('TutorList').style.display = 'block';
}

//document ready start from here
$(document)
		.ready(
				function() {
					LoadFaculty();
					PriceList();
					Recommend();
					// go to top tooltip
					$(
							'[data-toggle="gotop"], [data-toggle="title"], [data-toggle="showlist"]')
							.tooltip({
								trigger : 'hover'
							});
					// navibar scroll to a certain area
					var $root = $('html, body');
					$("#JoinUs, #Price, #Team, #Faculty").click(function() {
						$root.animate({
							scrollTop : $($.attr(this, 'href')).offset().top
						}, 500);
						return false;
					});
									
				});

function LoadFaculty(faculty) {
	var facultyList = [ {
		name : "CSC",
		fullname : "\'Computer Science\'",
		imgsrc : "\"./Images/uvic.png\""
	}, {
		name : "MATH",
		fullname : "\'Mathematic\'",
		imgsrc : "\"./Images/uvic.png\""
	}, {
		name : "ECON",
		fullname : "\'Economic\'",
		imgsrc : "\"./Images/uvic.png\""
	}, {
		name : "STATS",
		fullname : "\'Statistic\'",
		imgsrc : "\"./Images/uvic.png\""
	} ];

	//header part
	for (i = 0; i < 4; i++) {
		var s = '<div class="w3-quarter ">';
		s += '<img src='
				+ facultyList[i].imgsrc
				+ ' alt="Boss" style="width: 45%" class="w3-circle w3-hover-opacity">';
		s += '<h3>' + facultyList[i].name + '</h3>';
		s += '<button class="w3-btn w3-green w3-padding-large" onclick="LoadTutorList('
				+ facultyList[i].fullname
				+ ')" data-toggle="showlist" data-placement="bottom" title="点击查看完整名单">家教名单</button>';
		s += '</div>';
		var div = facultyList[i].name;
		$('#' + div).html(s);
	}
}

	function PriceList() {
		//we can add some actual info in the future
		var PriceList = [ {
			name : "Plist01"
		}, {
			name : "Plist02"
		}, {
			name : "Plist03"
		}, ];

		
		//!!! right now we are not filling anything. In the future we uncomment the for loop and put some actual info
		for(i = 0 ; i < 3 ; i++){   
		var s = '';
		var id = PriceList[i].name;
		s += ' <ul class="w3-ul w3-border w3-center w3-hover-shadow">';
		s += '<li class="w3-black">'
				+ '<p class="w3-xlarge">COMING SOON!</p>'
				+ '</li>'
				+ '<li class="w3-padding-16">'
				+ '<h2 class="w3-wide">COMING SOON!</h2> <span class="w3-opacity">COMING SOON!</span>'
				+ '</li>';
		s += '<li class="w3-light-grey w3-padding-24">'
				+ '<button class="w3-btn w3-green w3-padding-large">COMING SOON!</button>'
				+ '</li>';
		s += '</ul></div>';
		$('#' + id).html(s);
		}
	}
	
	function Recommend(){
		var PeopleList = [ {
			name : "T01",
			imgsrc: "./Images/img_avatar1.png"
		}, {
			name : "T02",
			imgsrc: "./Images/img_avatar3.png"
		}, {
			name : "T03",
			imgsrc: "./Images/img_avatar6.png"
		}, ];
		
		for(i = 0 ; i < 3 ; i++){   
			var s = '';
			var id = PeopleList[i].name;
			s += '<div class="w3-card-4 ">';
			s += '<img src="' +PeopleList[i].imgsrc +'"' +
					'style="width: 100%">' +
					'<div class="w3-container">' +
					'<h3>COMING SOON!</h3>' +
					'<p class="w3-opacity">COMING SOON!</p>' +
					'<p>COMING SOON!.</p>' +
					'<p>' +
					'<button class="w3-btn">COMING SOON!</button>'+
					'</p>'+
					'</div>';
			$('#' + id).html(s);
			}
	}
	
	


