	//Menu Lateral
	$(window).on("scroll", function(e) {
		if ($(window).scrollTop() > 50) {
			$("body").addClass("sticky");
		} else {
			$("body").removeClass("sticky");
		}
	});

	$(document).on("click", function(e) {
		e.preventDefault();
		var $item = $(".rad-dropmenu-item");
		if ($item.hasClass("active")) {
			$item.removeClass("active");
		}
	});
	
	$('.rad-sidebar a').on("click", function(e) {
		e.stopPropagation();
	});

	$('.rad-chat-body').slimScroll({
		height: '450px',
		color: "#c6c6c6"
	});

	$('.rad-timeline-body').slimScroll({
		height: '450px',
		color: '#c6c6c6'
	});
	
	$('.rad-activity-body').slimScroll({
		height: '250px',
		color: '#c6c6c6'
	});

	$(".rad-toggle-btn").on('click', function() {
		$(".rad-logo-container").toggleClass("rad-nav-min");
		$(".rad-sidebar").toggleClass("rad-nav-min");
		$(".rad-body-wrapper").toggleClass("rad-nav-min");
		setTimeout(function() {
			initializeCharts();
		}, 200);
	});

	//Son los iconos de arriba para recargar el contenido
	$("li.rad-dropdown > a.rad-menu-item").on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$(".rad-dropmenu-item").removeClass("active");
		$(this).next(".rad-dropmenu-item").toggleClass("active");
	});

	$(".fa-chevron-down").on("click", function() {
		var $ele = $(this).parents('.panel-heading');
		$ele.siblings('.panel-footer').toggleClass("rad-collapse");
		$ele.siblings('.panel-body').toggleClass("rad-collapse", function() {
			setTimeout(function() {
				initializeCharts();
			}, 200);
		});
	});

	$(".fa-close").on("click", function() {
		var $ele = $(this).parents('.panel');
		$ele.addClass('panel-close');
		setTimeout(function() {
			$ele.parent().remove();
		}, 210);
	});

	$(".fa-rotate-right").on("click", function() {
		var $ele = $(this).parents('.panel-heading').siblings('.panel-body');
		$ele.append('<div class="overlay"><div class="overlay-content"><i class="fa fa-refresh fa-2x fa-spin"></i></div></div>');
		setTimeout(function() {
			$ele.find('.overlay').remove();
		}, 2000);
	});

	//Ventana 
	$("li.rad-dropdown > a.rad-menu-item").on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$(".rad-dropmenu-item").removeClass("active");
		$(this).next(".rad-dropmenu-item").toggleClass("active");
	});

	//Elige un coLor
	$('.rad-chk-pin input[type=checkbox]').change(function(e) {
		$('body').toggleClass("flat-theme");
		$("#rad-color-opts").toggleClass("hide");
	});

	$('.rad-color-swatch input[type=radio]').change(function(e) {
		if ($('.rad-chk-pin input[type=checkbox]').is(":checked")) {
			$('body').removeClass().addClass("flat-theme").addClass(this.value);
			$('.rad-color-swatch label').removeClass("rad-option-selected");
			$(this).parent().addClass("rad-option-selected");
			$(window).scrollTop(0);
			settings.regionStyle.initial.fill = colorMap[this.value];
			settings.series.regions[0].scale = ['#A8ECFF', '#FA71D4'];
			
		} else {
			return false;
		}
	});
	
	
	$(".rad-notification-item").on("click", function(e) {
		e.stopPropagation();
	});
	
//CHAT

$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="img/2.jpg" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});


//Post
  $(".post-content img").on("click", function(){
    $(".image-display div").css("background-image", "url('" + $(this).attr("src") + "')");
    $(".image-display").fadeIn(300).css("display", "flex");
    $(".image-display div").delay(100).show(300);  
  });
  $(".image-display").on("click", function(){
    $(".image-display").delay(100).fadeOut(300);
    $(".image-display div").hide(300);
  });