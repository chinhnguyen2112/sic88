var screen = screen.width;
if (screen > 768 && screen < 1025)  {
	$("#img_slide_01").attr("src","/images/images_banner/1024/AnyConv.com__bao-hiem-100-1024.webp");
	$("#img_slide_02").attr("src","/images/images_banner/1024/AnyConv.com__KM-the-thao-1024.webp");
	$("#img_slide_03").attr("src","/images/images_banner/1024/AnyConv.com__Li-xi-cuoi-tuan-1024.webp");
	$("#img_slide_04").attr("src","/images/images_banner/1024/AnyConv.com__thuong-nap-100-1024.webp");
	$("#img_slide_05").attr("src","/images/images_banner/1024/AnyConv.com__trai-nghiem-58k-1024.webp");
} else if (screen < 541) {
	$("#img_slide_01").attr("src","/images/images_banner/768/AnyConv.com__bao-hiem-100-768.webp");
	$("#img_slide_02").attr("src","/images/images_banner/768/AnyConv.com__KM-the-thao-768.webp");
	$("#img_slide_03").attr("src","/images/images_banner/768/AnyConv.com__Li-xi-cuoi-tuan-768.webp");
	$("#img_slide_04").attr("src","/images/images_banner/768/AnyConv.com__thuong-nap-100-768.webp");
	$("#img_slide_05").attr("src","/images/images_banner/768/AnyConv.com__trai-nghiem-58k-768.webp");
};

window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          document.getElementById("header_top").style.display = "none";

        } else {
          document.getElementById("header_top").style.display = "block";
        }
      }

function show_menu(e, type) {
	if (type == 1) {
		$(".header_menu").show(200);
		$(e).attr("onclick", "show_menu(this,2)");
		document.getElementById("close_menu").style.display = 'block';
		document.getElementById("open_menu").style.display = 'none';
	} else {
		$(".header_menu").hide(200);
		$(e).attr("onclick", "show_menu(this,1)");
		document.getElementById("open_menu").style.display = 'block';
		document.getElementById("close_menu").style.display = 'none';
	}
}

function show_search(e, type) {
	if (type == 1) {
		$(".search").show(200);
		$(e).attr("onclick", "show_search(this,2)");
		document.getElementById("header_top").style.height = '100px';
	} else {
		$(".search").hide(200);
		$(e).attr("onclick", "show_search(this,1)");
		document.getElementById("header_top").style.height = '36px';
	}
}
function show_submenu(e, type) {
	if (type == 1) {
		$(e).find(".sub_menu").show(200);
		$(e).attr("onclick", "show_submenu(this,2)");
		document.getElementsByClassName("img_arrow").style.transform = 'rotate(0deg)';

	} else {
		$(e).find(".sub_menu").hide(200);
		$(e).attr("onclick", "show_submenu(this,1)");
		document.getElementsByClassName("img_arrow").style.transform = 'rotate(0deg)';

	}
}
$(document).ready(function(){
	$(".img_arrow").click(function(){
	  $(this).toggleClass("img-rotate");
	});
  });
  

