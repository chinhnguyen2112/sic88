var page = 2;
$(".load_more").click(function () {
	var show_more = $(this);
	var form_data = new FormData();
	form_data.append("page", page);
	$.ajax({
		url: "/load_more",
		type: "POST",
		processData: false,
		contentType: false,
		dataType: "json",
		data: form_data,
		success: function (data) {
			++page;
			if (data.status == 0) {
				$(".load_more").remove();
			} else if (data.status == 1) {
				// $(".list_blog_home").append(data.html);
				show_more.before(data.html);
				if (data.next == 0) {
					$(".load_more").remove();
				}
			}
		},
		error: function () {
			alert("error");
		},
	});
});

$('.slider').slick({
	autoplay:true,
	autoplaySpeed: 1000,
	arrows:true,
	prevArrow:'<button type="button" class="slick-prev"><img src="/images/icons/icon_prev.png" alt="icon prev"></button>',
	nextArrow:'<button type="button" class="slick-next"><img src="/images/icons/icon_next.png" alt="icon next"></button>',
	centerMode:true,
	slidesToShow:1,
});
var val = 0;
var width = screen.width;
if (width > 540) {
  val = 4;
} else {
  val = 2;
}

$('.slider_all_game').slick({
	autoplay:true,
	autoplaySpeed: 2000,
	arrows:true,
	centerMode:true,
	slidesToShow:4,
});


$(".name_tabs").click(function () {
  var id = $(this).data("id");
  var active = $(".active").data("id");
  if (id != active) {
	$(".active").removeClass("active");
	$(this).addClass("active");
	if (id == 1) {
	  $(".item_01").show();
	  $(".item_02").hide();
	  $(".item_03").hide();
	  $(".item_04").hide();
	  $(".item_05").hide();
	  $(".item_06").hide();
	}
	if (id == 2) {
	  $(".item_02").show();
	  $(".item_01").hide();
	  $(".item_03").hide();
	  $(".item_04").hide();
	  $(".item_05").hide();
	  $(".item_06").hide();
	}
	if (id == 3) {
	  $(".item_03").show();
	  $(".item_02").hide();
	  $(".item_01").hide();
	  $(".item_04").hide();
	  $(".item_05").hide();
	  $(".item_06").hide();
	}
	if (id == 4) {
	  $(".item_04").show();
	  $(".item_02").hide();
	  $(".item_03").hide();
	  $(".item_01").hide();
	  $(".item_05").hide();
	  $(".item_06").hide();
	}
	if (id == 5) {
	  $(".item_05").show();
	  $(".item_02").hide();
	  $(".item_03").hide();
	  $(".item_04").hide();
	  $(".item_01").hide();
	  $(".item_06").hide();
	}
	if (id == 6) {
	  $(".item_06").show();
	  $(".item_02").hide();
	  $(".item_03").hide();
	  $(".item_04").hide();
	  $(".item_05").hide();
	  $(".item_01").hide();
	}
  }
});
