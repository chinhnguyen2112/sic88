$(document).ready(function () {
	$("#list_mucluc").toc({
		content: "div.content_blog",
		headings: "h2,h3,h4",
		indexingFormats: {
			h2: "number",
			h3: "number",
			h4: "number",
		},
	});
});
var check_click = 0;
$(".box_title_ml").click(function () {
	if (check_click % 2 == 0) {
		$(".list_mucluc").show(100);
		$(".img_show_ml").css("rotate", "90deg");
	} else {
		$(".list_mucluc").hide(100);
		$(".img_show_ml").css("rotate", "unset");
	}
	++check_click;
});

var width_img = $(".img_blog_same").width();
var height_img = width_img / 1.73;
$(".img_blog_same").css("height", height_img);
